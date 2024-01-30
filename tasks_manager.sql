DROP DATABASE IF EXISTS tasks;
CREATE DATABASE tasks;
USE tasks;

CREATE TABLE `tasks` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` varchar(255) NOT NULL,
    `description` text NOT NULL,
    `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `status` tinyint(1) NOT NULL DEFAULT '0'
);

CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL
);
