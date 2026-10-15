# AGENTS.md

## Project

Global Express Logistics courier-tracking site. Classic PHP + MySQL app served by
Apache (`php:8.2-apache`), containerised and deployed on Railway from `main`.

## Layout

- Public pages: `index.html`, `about.html`, `services.html`, `contact.php`,
  `track.html`, `cargo-tracking.php`, `quote.php`.
- Tracking result: `track-result.php` (public, POST `Consignment`).
- Admin area: `admin.php`, `admin-list.php`, `add-courier.php`,
  `add-new-officer.php`, `change-password.php`, `courier-list.php`,
  `delivered-list.php`, `edit*.php`, `manager-list.php`, `print.php`,
  `search-*.php`, `view-courier.php`.
- Auth helpers: `library.php` (`checkUser`, `isUser`, `verifyPassword`,
  `hashPassword`, `adminCredentials`, `upgradePasswordHash`).
- Form handler: `process.php` (action router, requires a logged-in session).
- Schema: `SQL/SQL.sql`, imported on first boot by `docker/entrypoint.sh`.

## Auth model

- Passwords are stored in `tbl_courier_officers.off_pwd` as bcrypt hashes
  (`varchar(255)`; bcrypt is 60 chars, so the column must not be narrower).
  Legacy plaintext rows still verify and are upgraded to a hash on first login.
- The seeded `admin` officer row is given an unusable random hash. The
  entrypoint also rewrites any legacy `admin`/`admin` row, so that default
  credential never works on a fresh or existing database.
- Admin login is read from the environment, never from source:
  - `ADMIN_USERNAME`
  - `ADMIN_PASSWORD_HASH` (bcrypt hash; generate with
    `php -r 'echo password_hash("secret", PASSWORD_DEFAULT);'`)
- Any admin page must call `isUser()` right after `require_once('library.php')`.
- `process.php` calls `isUser()` before dispatching any action.

## Build / run / test locally

```
docker compose -f /tmp/sec-test/docker-compose.yml up -d   # mariadb + php web on :8099
```

Test scripts used to validate auth (also a good template):

```
BASE=http://127.0.0.1:8099 ./login_test.sh   # login + injection cases
BASE=http://127.0.0.1:8099 ./flow_test.sh    # guards, hashing, tracking lookup
```

Lint PHP before committing:

```
docker run --rm -v "$PWD":/app -w /app php:8.2-cli sh -c 'for f in *.php; do php -l "$f"; done'
```

## Deploy

Railway builds `Dockerfile` from `main`. Set the two `ADMIN_*` variables in the
Railway service before relying on admin login. On boot the entrypoint waits for
MySQL, imports the schema if the table is missing, and widens `off_pwd` to
`varchar(255)` so pre-existing databases can store hashes.

## Known remaining debt (not yet addressed)

- `process.php` insert/update statements still build SQL with string
  interpolation of `$_POST`. They are behind `isUser()` now, but should be
  parameterised next.
- Login now calls `session_regenerate_id()`; the admin forms still need a
  CSRF token.
