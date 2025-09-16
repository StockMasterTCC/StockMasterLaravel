DROP DATABASE IF EXISTS usuario;
CREATE DATABASE usuario;
USE usuario;

CREATE TABLE usuario (
email VARCHAR(100) NOT NULL,
senha int NOT NULL,
nome VARCHAR(255) NOT NULL,
sobrenome VARCHAR(255) NOT NULL,
PRIMARY KEY(email)
);

INSERT INTO usuario (email, senha, nome, sobrenome, cidade, estado)
VALUES ('admin@gmail.com', '12345', 'admin', 'administrando');