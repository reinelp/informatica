create database pruebainformatica;

USE pruebainformatica;

CREATE TABLE usuarios (

Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
Nombre varchar(25) NOT NULL,
Apellido varchar(25) NOT NULL

);

INSERT INTO usuarios (Nombre, Aepllido) VALUES ('Avis','Torres');
INSERT INTO usuarios (Nombre, Aepllido) VALUES ('Reinel','Puentes');