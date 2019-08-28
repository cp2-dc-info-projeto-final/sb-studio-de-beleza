<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "studiodebeleza");
 
// Checar conexão
if($link === false)
{
    die("ERRO: Não foi possível conectar" . mysqli_connect_error());
} else
{
    echo "Hello World!";
}
 
$email = $_POST['tEmail'];
$senha = $_POST['tSenha'];
$hash = password_hash($senha, PASSWORD_DEFAULT);
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
$sql = "SELECT id_usuario FROM usuario where email='$email'";
$result = mysqli_query($link, $sql);
$erro = "";
if (mysqli_num_rows($result) > 0) {
    $erro = "E-mail indisponível";        
    $_SESSION["erro"] = $erro;
    header("Location: cadastro.html");
    exit();
}
// Attempt insert query execution
$sql = "INSERT INTO usuario (email, senha) VALUES ('$email', '$hash')";
if(mysqli_query($link, $sql))
{
    echo "<br/>Cadastro Concluído com Sucesso :)";
} else
{
    echo "<br/>ERRO: Não foi possível executar o $sql. " . mysqli_error($link);
}
$sql = "INSERT INTO recuperacao (id_pergunta, resposta) VALUES ('$id_pergunta', '$resposta')";
if(mysqli_query($link, $sql))
{
    echo "<br/>Cadastro Concluído com Sucesso :)";
} else
{
    echo "<br/>ERRO: Não foi possível executar o $sql. " . mysqli_error($link);
}

$sql = "SELECT id_usuario FROM usuario where email='$email'";


if ($result=mysqli_query($link,$sql))
  {
  // Fetch one and one row
    if ($row=mysqli_fetch_row($result))
    {
        $id_usuario = $row[0];
        if ($tipoUsuario == 2) // if tipo == funcionario
        {
            $sql = "INSERT INTO Funcionario (id_func, nome_funcionario, telefone, data_nasc, cpf, sexo) VALUES ($id_usuario, '$nome', '$tel', '$calendario', '$cpf', '$sexo')";
            if(mysqli_query($link, $sql))
            {
                echo "<br/>Cadastro concluído com sucesso! :)";
            } else
                {
                    echo "<br/>ERRO: Não foi possível executar o $sql. " . mysqli_error($link);
                }

        }
        if ($tipoUsuario == 1) // if tipo == cliente
        {
            $sql = "INSERT INTO Cliente (id_cliente, nome_cliente, telefone, data_nasc, cpf, sexo) VALUES ($id_usuario, '$nome', '$tel', '$calendario', '$cpf', '$sexo')";
                if(mysqli_query($link, $sql))
                {
                    echo "<br/>Cadastro concluído com sucesso! :)";
                } else
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