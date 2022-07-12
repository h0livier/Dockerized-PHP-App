CREATE DATABASE IF NOT EXISTS test;

USE test;

CREATE TABLE IF NOT EXISTS test(
    value VARCHAR(25)
);

INSERT INTO test(value) VALUES ('test'), ('oui'), ('non');