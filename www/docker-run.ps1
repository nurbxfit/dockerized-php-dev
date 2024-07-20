# Create Docker network
docker network create php-net

# Build the Docker image
docker build -t www-php .

# Run the Docker container
docker run --mount type=bind,source="${PWD}/src/",target=/usr/share/nginx/html --net php-net -it --rm --name www www-php
