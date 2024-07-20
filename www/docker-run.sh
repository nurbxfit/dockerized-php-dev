#!/bin/bash
docker network create php-net
docker build -t www-php . && docker run --mount type=bind,source="${pwd}/src/",target=/usr/share/nginx/html --net php-net -it --rm --name www www-php