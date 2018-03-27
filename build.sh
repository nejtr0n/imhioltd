#!/usr/bin/env bash
# Run migrations
docker-compose exec db psql -U postgres imhioltd -f /dumps/db.sql
docker-compose exec db psql -U postgres imhioltd -f /dumps/data.sql

# Build php
docker-compose exec -u 1000 imhioltd composer update

