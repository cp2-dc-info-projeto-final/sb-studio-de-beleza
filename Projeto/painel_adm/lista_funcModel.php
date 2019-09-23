<?php
    function listar_funcionarios() {
        //conectando ao banco de dados
        $connection = mysqli_connect("localhost", "root", "", "studiodebeleza");
        if(!$connection) die("Falha ao conectar ao banco");

        $sql = "SELECT * FROM funcionario";
        $result = mysqli_query($connection, $sql);

        $funcionarios = []; //serve para montar um array de funcionários

        while($linha = mysqli_fetch_assoc($result))  /* serve para inserir esses valores no array perguntas
        enquanto a QUERY estiver retornando linhas */
        {
            //alocando os valores da tabela funcionário em uma array
            $funcionario["id"] = $linha["id_func"];
            $funcionario["nome"] =  $linha["nome_funcionario"];
            $funcionario["telefone"] =  $linha["telefone"];
            $funcionario["nasc"] =  $linha["data_nasc"];
            $funcionario["cpf"] =  $linha["cpf"];
            $funcionario["sexo"] =  $linha["sexo"];
            $funcionario["municipio"] =  $linha["municipio"];

            array_push($funcionarios, $funcionario);
        }
        mysqli_close($connection);

        return $funcionarios;
    }

    ?>

