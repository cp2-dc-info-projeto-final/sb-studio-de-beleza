drop table if exists Funcionario;
CREATE TABLE Funcionario (

id_func int,
nome_funcionario VARCHAR (50),
telefone VARCHAR (20),
data_nasc date,
cpf VARCHAR (20),
sexo VARCHAR (1),
PRIMARY KEY (id_func),
FOREIGN KEY (id_func) REFERENCES usuario(id_usuario)
);

drop table if exists Servico;
CREATE TABLE Servico (
 
id_servico int AUTO_INCREMENT,
nome_servico VARCHAR (50),
preco_servico double,
hora_inicio time,
hora_fim time,
id_func int,
PRIMARY KEY (id_servico),
FOREIGN KEY (id_func) REFERENCES Funcionario(id_func)
);

drop table if exists Cliente;   
CREATE TABLE Cliente (

id_cliente INT,    
nome_cliente VARCHAR (50),
telefone VARCHAR (20),
data_nasc date,
cpf VARCHAR (20),
sexo VARCHAR (1),
PRIMARY KEY (id_cliente),
FOREIGN KEY (id_cliente) REFERENCES usuario(id_usuario)
);
drop table if exists Agendamento;   
CREATE TABLE Agendamento (
    
id_agend int AUTO_INCREMENT,
id_servico int,
id_funcionario int,
id_cliente int,
data_agend date,
hora_agend time,
PRIMARY KEY (id_agend),
FOREIGN KEY (id_servico) REFERENCES Servico(id_servico),
FOREIGN KEY (id_funcionario) REFERENCES Funcionario(id_func),
FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente)
);

drop table if exists usuario;    
CREATE TABLE usuario (
    
id_usuario int AUTO_INCREMENT,
email VARCHAR (100),
senha VARCHAR (255),
PRIMARY KEY (id_usuario)
);

drop table if exists recuperacao;
CREATE TABLE recuperacao (

  utilizador  VARCHAR(100),
  confirmacao VARCHAR(255),
  KEY(utilizador, confirmacao)
);