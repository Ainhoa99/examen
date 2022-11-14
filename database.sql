CREATE DATABASE agenda DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
USE agenda;
CREATE TABLE IF NOT EXISTS contactos (
    id INT UNSIGNED AUTO_INCREMENT,
    nombre VARCHAR(15) NOT NULL,
    apellidos VARCHAR(40),
    direccion VARCHAR(100),
    cp INT(5),
    fijo CHAR(9),
    movil CHAR(9) NOT NULL,
    tipo ENUM('amigo', 'trabajo', 'familia', 'otro'),
    detalle VARCHAR(255),
    PRIMARY KEY (id)
)  ENGINE=INNODB;
INSERT INTO contactos (nombre, apellidos, direccion, cp, fijo, movil, tipo, detalle) VALUES
    ('Iker', 'González López', 'Santutxu', '48006', '', '628847874', 'trabajo', 'Compañero de clase'),
    ('Asier', 'López Castro', 'Bilbao', '48010', '944104569', '688602738', 'familia', 'Hermano'),
    ('Alazne', 'Iraguen', 'Bilbao', '48013', '', '688865033', 'amigo', 'Amiga colegio'),
    ('Guillermo', 'Peligros Mendiola', 'Bilbao', '48010', '', '697318049', 'otro', 'Presi de Txiribuelta')