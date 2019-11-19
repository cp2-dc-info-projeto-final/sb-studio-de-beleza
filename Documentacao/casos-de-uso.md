# Especificação de Casos de Uso

## Sumário

- [CDU01](#CDU-01-Cadastro-de-Clientes)
- [CDU02](#CDU-02-Cadastro-de-Funcionários)
- [CDU03](#CDU-03-Login)
- [CDU04](#CDU-04-Gerenciamento-de-Cupons-e-Agendamentos)
- [CDU05](#CDU-05-Atualização-de-Funcionários)


## CDU 01 Cadastro de Clientes

**Atores:** Clientes

**Pré-Condições:** Desejar um serviço do Studio de Beleza.

**Fluxo Principal:**

- Usuário informa Nome, Sobrenome, Data de Nascimento, CPF, Sexo, Telefone para Contato, E-mail e Senha.

- O sistema verifica se o e-mail possui um formato válido (Caso o e-mail já esteja cadastrado no sistema, ele mostra um erro). Entretanto, se o e-mail for válido, o Sistema cadastra o Usuário como Cliente.

## CDU 02 Cadastro de Funcionários 

**Atores:** Funcionários e Administrador 

**Pré-Condições:** Ser um funcionário e desejar fazer parte do Studio 

**Fluxo Principal:** 

- Usuário informa Nome, Sobrenome, Data de Nascimento, CPF, Sexo, Telefone para Contato, E-mail e Senha. 

- O sistema verifica se o e-mail possui um formato válido (Caso o e-mail já esteja cadastrado no sistema, ele mostra um erro). Entretanto, se o e-mail for válido, o sistema cadastra o Usuário como Funcionário - Somente administrador cadastra outro funcionário. 

 
## CDU 03 Login

**Atores:** Clientes, funcinários e administrador

**Pré-Condições:** Possuir um cadastro no sistema.

**Fluxo Principal:**

- Administradores recebem permissão de acesso de Administrador. 

- Clientes e Funcionários recebem permissão de acesso de Clientes e Funcionários. 

- O usuário digita e-mail e senha. - Se os dados forem de acordo com os registrados, o usuário receberá permissão de acesso e será direcionado para a tela da sua respectiva permissão. 
    - Caso o usuário não seja cadastrado no sistema, poderá clicar em "Não sou cadastrado", direcionando par a página de cadastro.

## CDU 04 Gerenciamento de Cupons e Agendamento 

**Atores:** Administradores 

**Pré-Condições:** Ser cadastrado no sistema como administrador e estar logado 

**Fluxo Principal:**  

- O sistema disponibiliza os agendamentos em aberto para o administrador e funcionários, podendo apenas o administrador alterá-los. 

- Apenas os administradores podem alterar os cupons que estão aptos para serem validados. 

## CDU 05 Atualização de Funcionários

**Atores:** Administradores

**Pré-Condições:** Ser administrador 

**Fluxo Principal:** 

- O sistema exibe os funcionários que se encontram cadastrados no sistema e apenas os administradores podem excluí-los.










