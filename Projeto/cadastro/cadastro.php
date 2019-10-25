<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once "../connection_factory.php";
$link = get_connection();
require "cadastroUsuario.php"; /* Incluiu o arquivo referenciado e, em caso de erro, irá parar o script */
 
// processo de armazenar os dados vindos do input através do método POST para variável 
$email = $_POST['tEmail'];
$senha = $_POST['tSenha'];
$hash = password_hash($senha, PASSWORD_DEFAULT);
$mun = $_POST['tMunicipio'];
$nome = $_POST['tNome'];
$tipoUsuario = $_POST['tTipoUsuario'];
$tel = $_POST['tTelefone'];
$calendario = $_POST['tCalendario'];
$calendario = date('Y-m-d', strtotime($calendario)); 
$cpf = $_POST['tCpf'];
$sexo = $_POST['tSexo'];
$id_pergunta = $_POST['tPergunta'];
$resposta = $_POST['tResposta'];

session_start();

$sql = "SELECT id_usuario FROM usuario where email='$email'"; // QUERY ao banco de dados necessária para o select
$result = mysqli_query($link, $sql); //armazenar o resultado da QUERY
$erro = "";

/* tem a função de verificar se o email digitado já existe no sistema, sendo útil
para armazenar esse erro e posteriormente ser exibido na VIEW */
if (mysqli_num_rows($result) > 0) {
    $erro = "Atenção! O e-mail digitado já está sendo usado";        
    $_SESSION["erro"] = $erro; //guardando o erro na session
    header("Location: CadastroView.php"); // redirecionando para página de cadastro
    exit();
}

$sql = "SELECT cpf FROM cliente where cpf='$cpf'"; // QUERY ao banco de dados necessária para o select
$result = mysqli_query($link, $sql); //armazenar o resultado da QUERY
$erro = "";

/* tem a função de verificar se o CPF digitado já existe no sistema, sendo útil
para armazenar esse erro e posteriormente ser exibido na VIEW */
if (mysqli_num_rows($result) > 0) {
    $erro = "Atenção! O CPF digitado já está sendo usado";         
    $_SESSION["erro"] = $erro; //guardando o erro na session
    header("Location: CadastroView.php");
    exit();
}

// Abaixo temos duas QUERY de inserção no banco de dados
$sql = "INSERT INTO usuario (email, senha) VALUES ('$email', '$hash')";

if(mysqli_query($link, $sql)) {
    echo "<br/>Cadastro Concluído com sucesso :)";
} else {
    echo "<br/>ERRO: Não foi possível executar o $sql. " . mysqli_error($link);
}

$id_user = mysqli_insert_id($link);
$sql = "INSERT INTO recuperacao (id_usuario, id_pergunta, resposta) VALUES ('$id_user', '$id_pergunta', '$resposta')";
if(mysqli_query($link, $sql)) {
    echo "<br/>Cadastro Concluído com sucesso :)";
} else {
    echo "<br/>ERRO: Não foi possível executar o $sql. " . mysqli_error($link);
}

$sql = "SELECT id_usuario FROM usuario where email='$email'";

if ($result=mysqli_query($link,$sql)) {
  // Fetch one and one row
    if ($row=mysqli_fetch_row($result)) //Serve para saber se houve algum retorno de linhas atráves da QUERY anterior (se bem sucedida)
    {
        $id_usuario = $row[0];
        if ($tipoUsuario == 2) // condição para caso o tipo de usuário seja o 2 (funcionário)
        {
            $sql = "INSERT INTO Funcionario (id_func, nome_funcionario, telefone, data_nasc, cpf, sexo, municipio) VALUES ($id_usuario, '$nome', '$tel', '$calendario', '$cpf', '$sexo', '$mun')";
            if(mysqli_query($link, $sql))
            {
                header("Location: ../login/LoginView.php");  //redirecionando para a página de login ao final da inserção na tabela correta, de acordo com o tipo usuário desse IF
                exit(); 
            } else //para caso aconteça um erro na execução da QUERY 
                {
                    echo "<br/>ERRO: Não foi possível executar o $sql. " . mysqli_error($link);
                }

        }
        if ($tipoUsuario == 1) // condição para caso o tipo de usuário seja o 1 (cliente)
        {
            $sql = "INSERT INTO Cliente (id_cliente, nome_cliente, telefone, data_nasc, cpf, sexo, municipio) VALUES ($id_usuario, '$nome', '$tel', '$calendario', '$cpf', '$sexo', '$mun')";
                if(mysqli_query($link, $sql))
                {
                    header("Location: ../login/LoginView.php"); //redirecionando para a página de login ao final da inserção na tabela correta, de acordo com o tipo usuário desse IF
                    exit();
                } else //para caso aconteça um erro na execução da QUERY 
                    {
                        echo "<br/>ERRO:  Não foi possível executar o $sql. " . mysqli_error($link);
                    }
        }
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($link);
?>