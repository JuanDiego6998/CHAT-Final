CREATE DATABASE IF NOT EXISTS chat;
USE chat;

CREATE TABLE IF NOT EXISTS Primarios (
priID INT AUTO_INCREMENT,
priNombre VARCHAR(100),
priDescripcion VARCHAR(500),
CONSTRAINT pri_PK PRIMARY KEY (priID) 
);

CREATE TABLE IF NOT EXISTS Secundarios (
secID INT AUTO_INCREMENT,
secNombre VARCHAR(100),
secDescripcion VARCHAR(500),
CONSTRAINT sec_PK PRIMARY KEY (secID)
);

CREATE TABLE IF NOT EXISTS Imagenes (
imgID INT AUTO_INCREMENT,
imgURL VARCHAR(100),
imgRef INT,
CONSTRAINT img_PK PRIMARY KEY (imgID)
);

CREATE TABLE IF NOT EXISTS Estudiantes(
estID INT AUTO_INCREMENT,
estNombre VARCHAR(100),
estDescripcion VARCHAR(500),
CONSTRAINT est_PK PRIMARY KEY (estID)
);