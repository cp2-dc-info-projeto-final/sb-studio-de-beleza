<!DOCTYPE html>
<!-- saved from url=(0079)http://127.0.0.1:8080/edsa-sb-studio-de-beleza/Projeto/servicos/agendamento.php -->
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     
     <link rel="stylesheet" href="./agendamento.php_files/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="./agendamento.php_files/agendamento.css">
     <script type="text/javascript" src="./agendamento.php_files/calendario.js.download"></script>
     <script>  
     $(document).ready(function() /* evento em Jquery que espera instantaneamente o documento html ser carregado para ser executado */
  {  
     /* inserção das mascáras nos campos de input */
     $("#datepicker").mask("00-00-0000", {placeholder: " DD-MM-AAAA"});
  });
   </script>
   <script type="text/javascript"> 
     $(function()/* declaração para chamar o método DATEPICKER contido no arquivo jqueryUI, a partir do campo input datepicker */ 
  {
     $("#datepicker").datepicker({
  });
   </script> 
    <div class="logo_studiodiv">
    <img id="logo_studio" src="../fotos_icones/foto_editada.png" width="120">  <!-- provavelmente editar a logo, pois ainda não há o vetor da mesma -->
    </div>
</head> 
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #e4121286;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="../pagina_inicial/paginainicial.html">Página Inicial<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="../servicos/servicos.html">Serviços</a>
                <a class="nav-item nav-link active" href="../galeria_fotos/galeriadefotos.html">Galeria de Fotos</a>
                <a class="nav-item nav-link active" href="../quem_somos/quemsomos.html">Quem somos</a>
                <a class="nav-item nav-link active btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="../login/LoginView.php" style= "background-color:#f0a0a0d2;">Login</a>
              </div>
            </div>
          </nav>

          <div class="icone_usuariodiv"> 
       	<img id="icone_perfil_usuario" src="../fotos_icones/icone.png" width="120"> 
        	<h1 align="center">@Usuário</h1>
         <p align="center" id="texto-iconeusuario">Cliente assíduo(a) do Studio de Beleza Evelyn Marins</p>  
      </div>
        
        	<h1 id="titulo">Olá, caro visitante!</h1>
        	<p id="subtitulo" align="justify"><b>É um prazer tê-lo acessando o nosso site!</b> <br><br> Você sabia que agora fazer o <b>agendamento</b> dos nossos serviços está bem mais fácil? <br><br> Para isso, é preciso que você possua um cadastro em nosso sistema. Caso não possua, <a href="../cadastro/CadastroView.php"><b>faça-o agora mesmo!</b></a></p>

      </div>
      <div>
      
      <div class='alinhar'>

<div class="confirma cadastro">
<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="../servicos/agendamento.php">Confirmar Cadastro</a>
</div>

<td> <label for="datepicker">Data desejada para a realização do procedimento:</label>
 </td>
  <td align="left">
   <input type="text" id="datepicker" name="tCalendario">

  </td>

  <div>
<label>Serviço desejado:</label>
<select class="form-control form-control-sm">

     <option value="">Selecione</option>      
<option value="corte">Corte R$30,00</option>
<option value="reconstrucao">Reconstrução R$45,00</option>
<option value="hidratacao">Hidratação R$20,00</option>
<option value="coloracaop">Coloração R$40,00 (Pequeno)</option>
<option value="coloracaom">Coloração R$50,00 (Médio)</option>
<option value="coloracaog">Coloração R$60,00 (Grande)</option>
<option value="mechap">Mechas R$70,00 (Pequeno)</option>
<option value="mecham">Mechas R$85,00 (Médio)</option>
<option value="mechag">Mechas R$100 (Grande)</option>
<option value="designss">Design de sobrancelha simples R$15,00</option>
<option value="designsh">Design de sobrancelha com aplicação de hena R$20,00</option>
<option value="spape">Spa dos pés R$40,00</option>
<option value="pes">Pés R$15,00</option>
<option value="maos">Mãos R$15,00</option>
<option value="pemao">Pés e mãos R$25,00</option>
<option value="acrigelc">Acrigel R$60,00 (Colocação)</option>
<option value="acrigelm">Acrigel R$30,00 (Manutenção)</option>
<option value="fibrac">Fibra de vidro R$120,00 (Colocação)</option>
<option value="fibram">Fibra de vidro R$60,00 (Manutenção)</option>

</select>

<div>
<label>Selecione o profissional</label>
<select class="form-control form-control-sm" name="tTipoUsuario" required>
<option value="">Selecione</option>
      <option value="1">Não tenho preferência de profissional</option>
      <option value="2">Andressa</option>
      <option value="1">Evelyn</option>
      <option value="2">Cátia</option>
      <option value="1">Rosane</option>
      <option value="2">Karen</option>
      </div>
  </div>

  <div class="confirma cadastro">
<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="../servicos/agendamento.php">Confirmar Cadastro</a>
</div>

</div>

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
    <hr style="line-height: 1.5;"></hr>
    <div class="row">
      <div class="col-12"><a href="https://pt-br.facebook.com/studioevelynmarins/"><img src="../fotos_icones/facebook-png-cinza-2.png" title="Facebook"  class="redessociais"/></a>
    </div>
    </div>
</footer>

</body>
</html>
