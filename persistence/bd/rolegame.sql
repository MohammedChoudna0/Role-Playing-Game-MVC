CREATE DATABASE IF NOT EXISTS rolegame;
USE rolegame;

CREATE TABLE IF NOT EXISTS creature (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150),
    description VARCHAR(255),
    avatar VARCHAR(255),
    attackPower INT(11),
    lifeLevel INT(11),
    weaponType VARCHAR(45)
);

CREATE TABLE IF NOT EXISTS `user` (
    id INT(11) NOT NULL AUTO_INCREMENT,
    email VARCHAR(50) NULL DEFAULT NULL,
    password VARCHAR(50) NULL DEFAULT NULL,
    name VARCHAR(100) NULL DEFAULT NULL,
    PRIMARY KEY (id)
);

INSERT INTO creature (name, description, avatar, attackPower, lifeLevel, weaponType) VALUES
('Dragón', 'Un ser mítico y poderoso', 'https://th.bing.com/th/id/R.43f947d9f6faa034547f7b37bd895ac9?rik=dA0YBJaa%2ftMoHw&pid=ImgRaw&r=0', 100, 200, 'Fuego'),
('Elfo', 'Criatura mágica de los bosques', 'https://i.pinimg.com/originals/b9/bf/60/b9bf60c438e7e269fcb8b3cabed61395.jpg', 70, 150, 'Arco');

INSERT INTO `user` (email, password, name) VALUES
('usuario1@ejemplo.com', '123456', 'Usuario Uno'),
('usuario2@ejemplo.com', '123456', 'Usuario Dos');
