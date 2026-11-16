#!/bin/sh
set -e

# Ensure exactly one Apache MPM (prefork, required by mod_php)
rm -f /etc/apache2/mods-enabled/mpm_event.* /etc/apache2/mods-enabled/mpm_worker.*
a2enmod mpm_prefork >/dev/null 2>&1 || true

# Railway/Render inject $PORT; make Apache listen on it
PORT="${PORT:-80}"
sed -ri "s/^Listen .*/Listen ${PORT}/" /etc/apache2/ports.conf
sed -ri "s/<VirtualHost \*:[0-9]+>/<VirtualHost *:${PORT}>/" /etc/apache2/sites-available/000-default.conf

# Build a psql connection argument: prefer DATABASE_URL, else rely on PG* env vars.
if [ -n "$DATABASE_URL" ]; then
  CONN="$DATABASE_URL"
else
  CONN=""   # psql will read PGHOST/PGUSER/PGPASSWORD/PGDATABASE from the environment
fi

psql_do() {
  if [ -n "$CONN" ]; then psql "$CONN" "$@"; else psql "$@"; fi
}

if [ -n "$DATABASE_URL" ] || [ -n "$PGHOST" ]; then
  # Wait for PostgreSQL to accept connections.
  i=0
  until psql_do -tAc "SELECT 1" >/dev/null 2>&1; do
    i=$((i+1)); [ $i -ge 30 ] && echo "PostgreSQL not reachable, starting anyway" && break
    echo "Waiting for PostgreSQL..."; sleep 2
  done

  # Import schema on first boot if the main table is missing.
  EXISTS=$(psql_do -tAc "SELECT to_regclass('public.tbl_courier_officers') IS NOT NULL" 2>/dev/null || echo f)
  if [ "$EXISTS" != "t" ]; then
    echo "Importing schema..."
    psql_do -v ON_ERROR_STOP=1 -f /docker/schema.sql && echo "Schema imported."
  fi

  # Replace the seeded repo admin hash with a random, unusable one so the
  # default account can never be logged into. Real admin login comes from
  # the ADMIN_USERNAME / ADMIN_PASSWORD_HASH environment variables.
  RAND_HASH=$(php -r 'echo password_hash(bin2hex(random_bytes(32)), PASSWORD_DEFAULT);')
  psql_do -c "UPDATE tbl_courier_officers SET off_pwd='${RAND_HASH}' WHERE officer_name='admin' AND off_pwd='\$2y\$10\$0mgFszz0uUHSgEJUWn76UeNXO4SSsbwR9cnSSw41Qah9z86URmYhu';" >/dev/null 2>&1 \
    && echo "seeded admin account disabled." || true
fi

exec docker-php-entrypoint "$@"
