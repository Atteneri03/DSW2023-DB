CREATE DATABASE IF NOT EXISTS `pruebasdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pruebasdb`;
CREATE TABLE `pruebasdb`.`users` ( `id` INT , `name` VARCHAR(30) NOT NULL , `surname` VARCHAR(50) NOT NULL , `tel` VARCHAR(30) NULL , `email` VARCHAR(80) NULL , PRIMARY KEY (`id`));