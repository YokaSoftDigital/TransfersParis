# TransfersParis

Поднятие WordPress-демо из бекапа (папка `Beckup`) через Docker.

## Что уже настроено

- `docker-compose.yml` — WordPress + MariaDB.
- `scripts/import-backup.sh` — импортирует дамп БД и автоматически проверяет, что схема WordPress корректная.
- В `wp-config.php` добавлена поддержка переменных окружения (`WORDPRESS_DB_*`), чтобы сайт работал локально в контейнере.

## Быстрый запуск

```bash
docker compose up -d
./scripts/import-backup.sh
```

После этого сайт доступен на:

- http://localhost:8080

## Какая из двух БД используется

В `wp-config.php` исходное имя БД — `tranpari_transfer`, поэтому скрипт сначала импортирует:

- `Beckup/tranpari_transfer.2020-06-26.sql`

Если после импорта не обнаружена ключевая таблица WordPress (`wp_options`), скрипт автоматически переключается на:

- `Beckup/tranpari_db.2020-06-26.sql`

## Полезные команды

Остановить:

```bash
docker compose down
```

Остановить и удалить volume с БД (чистый старт):

```bash
docker compose down -v
```
