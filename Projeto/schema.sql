DROP DATABASE IF EXISTS studiodebeleza;
CREATE DATABASE studiodebeleza character set UTF8mb4 collate utf8mb4_bin;

USE studiodebeleza;

drop table if exists usuario;    
CREATE TABLE usuario (  
    id_usuario int AUTO_INCREMENT,
    email VARCHAR (100),
    senha VARCHAR (255),
    PRIMARY KEY (id_usuario)
);
INSERT INTO usuario (email, senha) VALUES
('mceloemerson@gmail.com', '$2y$10$7bgXZylojDHX7sxd.Z4LPe30RYPmdLiuirsspEHBzsJ0Bkv8Thz6q');

drop table if exists Funcionario;
CREATE TABLE Funcionario (
    id_func int,
    nome_funcionario VARCHAR (50),
    telefone VARCHAR (20),
    data_nasc date,
    cpf VARCHAR (20),
    sexo VARCHAR (1),
    municipio VARCHAR (50),
    estado VARCHAR (50),
    PRIMARY KEY (id_func),
    FOREIGN KEY (id_func) REFERENCES usuario(id_usuario)
);
INSERT INTO Funcionario(id_func, nome_funcionario, telefone, data_nasc, cpf, sexo, municipio, estado) VALUES
(1,'Emerson Marcelo', '21 000000000', '2000-11-02', '00000000000', 'M', 'Duque de Caxias', 'RJ');


drop table if exists Servico;
CREATE TABLE Servico (
    id_servico int AUTO_INCREMENT PRIMARY KEY,
    nome_servico VARCHAR (50),
    preco_servico double,
    duracao time
);

drop table if exists Agendamento;
CREATE table agendamento (
    id_agend int PRIMARY KEY,
    id_cliente int,
    id_servico int,
    id_func int,
    data_hora_inicio datetime,
    data_hora_fim datetime,
    FOREIGN KEY(id_cliente) REFERENCES cliente(id_cliente),
    FOREIGN KEY(id_servico) REFERENCES servico(id_servico),
    FOREIGN KEY(id_func) REFERENCES funcionario(id_func)
);

drop table if exists Cliente;   
CREATE TABLE Cliente (
    id_cliente INT,    
    nome_cliente VARCHAR (50),
    telefone VARCHAR (20),
    data_nasc date,
    cpf VARCHAR (20),
    sexo VARCHAR (1),
    municipio VARCHAR (50),
     estado VARCHAR (50),
    PRIMARY KEY (id_cliente),
    FOREIGN KEY (id_cliente) REFERENCES usuario(id_usuario)
);

drop table if exists Pergunta;    
CREATE TABLE Pergunta (    
    id_pergunta int AUTO_INCREMENT,
    pergunta VARCHAR (255),
    PRIMARY KEY (id_pergunta)
);
INSERT INTO pergunta (pergunta) VALUES 
('Qual era o seu apelido de infância?'),
('Qual é o seu livro de infância preferido?');
