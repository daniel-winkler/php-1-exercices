-- Crear la base de datos.
CREATE DATABASE php_exercices
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE php_exercices;

-- Crear la tabla de empleados.
CREATE TABLE IF NOT EXISTS `employees` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(128) NOT NULL,
    `age` INT NOT NULL,
    `city` VARCHAR(128),
    PRIMARY KEY (`id`),
    UNIQUE (`email`)
)  ENGINE=INNODB;

-- Insertar datos de prueba.
INSERT INTO `employees` (`name`, `email`, `age`, `city`)
    VALUES ('Carlos', 'carlos@correo.com', 20, 'Benalmádena'),
        ('Carmen', 'carmen@correo.com', 15, 'Fuengirola'),
        ('Carmelo', 'carmelo@correo.com', 17, 'Torremolinos'),
        ('Carolina', 'carolina@correo.com', 18, 'Málaga');
