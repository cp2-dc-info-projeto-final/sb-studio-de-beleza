<?php

require_once "../connection_factory.php";
 
    function listar_funcionarios() {
        $conn = get_connection();

        $sql = "SELECT * FROM funcionario";
        $result = mysqli_query($conn, $sql);

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
        mysqli_close($conn);

        return $funcionarios;
    }

?>

