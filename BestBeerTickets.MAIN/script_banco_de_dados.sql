CREATE DATABASE IF NOT EXISTS db_beer;

USE db_beer;

CREATE TABLE IF NOT EXISTS tab_clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(20) NOT NULL,
    email VARCHAR(50),
    telefone VARCHAR(20),
    celular VARCHAR(20),
    data_nascimento DATE,
    status VARCHAR(10),
    foto VARCHAR(200),
    data_cadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    data_alteracao TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE UNIQUE INDEX idx_cpf ON tab_clientes(cpf);

CREATE INDEX idx_email ON tab_clientes(email);