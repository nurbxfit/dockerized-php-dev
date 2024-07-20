FROM postgres:latest

ENV POSTGRES_PASSWORD password123
ENV POSTGRES_USER postgres

# VOLUME [ "./data:/var/lib/postgresql/data" ]

COPY ./init.sql /docker-entrypoint-initdb.d/init.sql