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

    function listar_clientes() {
        $conn = get_connection();

        $sql = "SELECT * FROM cliente";
        $result = mysqli_query($conn, $sql);

        $clientes = []; //serve para montar um array de funcionários

        while($linha = mysqli_fetch_assoc($result))  /* serve para inserir esses valores no array perguntas
        enquanto a QUERY estiver retornando linhas */
        {
            //alocando os valores da tabela funcionário em uma array
            $cliente["id"] = $linha["id_cliente"];
            $cliente["nome"] =  $linha["nome_cliente"];
            $cliente["telefone"] =  $linha["telefone"];
            $cliente["nasc"] =  $linha["data_nasc"];
            $cliente["cpf"] =  $linha["cpf"];
            $cliente["sexo"] =  $linha["sexo"];
            $cliente["municipio"] =  $linha["municipio"];
            $cliente["estado"] = $linha["estado"];

            array_push($clientes, $cliente);
        }
        mysqli_close($conn);

        return $clientes;
    }
    function controle_acesso() {
        $conn = get_connection();

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $eow = mysqli_num_rows($conn, $sql);
        if ($row > 0){
        session_start();
       
        header('Location: lista_funcView.php');
    }
    else
    {
        echo "Acesso não permitido!";
    }
?>

