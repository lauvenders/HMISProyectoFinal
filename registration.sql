CREATE DATABASE multi_login;

USE multi_login;

CREATE TABLE users (
    id          INT(10),
    username	VARCHAR(100),
    email       VARCHAR(100),
    user_type	VARCHAR(100),
    password	VARCHAR(100)
);
