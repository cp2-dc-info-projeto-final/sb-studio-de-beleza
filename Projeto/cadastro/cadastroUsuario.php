<?php
require_once "../connection_factory.php";


function cadastraUsuario($email, $hash, $senha) {
    $conn = get_connection();
    $sql = "SELECT id_usuario FROM uwqpuqwefwefqwefsuario WHERE email='$email'";
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

    function BuscarMunicipios() {
        $conn = get_connection();

        $sql = "SELECT * FROM municipio";
        $result = mysqli_query($conn, $sql);

        $municipios = [];

        if(mysqli_query($conn, $sql)){
            while($linha = mysqli_fetch_assoc($result))
            {
                $municipio["id"] = $linha["id_municipio"];
                $municipio["municipios"] =  $linha["nome_municipio"];
                array_push($municipios, $municipio);
            }
        } else{
            die("Erro ao efetuar cadastro $sql. " . mysqli_error($conn));
        }
        
        mysqli_close($conn);

        return $municipios;
    }

?>