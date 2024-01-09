# Login-Registration-System-in-PHP

Here we going to create a simple example of user registration, login, and logout functionality using PHP and MySQL. 

Here is a simple MySQL database structure for this Login System.

CREATE DATABASE IF NOT EXISTS your_database;

USE your_database;

CREATE TABLE IF NOT EXISTS user_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

Also Given my sql file your_database.sql
