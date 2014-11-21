-- MySQL dump 10.11
--
-- to install this database, from a terminal, type:
-- mysql -u USERNAME -p -h SERVERNAME simpsons < simpsons.sql
--
-- Host: localhost    Database: simpsons
-- ------------------------------------------------------
-- Server version   5.0.45-log

DROP DATABASE IF EXISTS userdb;
CREATE DATABASE userdb;
USE userdb;*/

DROP TABLE IF EXISTS login;
CREATE TABLE login (
id INT UNSIGNED NOT NULL PRIMARY KEY, 
username VARCHAR(32) DEFAULT NULL,
password VARCHAR(32) DEFAULT NULL
);
INSERT INTO login VALUES
(10001, 'john', '1234'),
(10004, 'jane', '1234');

-- debug output to just show the contents of all tables
SHOW TABLES;
SELECT * FROM login;
/* SELECT * FROM grades;
SELECT * FROM students;
SELECT * FROM teachers;*/
