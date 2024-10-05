CREATE DATABASE IF NOT EXISTS cadastro_funcionarios;
USE cadastro_funcionarios;

CREATE TABLE IF NOT EXISTS funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    idade INT NOT NULL,
    email VARCHAR(100) NOT NULL,
    celular VARCHAR(15) NOT NULL,
    principal VARCHAR(5) NOT NULL,
    corporativo VARCHAR(5) NOT NULL,
    whatsapp VARCHAR(5) NOT NULL
);
