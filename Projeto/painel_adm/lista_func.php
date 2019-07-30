<!DOCTYPE html>
<head>
  <title>Painel administrativo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h1>Painel Administrativo</h1>
  <p>Gerenciamento de funcionários</p> 
</div>

    <?php
        $connection = mysqli_connect("localhost", "root", "", "studiodebeleza");
        if(!$connection) die("Falha ao conectar ao banco");

        mysqli_select_db($connection, "studiodebeleza");

        $sql = "SELECT * FROM funcionario";
        $result = mysqli_query($connection, $sql);
    ?>

    <div class="container">
        <h1>Listagem de Funcionários</h1>

        <table class="table table-striped">
            <thead>
                <th>id</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Data nascimento</th>
                <th>CPF</th>
                <th>Sexo</th>
            </head>
            <tbody>
                <?php 
                   
                    while($linha = mysqli_fetch_assoc($result))
                    {
                        $id = $linha["id_func"];
                        $nome =  $linha["nome_funcionario"];
                        $telefone =  $linha["telefone"];
                        $nasc =  $linha["data_nasc"];
                        $cpf =  $linha["cpf"];
                        $sexo =  $linha["sexo"];

                        echo "<tr>";
                        echo "<td>$id<br></td>";
                        echo "<td>$nome<br></td>";
                        echo "<td>$telefone<br></td>";
                        echo "<td>$nasc<br></td>";
                        echo "<td>$cpf<br></td>";
                        echo "<td>$sexo<br></td>";
                        echo "<td><a href='excluir.php? id=$id'>Excluir</a><br></td>";
                        echo "</tr>";
                    }
                    mysqli_close($connection);
                ?>
            </tbody>

        </table>
</div>
</html>