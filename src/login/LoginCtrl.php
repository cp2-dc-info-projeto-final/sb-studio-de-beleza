<?php
    require "LoginModel.php"; /* Incluiu o arquivo referenciado e, em caso de erro, irá parar o script */

    //processo de armazenar os dados vindos do input através do método POST para variável 
    $email = $_POST['tEmail'];
    $senha = md5($_POST['tSenha']);
    $senha = $_POST['tSenha'];

    session_start();

    if ($usuario = autenticacao($email, $senha) != false)
    {
        session_unset();
        $_SESSION["nome"] = $usuario["nome"]; //inicia a session caso a autenticação seja verdadeira
        $_SESSION["tipo"] = $usuario["tipo"];
        
        if ($usuario["tipo"] == "cliente") {
            header("Location: ../pagina_inicial/paginainicial.html");
        } else {
            header("Location: ../painel_adm/lista_funcView.php");
        }
       
    } else //condição para caso a autenticação venha a sofrer algum erro, seja por conta da senha ou o email
    {
        $erro = "<h1 style='font-size: 25px;color:red;' align='center'> Login ou senha incorretos </h1>";
        $_SESSION["erro"] = $erro;
        header("Location: LoginView.php");

    }

    
?>