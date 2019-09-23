<?php
    require "LoginModel.php";

    $email = $_POST['tEmail'];
    $senha = md5($_POST['tSenha']);
    $senha = $_POST['tSenha'];

    session_start();

    if (autenticacao($email, $senha))
    {
        session_unset();
        $_SESSION["nome"] = $row["nome"]; 
        header("Location: ../pagina_inicial/paginainicial.html");
        exit();
    } else {
        $erro = "<h1 style='font-size: 25px;color:red;' align='center'> Login ou senha incorretos </h1>";
        $_SESSION["erro"] = $erro;
        header("Location: LoginView.php");
        exit();
    }

    
?>