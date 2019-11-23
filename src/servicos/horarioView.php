<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="agendamento.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <div class="logo_studiodiv">
    <img id="logo_studio" src="../fotos_icones/foto_editada.png" width="120">
    <!-- provavelmente editar a logo, pois ainda não há o vetor da mesma -->
  </div>
  <?php
  require "agendamentoModel.php";
  ?>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #e4121286;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="../pagina_inicial/paginainicial.html">Página Inicial<span
            class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="../servicos/servicos.html">Serviços</a>
        <a class="nav-item nav-link active" href="../galeria_fotos/galeriadefotos.html">Galeria de Fotos</a>
        <a class="nav-item nav-link active" href="../quem_somos/quemsomos.html">Quem somos</a>
        <a class="nav-item nav-link active btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="../login/LoginView.php" style= "background-color:#f0a0a0d2;">Login</a>
      </div>
    </div>
  </nav>


<form action="agendamentoCtrl.php" class="form-agendamento" method="GET">
<div class="form-group col-md-6">
    <h3>Escolha o horário desejado:</h3>
      <select name="tHora">
          <option name="tHora"></option>
        

<?php
session_start();

$_SESSION['hora'] = $_GET['tHora'];
$_SESSION['servico'] = $_GET['tServico']; 
$_SESSION['id_funcionario'] = $_GET['tFunc'];
$_SESSION['data_agend'] = $_GET['tCalendario'];

$horarios = buscaHorario(buscaData($_SESSION['data_agend']), $_SESSION['id_funcionario']);

foreach ($horarios as $recebe){

         

?>
  

<option name="tHora" id="tHora" value="<?php echo $recebe['horario']?>"><?php echo $recebe['horario'];?></option>

<?php
}
?>
</select>
  </div>
<br>
  <br><br>

<input class="btn btn-outline-danger" type='submit' value="Finalizar Agendamento">

<br> <br>
</form>

  <footer class="footer">
    <div class="row">
      <div class="col-6">
        <p><i class="fa fa-phone" aria-hidden="true"></i> Tel:. (00) 0000-0000</p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i> evelyn@evelyn.com</p>
      </div>
      <div class="col-6" style="text-align: right;">
        <h3>Studio de Beleza Evelyn Marins</h3>
        <p>Rua José Ferreira Murro, Nº 320 - Nova Iguaçu <br>
          Rio de Janeiro - RJ - 26031-170
          </p>  
      </div>
    </div>
    <hr></hr>
    <div class="row">
      <div class="col-12"><a href="https://pt-br.facebook.com/studioevelynmarins/"><img src="../fotos_icones/facebook-png-cinza-2.png" title="Facebook"  class="redessociais"
        style="width:40px;height:40px;"></a>
    </div>
    </div>
</footer>

</body>
</html>