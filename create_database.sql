CREATE DATABASE IF NOT EXISTS student;

USE student;

CREATE TABLE IF NOT EXISTS students (
    PRN INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL
);
