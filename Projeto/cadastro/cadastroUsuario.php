<?php

function cadastraUsuario($email, $hash, $nome, $tipoUsuario, $tel, $calendario, $cpf, $sexo) {
    $connection = mysqli_connect("localhost", "root", "", "studiodebeleza");

    // Check connection
    if($connection === false){
        die("Não foi possível conectar ao servidor!" . mysqli_connect_error());
    }
    $sql = "SELECT id_usuario FROM usuario WHERE email='$email'";
    $result = mysqli_query($connection, $sql);
    $erro = "";
    # password hash
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    
    if (mysqli_num_rows($result) > 0) {
        return false;
    }
    $sql = "INSERT INTO usuario (email, senha) VALUES
            ($email', '$hash')";
    if(mysqli_query($connection, $sql)){
        return true;
    } else{
        die("Erro ao efetuar cadastro $sql. " . mysqli_error($connection));
    }
    mysqli_close($connection);
}

    function BuscarPerguntas() {
        
        $connection = mysqli_connect("localhost", "root", "", "studiodebeleza");
        if(!$connection) die("Falha ao conectar ao banco");

        mysqli_select_db($connection, "studiodebeleza");

        $sql = "SELECT * FROM pergunta";
        $result = mysqli_query($connection, $sql);

        $perguntas = [];

        while($linha = mysqli_fetch_assoc($result))
        {
            $pergunta["id"] = $linha["id_pergunta"];
            $pergunta["pergunta"] =  $linha["pergunta"];
            array_push($perguntas, $pergunta);
        }
        mysqli_close($connection);

        return $perguntas;
    }

?>