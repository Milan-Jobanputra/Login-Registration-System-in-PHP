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

Now Centralize your database connection code and reuse it in multiple files, you can create a separate PHP file for the database connection and then include or require that file in other files where you need the database connection. 

Remember to replace the placeholders (your_server_name, your_username, your_password, your_database) with your actual database credentials. 

Next create register.php file for regiter users and save value in to the db.

Now create a login.php file. To Check the user input id password valid or not from db. 

Dont forget to include require_once('db.php'); to add in all files for db connectivity.

Now Last at we create, Dashborad.php for welcome user file and Logout file for the end the session.

Remember to replace the placeholders (your_server_name, your_username, your_password, your_database) with your actual database credentials.

This is a basic example, and you might want to add more security measures, such as input validation, error handling, and secure password storage.
