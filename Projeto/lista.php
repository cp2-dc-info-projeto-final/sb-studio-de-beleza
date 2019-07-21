<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h1>Painel Administrativo do Sistema de Gerenciamento de Funcionários</h1>
  <p>Em desenvolvimento...</p> 
</div>

<!-- tabelas para o select-->
    <?php

        $connection = mysqli_connect("localhost", "root", "", "studiodebeleza");
        if(!$connection) die("Falha ao conectar ao banco");

        mysqli_select_db($connection, "studiodebeleza");

        $sql = "SELECT * FROM funcionario";
        $result = mysqli_query($connection, $sql);
    ?>

    <div class="container">
        <h1>Listagem de Clientes</h1>

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
                        echo '<tr>';
                        echo '<td>'. $linha['id_func'] ."<input align='center' type='checkbox' name='id' id='id' value=''/>";
                        echo '<td>'. $linha['nome_funcionario'] .'</td>';
                        echo '<td>'. $linha['telefone'] .'</td>';
                        echo '<td>'. $linha['data_nasc'] .'</td>';
                        echo '<td>'. $linha['cpf'] .'</td>';
                        echo '<td>'. $linha['sexo'] .'</td>';
                        echo '</tr>'; 
                    }
                    mysqli_close($connection);
                ?>
            </tbody>
        </table>
        <a href="excluir.php"><input name="deleta" type="button" value="Excluir" /></a>





</div>
</html>