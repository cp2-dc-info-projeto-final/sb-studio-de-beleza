<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once "../connection_factory.php";
$conn = get_connection();
require "cadastroUsuario.php";

$email = $_POST['tEmail'];
$senha = $_POST['tSenha'];
$confirmasenha = $_POST['tConfirmaSenha'];
$hash = password_hash($senha, PASSWORD_DEFAULT);
$nome = $_POST['tNome'];
$tipoUsuario = $_POST['tTipoUsuario'];
$tel = $_POST['tTelefone'];
$calendario = $_POST['tCalendario'];
$calendario = date('Y-m-d', strtotime($calendario)); 
$cpf = $_POST['tCpf'];
$sexo = $_POST['tSexo'];

session_start();

if ($senha != $confirmasenha)
{
    $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastro.html");
        exit();
    }
    $erro = "";
    if (cadastraUsuario($nome, $email, $senha) == true) {
        session_unset();
        header("Location: login.php");
        exit();
    } else {
        $erro = "E-mail indisponível";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastro.html");
        exit();
    }
?>
}