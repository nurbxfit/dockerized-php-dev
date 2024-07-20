# PHP Development Environment with Docker

This repository contains examples of how to set up a PHP development environment using Docker.

# Prerequisite

You definitely need docker installed in your system.

## Setup Instructions

There are two ways to run the development environment:

1. **Using Docker Compose**:
   Run the following command in the root of the repository:

   ```sh
   docker-compose up --build
   ```

   To Stop the container:

   ```
   ctrl + c
   ```

   or stop it using docker desktop GUI.

   To remove the container, can run this command:

   ```sh
   docker-compose down
   ```

2. **OR Using Individual scripts**:

   - navigate to `www` folder and run the script :

   ```
   ./docker-run.sh
   ```

   - navigate to `nginx` folder and run the script :

   ```
   ./docker-run.sh
   ```

   - navigate to `db` folder and run the script :

   ```
   ./docker-run.sh
   ```

   - note: # if using windows run the .bat or .ps1 script

After you start the container, you can go to `http://localhost` to view it
then make changes to the `www/public/index.php` file.
When you refresh your browser, you will see the changes without having to restart the Docker container.

# Folder Structure

- `www`: Contains the PHP application files.
- `nginx`: Contains the Nginx configuration and Docker scripts.
- `db`: Contains the database configuration and Docker scripts.

# Change the Development Port.

Currently the dev port is `:80` , you might want to change it to something else for example `8081`.

If you are running with it with `docker-compose up`.
You should change the port for nginx inside the docker-compose.yml file like this

```yml
services:
  nginx:
    build:
      context: ./nginx
      dockerfile: Dockerfile
    restart: always
    ports:
      - "8081:80"
    volumes:
      - type: bind
        source: ./nginx/default.conf
        target: /etc/nginx/conf.d/default.conf
```

Note: the first part is the host port (our machine) and the second part after the column `:` is the container port which should default to 80.

If you run using the individual script.

You should change the `docker-run.sh` script instead.

Update the `docker run` `-p` parameter like this.

```sh
docker build -t nginx-php . && docker run --net php-net -p 8081:80 -it --rm --name nginx nginx-php
```

## Key Concept

If we are not using `docker-compose up`, we need to create a Docker network where our different Docker containers can communicate with each other using their assigned name aliases.

In this example, if you look into the `docker-run.sh`, I created a network called `php-net` which is shared by the containers.

If you look under `nginx/default.conf`, you'll notice that we forward the Nginx request to the FastCGI service running in the `www:9000`. `www` is the container name for our `www` folder where we run our PHP code using FastCGI. Because we are using the same `php-net` network, our Nginx container is able to resolve the `www` container's FastCGI service running on port 9000.

# Note:

This docker configuration is just for development, I do not recommend using this for production.
