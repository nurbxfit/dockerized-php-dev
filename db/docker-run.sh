#!/bin/bash
docker build -t postgres-db-php .
docker run -v pg_data:/var/lib/postgresql/data --net php-net -p 5432:5432 -it --rm --name pg-db postgres-db-php