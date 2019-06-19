CREATE TABLE Funcionario (

id_func int,
nome_funcionario VARCHAR (50),
telefone VARCHAR (20),
data_nasc date,
cpf VARCHAR (20),
sexo VARCHAR (14),
PRIMARY KEY (id_func)
);

CREATE TABLE Servico (

id_servico int,
nome_servico VARCHAR (50),
preco_servico double,
hora_inicio time,
hora_fim time,
id_funcionario int,
PRIMARY KEY (id_servico),
FOREIGN KEY (id_funcionario) REFERENCES Funcionario(id_func)
);
   
CREATE TABLE Cliente (

id_cliente INT,    
nome_cliente VARCHAR (50),
telefone VARCHAR (20),
data_nasc date,
cpf VARCHAR (12),
sexo VARCHAR (14),
PRIMARY KEY (id_cliente)
);
   
CREATE TABLE Agendamento (
    
id_agend int,
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
    
CREATE TABLE usuario (
    
id_usuario int,
email VARCHAR (100),
senha VARCHAR (10),
PRIMARY KEY (id_usuario)
);