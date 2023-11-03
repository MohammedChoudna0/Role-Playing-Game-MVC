CREATE DATABASE IF NOT EXISTS rolegame;

USE rolegame;

CREATE TABLE IF NOT EXISTS creature (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) ,
    description VARCHAR(255),
    avatar VARCHAR(255) ,
    attackPower INT(11),
    lifeLevel INT(11),
    weaponType VARCHAR(45)
);
CREATE TABLE IF NOT EXISTS `rolegame`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(50) NULL DEFAULT NULL,
  `password` VARCHAR(50) NULL DEFAULT NULL,
  `name` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);
