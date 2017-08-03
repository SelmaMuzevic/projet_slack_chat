DROP DATABASE IF EXISTS `ajax_chat`;

CREATE DATABASE `ajax_chat` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

GRANT ALL PRIVILEGES ON `ajax_chat`.* TO 'ajax_chat_user'@'localhost' IDENTIFIED BY 'We love SQL API!';

USE `ajax_chat`;

CREATE TABLE `message` (
    ID INT AUTO_INCREMENT PRIMARY KEY, 
    text TEXT NOT NULL,
    timestamp TIMESTAMP NOT NULL
);