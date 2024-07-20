@echo off
REM Create Docker network
docker network create php-net

REM Build the Docker image
docker build -t postgres-db-php .

REM Run the Docker container
docker run -v pg_data:/var/lib/postgresql/data --net php-net -p 5432:5432 -it --rm --name postgres-db postgres-db-php