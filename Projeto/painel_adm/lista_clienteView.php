<!DOCTYPE html>
<head>
  <title>Painel administrativo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Administrador</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="lista_funcView.php">Funcionários<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Agendamentos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cadastrar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sair</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container">
        <h1>Listagem de Clientes</h1>

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
                <th>Estado</th>
                <th>Ação</th>
            </head>
          <tbody>
            <?php 
                    require "lista_clienteCtrl.php";

                    $clientes = controle_listar_clientes(); 
                    foreach ($clientes as $cliente)  /* serve para listar os dados dos funcionários
                    e também o botão excluir */
                    {
                        echo "<tr>";
                        echo "<td>" . $cliente['id'] . "<br></td>";
                        echo "<td>" . $cliente['nome'] . "<br></td>";
                        echo "<td>" . $cliente['telefone'] . "<br></td>";
                        echo "<td>" . $cliente['nasc'] . "<br></td>";
                        echo "<td>" . $cliente['cpf'] . "<br></td>";
                        echo "<td>" . $cliente['sexo'] . "<br></td>";
                        echo "<td>" . $cliente['municipio'] . "<br></td>";
                        echo "<td>" . $cliente['estado'] . "<br></td>";
                        echo "<td><a href='excluir.php?id=" . $cliente['id'] ."'>Excluir</a><br></td>";
                        echo "</tr>";
                    }
            ?>
                
          </tbody>

        </table>
</div>
</html>