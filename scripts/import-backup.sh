#!/usr/bin/env bash
set -euo pipefail

DB_CONTAINER="transfersparis-db"
BACKUP_DIR="Beckup"
PRIMARY_SQL="$BACKUP_DIR/tranpari_transfer.2020-06-26.sql"
FALLBACK_SQL="$BACKUP_DIR/tranpari_db.2020-06-26.sql"

if ! docker ps --format '{{.Names}}' | rg -q "^${DB_CONTAINER}$"; then
  echo "Container ${DB_CONTAINER} is not running. Start stack first: docker compose up -d"
  exit 1
fi

pick_sql="$PRIMARY_SQL"
if [[ ! -f "$pick_sql" ]]; then
  pick_sql="$FALLBACK_SQL"
fi

echo "Importing SQL dump: $pick_sql"
docker exec -i "$DB_CONTAINER" mysql -uroot -proot tranpari_transfer < "$pick_sql"

echo "Checking required WordPress table..."
if docker exec "$DB_CONTAINER" mysql -N -uroot -proot -e "USE tranpari_transfer; SHOW TABLES LIKE 'wp_options';" | rg -q '^wp_options$'; then
  echo "Import OK: wp_options table found in tranpari_transfer"
  exit 0
fi

echo "Primary dump doesn't look valid for this WP instance. Trying fallback dump..."
docker exec -i "$DB_CONTAINER" mysql -uroot -proot -e "DROP DATABASE IF EXISTS tranpari_transfer; CREATE DATABASE tranpari_transfer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
docker exec -i "$DB_CONTAINER" mysql -uroot -proot tranpari_transfer < "$FALLBACK_SQL"

if docker exec "$DB_CONTAINER" mysql -N -uroot -proot -e "USE tranpari_transfer; SHOW TABLES LIKE 'wp_options';" | rg -q '^wp_options$'; then
  echo "Import OK with fallback dump: $FALLBACK_SQL"
else
  echo "ERROR: Neither dump produced a valid WordPress schema."
  exit 2
fi
