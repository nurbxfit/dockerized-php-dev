FROM php:8.2-fpm

WORKDIR /usr/share/nginx/html/


# VOLUME [ "./src/:/usr/share/nginx/html" ]

RUN apt-get update
RUN apt-get install -y libpq-dev
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo pdo_pgsql


COPY --chown=1000:1000 ./src .
EXPOSE 9000

# For file upload
# RUN chown -R 33:33 .
# RUN chmod -R 755 ./images/profile/