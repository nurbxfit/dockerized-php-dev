#!/bin/bash
# docker volume create php-vol
docker network create php-net
docker build -t nginx-php . && docker run --net php-net -p 80:80 -it --rm --name nginx nginx-php 