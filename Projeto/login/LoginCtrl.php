<?php
    require "login.php";

    $email = $_POST['tEmail'];
    $senha = md5($_POST['tSenha']);
    $senha = $_POST['tSenha'];
    $connection = mysqli_connect("localhost", "root", "", "studiodebeleza"); 

    session_start();

    if (autenticacao($email, $senha))
    {
        session_unset();
        $_SESSION["nome"] = $row["nome"]; 
        header("Location: ../fotos_logo.png");
        exit();
    } else {
        $erro = "<p style='font-size: 35px;color:red;' align='center'> Login ou senha incorretos </p>";
        $_SESSION["erro"] = $erro;
        header("Location: formLogin.php");
        exit();
    }

    
?>