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
    PRIMARY KEY (id_func),
    FOREIGN KEY (id_func) REFERENCES usuario(id_usuario)
);
INSERT INTO Funcionario(id_func, nome_funcionario, telefone, data_nasc, cpf, sexo, municipio) VALUES
(1,'Emerson Marcelo', '21 000000000', '2000-11-02', '00000000000', 'M', 'Duque de Caxias');


drop table if exists Servico;
CREATE TABLE Servico (
    id_servico int AUTO_INCREMENT,
    nome_servico VARCHAR (50),
    preco_servico double,
    duracao time
    PRIMARY KEY (id_servico)
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
('Qual é o seu livro de infância preferido?'),
('Qual era o nome do seu primeiro animal de estimação?'),
('Qual o apelido de seu filho mais novo?'),
('Qual o apelido de seu filho mais velho?');

drop table if exists recuperacao;    
CREATE TABLE recuperacao (
    id_usuario int,
    id_pergunta int,
    resposta VARCHAR (255),
    PRIMARY KEY(id_usuario, id_pergunta),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
    FOREIGN KEY (id_pergunta) REFERENCES usuario(id_pergunta)
);

INSERT INTO recuperacao (id_usuario, id_pergunta, resposta) VALUES (1, 2, 'Smiliguindo');

CREATE TABLE municipio (
    id_municipio int AUTO_INCREMENT,
    nome_municipio VARCHAR (100),
    PRIMARY KEY (id_municipio)
);
INSERT INTO municipio (nome_municipio) VALUES 
('Belford Roxo'),
('Duque de Caxias'),
('Guapimirim'),
('Itaboraí'),
('Itaguaí'),
('Japeri'),
('Magé'),
('Nilópolis'),
('Niterói'),
('Nova Iguaçu'),
('Queimados'),
('Rio de Janeiro'),
('São Gonçalo'),
('São João de Meriti'),
('Seropédica');