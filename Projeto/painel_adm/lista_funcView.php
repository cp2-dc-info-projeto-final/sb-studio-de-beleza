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

    <div class="container">
        <h1>Listagem de Funcionários</h1>

          <table class="table table-striped">
            <thead>
              <!-- criação de colunas-->
                <th>id</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Data nascimento</th>
                <th>CPF</th>
                <th>Sexo</th>
                <th>Município</th>
            </head>
          <tbody>
            <?php 
                    require "lista_funcCtrl.php";

                    $funcionarios = controle_listar_funcionarios(); 
                    foreach ($funcionarios as $funcionario)  /* serve para listar os dados dos funcionários
                    e também o botão excluir */
                    {
                        echo "<tr>";
                        echo "<td>" . $funcionario['id'] . "<br></td>";
                        echo "<td>" . $funcionario['nome'] . "<br></td>";
                        echo "<td>" . $funcionario['telefone'] . "<br></td>";
                        echo "<td>" . $funcionario['nasc'] . "<br></td>";
                        echo "<td>" . $funcionario['cpf'] . "<br></td>";
                        echo "<td>" . $funcionario['sexo'] . "<br></td>";
                        echo "<td>" . $funcionario['municipio'] . "<br></td>";
                        echo "<td><a href='excluir.php?id=" . $funcionario['id'] ."'>Excluir</a><br></td>";
                        echo "</tr>";
                    }
            ?>
                
          </tbody>

        </table>
</div>
</html>