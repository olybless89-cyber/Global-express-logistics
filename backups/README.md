# VEXO Logistics — Database Backups

This folder holds automatic PostgreSQL snapshots committed by the
`.github/workflows/backup.yml` GitHub Action.

- `latest.sql` — the most recent full dump (schema + data).
- `history/vexologistics-YYYYMMDD-HHMM.sql` — timestamped snapshots (newest 60 kept).

Because these live in GitHub, your data survives even if the Render account (or
any host) is suspended or the free database is deleted.

## Restore into a new/empty database

1. Create a fresh PostgreSQL database (new Render Postgres, or anywhere).
2. Get its connection URL (Render: the **External Database URL**, ending in
   `?sslmode=require`).
3. Load the latest snapshot:

   ```bash
   psql "<DATABASE_URL>" -f backups/latest.sql
   ```

   The dump uses `--clean --if-exists`, so it drops and recreates the tables —
   safe to run against a database that already has the old schema.

4. Point the app's `DATABASE_URL` at this database and redeploy. Done.

## Restore a specific point in time

Pick a file from `history/` instead of `latest.sql`:

```bash
psql "<DATABASE_URL>" -f backups/history/vexologistics-20261116-1800.sql
```

## Make a manual backup right now

GitHub → **Actions** tab → **Database Backup to GitHub** → **Run workflow**.
