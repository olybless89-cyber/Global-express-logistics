#!/bin/sh
set -e

# Railway injects $PORT; make Apache listen on it
PORT="${PORT:-80}"
sed -ri "s/^Listen .*/Listen ${PORT}/" /etc/apache2/ports.conf
sed -ri "s/<VirtualHost \*:[0-9]+>/<VirtualHost *:${PORT}>/" /etc/apache2/sites-available/000-default.conf

# Import schema on first boot if the database is empty
if [ -n "$MYSQLHOST" ]; then
  i=0
  until mysql --skip-ssl -h"$MYSQLHOST" -P"${MYSQLPORT:-3306}" -u"$MYSQLUSER" -p"$MYSQLPASSWORD" -e "SELECT 1" "$MYSQLDATABASE" >/dev/null 2>&1; do
    i=$((i+1)); [ $i -ge 30 ] && echo "MySQL not reachable, starting anyway" && break
    echo "Waiting for MySQL..."; sleep 2
  done
  EXISTS=$(mysql --skip-ssl -N -h"$MYSQLHOST" -P"${MYSQLPORT:-3306}" -u"$MYSQLUSER" -p"$MYSQLPASSWORD" "$MYSQLDATABASE" \
    -e "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema='$MYSQLDATABASE' AND table_name='tbl_courier_officers'" 2>/dev/null || echo 0)
  if [ "$EXISTS" = "0" ]; then
    echo "Importing schema..."
    mysql --skip-ssl -h"$MYSQLHOST" -P"${MYSQLPORT:-3306}" -u"$MYSQLUSER" -p"$MYSQLPASSWORD" "$MYSQLDATABASE" < /docker/schema.sql && echo "Schema imported."
  fi
fi

exec docker-php-entrypoint "$@"
