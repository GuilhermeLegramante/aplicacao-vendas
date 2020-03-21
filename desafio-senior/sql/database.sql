CREATE DATABASE senior; USE
    senior;
CREATE TABLE usuarios(
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45),
    tipo ENUM('1', '2'),
    usuario VARCHAR(30),
    senha VARCHAR(32)
); CREATE TABLE produto(
    `codigo` INT NOT NULL AUTO_INCREMENT,
    `descricao` LONGTEXT NOT NULL,
    `preco` FLOAT NULL,
    PRIMARY KEY(`codigo`)
); CREATE TABLE documento(
    numero VARCHAR(50) PRIMARY KEY,
    total FLOAT,
    confirmado TINYINT
); CREATE TABLE item(
    produto INT,
    documento VARCHAR(50),
    CONSTRAINT fk_produto FOREIGN KEY(produto) REFERENCES senior.produto(codigo),
    CONSTRAINT fk_documento FOREIGN KEY(documento) REFERENCES senior.documento(numero),
    PRIMARY KEY(produto, documento)
);