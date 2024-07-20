@echo off
REM Create Docker network
docker network create php-net

REM Build the Docker image
docker build -t www-php .

REM Run the Docker container
docker run --mount type=bind,source="%cd%/src/",target=/usr/share/nginx/html --net php-net -it --rm --name www www-php
