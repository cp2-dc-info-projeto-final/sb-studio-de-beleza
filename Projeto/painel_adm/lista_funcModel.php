<?php
    function listar_funcionarios() {
        
        $connection = mysqli_connect("localhost", "root", "", "studiodebeleza");
        if(!$connection) die("Falha ao conectar ao banco");

        mysqli_select_db($connection, "studiodebeleza");

        $sql = "SELECT * FROM funcionario";
        $result = mysqli_query($connection, $sql);

        $funcionarios = [];

        while($linha = mysqli_fetch_assoc($result))
        {
            $funcionario["id"] = $linha["id_func"];
            $funcionario["nome"] =  $linha["nome_funcionario"];
            $funcionario["telefone"] =  $linha["telefone"];
            $funcionario["nasc"] =  $linha["data_nasc"];
            $funcionario["cpf"] =  $linha["cpf"];
            $funcionario["sexo"] =  $linha["sexo"];

            array_push($funcionarios, $funcionario);
        }
        mysqli_close($connection);

        return $funcionarios;
    }

    ?>

