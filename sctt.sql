CREATE DATABASE mydb;

USE mydb;

CREATE TABLE students (
    student_id INT NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    birthday DATE NOT NULL,
    degree VARCHAR(255) NOT NULL,
    course VARCHAR(255) NOT NULL,
    PRIMARY KEY (student_id)
);