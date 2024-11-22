CREATE DATABASE pconnect;
USE pconnect;

CREATE TABLE IF NOT EXISTS `user` (
    `id` INT(11) PRIMARY KEY AUTO_INCREMENT,
    `first_name` VARCHAR(255) NOT NULL,
    `middle_name` VARCHAR(255),
    `last_name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `permit` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
	`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS distributor_business_information {
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `address` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `contact_number` INT(11) NOT NULL
};

CREATE TABLE IF NOT EXISTS distributor_information {
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `tin_number` VARCHAR(255) NOT NULL,
    `bir` VARCHAR(255) NOT NULL,
    `sec` VARCHAR(255) NOT NULL
};