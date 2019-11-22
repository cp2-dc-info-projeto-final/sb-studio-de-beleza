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
('andressa@andressa.com', '$2y$10$7bgXZylojDHX7sxd.Z4LPe30RYPmdLiuirsspEHBzsJ0Bkv8Thz6q'),
('evelyn@evelyn.com', '$2y$10$7bgXZylojDHX7sxd.Z4LPe30RYPmdLiuirsspEHBzsJ0Bkv8Thz6q'),
('catia@catia.com', '$2y$10$7bgXZylojDHX7sxd.Z4LPe30RYPmdLiuirsspEHBzsJ0Bkv8Thz6q'),
('fabricia@fabria.com', '$2y$10$qL0mPHz8G4xuEXzAaIjBOuzbVEb4EePyVLbVxAvaMztErID41REhG'),
('ygor@ygor.com', '$2y$10$qL0mPHz8G4xuEXzAaIjBOuzbVEb4EePyVLbVxAvaMztErID41REhG'),
('alayne@alayne.com', '$2y$10$qL0mPHz8G4xuEXzAaIjBOuzbVEb4EePyVLbVxAvaMztErID41REhG');


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
(1,'Andressa', '21 000000000', '2000-11-02', '11111111111', 'F', 'Duque de Caxias', 'RJ'),
(2,'Evelyn', '21 000000000', '2000-11-02', '22222222222', 'F', 'Rio de Janeiro', 'RJ'),
(3,'Cátia', '21 000000000', '2000-11-02', '33333333333', 'F', 'Duque de Caxias', 'RJ');

drop table if exists Servico;
CREATE TABLE Servico (
    id_servico int AUTO_INCREMENT PRIMARY KEY,
    nome_servico VARCHAR (50),
    preco_servico double,
    duracao time
);
INSERT INTO Servico(nome_servico, preco_servico, duracao) VALUES
('Corte', '30.00', '1:00'),
('Reconstrução','45.00','1:00'),
('Hidratação', '20.00' ,'1:00'),
('Coloração', '50.00','1:00'),
('Mechas','85.00' ,'1:00'),
('Design de sobrancelha', '15.00' ,'1:00'),
('Design de sobrancelha com aplicação de hena', '20.00' ,'1:00'),
('Pés', '15.00' ,'1:00'),
('Mãos', '15.00' ,'1:00'),
('Pés e mãos', '25.00' ,'1:00'),
('Acrigel (Colocação)', '25.00' ,'1:00'),
('Acrigel (Manutenção)', '25.00' ,'1:00');

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
INSERT INTO Cliente (id_cliente, nome_cliente, telefone, data_nasc, cpf, sexo, municipio, estado) VALUES
(4,'Fabricia', '21 000000000', '2000-11-02', '44444444444', 'F', 'Duque de Caxias', 'RJ'),
(5,'Ygor', '21 000000000', '2000-11-02', '55555555555', 'F', 'Rio de Janeiro', 'RJ'),
(6,'Alayne', '21 000000000', '2000-11-02', '66666666666', 'F', 'Duque de Caxias', 'RJ');

drop table if exists Agendamento;
CREATE table agendamento (
    id_agend int PRIMARY KEY,
    id_cliente int,
    id_servico int,
    id_func int,
    data_agend date,
    hora_inicio time,
    FOREIGN KEY(id_cliente) REFERENCES cliente(id_cliente),
    FOREIGN KEY(id_servico) REFERENCES servico(id_servico),
    FOREIGN KEY(id_func) REFERENCES funcionario(id_func)
);

INSERT INTO Agendamento (id_agend, id_cliente, id_servico, id_func, data_agend, hora_inicio) VALUES
(1, 1, 2, 1, '2019-11-19','11:00'),
(2, 2, 2, 1, '2019-11-19','13:00'),
(3, 3, 5, 2, '2019-11-19','17:00');

DROP TABLE IF EXISTS horarios_atendimento;
CREATE table horarios_atendimento (
    id int PRIMARY KEY AUTO_INCREMENT,
    horario time
);

INSERT INTO horarios_atendimento(horario) VALUES
('9:00'),('10:00'), ('11:00'), ('13:00'), ('14:00'), ('15:00'), ('16:00'), ('17:00');
 
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

INSERT INTO recuperacao (id_usuario, id_pergunta, resposta) VALUES 
(1, 2, 'Smiliguindo'),
(2, 2, 'Smiliguindo & sua turma'),
(3, 2, 'Smiliguindo'),
(4, 2, 'Smiliguindo & sua turma'),
(5, 2, 'Smiliguindo'),
(6, 2, 'Smiliguindo & sua turma');

CREATE TABLE estados (
    id_municipio int AUTO_INCREMENT,
    nome_municipio VARCHAR (100),
    PRIMARY KEY (id_municipio)
);

INSERT INTO estados (nome_municipio) VALUES 
('Acre'),
('Alagoas'),
('Amapá'),
('Amazonas'),
('Bahia'),
('Ceará'),
('Distrito Federal'),
('Espírito Santo'),
('Goiás'),
('Maranhão'),
('Mato Grosso'),
('Mato Grosso do Sul'),
('Minas Gerais'),
('Pará'),
('Paraíba'),
('Paraná'),
('Pernambuco'),
('Piauí'),
('Rio Grande do Norte'),
('Rio Grande do Sul'),
('Rio de Janeiro'),
('Rondônia'),
('Roraima'),
('Santa Catarina'),
('São Paulo'),
('Sergipe'),
('Tocantins');