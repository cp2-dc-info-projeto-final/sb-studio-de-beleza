<?php
require_once "../connection_factory.php";


function cadastraUsuario($email, $hash, $senha) {
    $conn = get_connection();
    $sql = "SELECT id_usuario FROM usuario WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $erro = "";
    # password hash
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    
    if (mysqli_num_rows($result) > 0 ) {
        return false;
    }
    $sql = "INSERT INTO usuario (email, senha) VALUES
            ('$email', '$hash')";
    if(mysqli_query($conn, $sql)){
        return true;
    } else{
        die("Erro ao efetuar cadastro $sql. " . mysqli_error($conn));
    }
    mysqli_close($conn);
}

    function BuscarPerguntas() {
        $conn = get_connection();
        $sql = "SELECT * FROM pergunta";
        $result = mysqli_query($conn, $sql);

        $perguntas = [];

        while($linha = mysqli_fetch_assoc($result))
        {
            $pergunta["id"] = $linha["id_pergunta"];
            $pergunta["pergunta"] =  $linha["pergunta"];
            array_push($perguntas, $pergunta);
        }
        mysqli_close($conn);

        return $perguntas;
    }

    function BuscarEstados() {
        $conn = get_connection();

        $sql = "SELECT * FROM estados";
        $result = mysqli_query($conn, $sql);

        $estados = [];

        if(mysqli_query($conn, $sql)){
            while($linha = mysqli_fetch_assoc($result))
            {
                $estado["id"] = $linha["id_municipio"];
                $estado["municipios"] =  $linha["nome_municipio"];
                array_push($estados, $estado);
            }
        } else{
            die("Erro ao efetuar cadastro $sql. " . mysqli_error($conn));
        }
        
        mysqli_close($conn);

        return $estados;
    }

?>