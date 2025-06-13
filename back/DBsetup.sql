DROP DATABASE IF EXISTS `DB`;
CREATE DATABASE DB;
USE DB;

DROP TABLE IF EXISTS `users`;
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(50),
    password VARCHAR(50)
);

INSERT INTO users (login, password) VALUES 
('admin', 'secret123'),
('user1', 'pass123');
