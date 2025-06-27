CREATE DATABASE patrimonio;
USE patrimonio;

CREATE TABLE bens_moveis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo_bem VARCHAR(20) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    localizacao VARCHAR(100) NOT NULL,
    estado VARCHAR(20) NOT NULL,
    data_aquisicao DATE NOT NULL
);