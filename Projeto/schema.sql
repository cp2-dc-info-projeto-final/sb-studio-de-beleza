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
(1,'Andressa', '21 111111111', '2000-04-08', '12345678910', 'F', 'Duque de Caxias', 'RJ');
INSERT INTO Funcionario(id_func, nome_funcionario, telefone, data_nasc, cpf, sexo, municipio, estado) VALUES
(2,'Evelyn Marins', '21 222222222', '2000-05-15', '00000000000', 'F', 'Duque de Caxias', 'RJ');
INSERT INTO Funcionario(id_func, nome_funcionario, telefone, data_nasc, cpf, sexo, municipio, estado) VALUES
(3,'Cátia', '21 985412016', '1999-11-05', '32165498701', 'F', 'Duque de Caxias', 'RJ');
INSERT INTO Funcionario(id_func, nome_funcionario, telefone, data_nasc, cpf, sexo, municipio, estado) VALUES
(4,'Roseane', '21 962150136', '2001-01-28', '10987654321', 'F', 'Duque de Caxias', 'RJ');
INSERT INTO Funcionario(id_func, nome_funcionario, telefone, data_nasc, cpf, sexo, municipio, estado) VALUES
(5,'Karen', '21 996320218', '1998-03-10', '45612398702', 'F', 'Duque de Caxias', 'RJ');


drop table if exists Servico;
CREATE TABLE Servico (
    id_servico int AUTO_INCREMENT PRIMARY KEY,
    nome_servico VARCHAR (50),
    preco_servico double,
    duracao time
);

drop table if exists Agendamento;
CREATE table agendamento (
    id_agend int AUTO_INCREMENT PRIMARY KEY,
    id_cliente int,
    id_servico int,
    id_func int,
    data_agend date,
    hora_inicio time,
    duracao time,
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
