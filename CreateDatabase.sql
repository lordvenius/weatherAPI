DROP DATABASE IF EXISTS apiTestDB;CREATE DATABASE apiTestDB;
USE apiTestDB;

CREATE TABLE users
(
    id INT
    AUTO_INCREMENT,
    firstName VARCHAR
    (20),
    lastName VARCHAR
    (20),
    age INT,
    userName VARCHAR
    (20),
    PRIMARY KEY
    (id)
);

    INSERT INTO users
        (firstName, lastName, age, userName)
    VALUES
        ("mickel", "lofvenius", 28, "lordvenius");

    INSERT INTO users
        (firstName, lastName, age, userName)
    VALUES
        ("kalle", "karlsson", 15, "calle_cool");

    INSERT INTO users
        (firstName, lastName, age, userName)
    VALUES
        ("berit", "bettanson", 98, "big_b_1898");
