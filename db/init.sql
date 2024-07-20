CREATE DATABASE pg_db;

\c pg_db;

CREATE TABLE movies (
    id SERIAL PRIMARY KEY,
    title VARCHAR(50),
    "year" INT NOT NULL,
    ranking INT
); 

INSERT INTO movies (title, "year", ranking)
VALUES ('Reboot', 2012, 1 ),
('Deadpool & Wolverine', 2024, NULL );