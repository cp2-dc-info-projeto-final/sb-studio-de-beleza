<!Doctype html>
<head>
  <meta charset="UTF-8">
  <title>Cadastre-se</title>
  <link rel="stylesheet" href="../jquery_css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="estilo_cadastro.css" />
	 <link rel="stylesheet" href="../jquery_css/jquery-ui.css"/>
    <link rel="stylesheet" href="../jquery_javascript/calendario.js"/>
    <script src="../jquery_javascript/jquery-3.4.1.min.js"></script>
    <script src="../jquery_javascript/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../jquery_javascript/traducao.js"></script>
    <script src="../jquery_javascript/jquery.mask.min.js"></script>
   <script>  
     $(document).ready(function()) /* evento em Jquery que espera instantaneamente o documento html ser carregado para ser executado */
  {  
     /* inserção das mascáras nos campos de input */
     $("#cCpf").mask("000.000.000-00", {placeholder: " 9 dígitos + 2 dígitos"});
     $("#datepicker").mask("00-00-0000", {placeholder: " DD-MM-AAAA"});
     $("#cTelefone").mask("(00) 00000-0000", {placeholder: " (DDD)"});
  });
   </script>
   <script type="text/javascript"> 
     $(function() /* declaração para chamar o método DATEPICKER contido no arquivo jqueryUI, a partir do campo input datepicker */ 
{ 
    $("#datepicker").datepicker({
    });
});
function validarSenha(form) /* declaração para conferir se as senhas digitadas condizem uma com a outra, através de código javascript */ 
{ 
    tSenha = document.formulario.tSenha.value
    tConfirmaSenha = document.formulario.tConfirmaSenha.value
    if (tSenha != tConfirmaSenha)
    {
        alert("As senhas não condizem. Por favor, repita a senha corretamente");
        document.formulario.tConfirmaSenha.focus();  
        return false;
    }
}
   </script> 
	</head>
	 <body>
		<div class="logo_studiodiv">
			<img id="logo_studio" src="../fotos_icones/foto_editada.png" width="120">  <!-- provavelmente editar a logo, pois ainda não há o vetor da mesma -->
      </div>
     
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
        <a class="nav-item nav-link active btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="../login/LoginView.php" style= background-color:#f0a0a0d2;>Login</a>
      </div>
    </div>
  </nav>
      <div class="icone_usuariodiv"> 
       	<img id="icone_perfil_usuario" src="../fotos_icones/icone.png" width="120"> 
        	<h1 align="center">@Usuário</h1>
         <p align="center" id="texto-iconeusuario">Cliente assíduo(a) do Studio de Beleza Evelyn Marins</p>  
      </div>
      <div>        	
        	<h1 id="titulo">Olá, caro visitante!</h1>
        	<p id="subtitulo" align="justify"><b>É um prazer tê-lo acessando o nosso site!</b> <br><br> Você sabia que agora fazer o <b>agendamento</b> dos nossos serviços está bem mais fácil? <br><br> Para isso, é preciso que você possua um cadastro em nosso sistema. Caso não possua, <b>faça-o agora mesmo</b> preenchendo os campos abaixo. </p>
      </div>
      <div>
 <form class="form-cadastro" action="cadastro.php" method="post" onsubmit="return validarSenha(this);" name="formulario">
 <?php
            session_start();
            if(array_key_exists('erro', $_SESSION) == true){
                $erro = $_SESSION["erro"];
                ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?php
  echo $erro;
  ?>
</div>
<?php


                session_unset();
            }
        ?>
<h1 class="card-title">Informações pessoais</h1>
  <div class="form-row">
    <div class='form-group col-md-6'>
      <label>Nome</label>
      <input type="text" name="tNome" class="form-control form-control-sm" required>
    </div>
    <div class='form-group col-md-6'>
      <label>Data de nascimento</label>
      <input type="text" id="datepicker" name="tCalendario" class="form-control form-control-sm" required>
    </div>
  </div>

  <div class="form-row">
  <div class='form-group col-md-6'>
    <label>CPF</label>
    <input type="text" name="tCpf" id="cCpf" class="form-control form-control-sm"> 
  </div>
  <div class='form-group col-md-6'>
    <label>Sexo</label>
      <select class="form-control form-control-sm" name="tSexo">
        <option value="">Selecione</option>
          <option value="F">Feminino</option>
          <option value="M">Masculino</option>
      </select>
  </div>
</div>

<div class="form-row">
  <div class='form-group col-md-6'>
    <label>Telefone</label>
    <input type="text" name="tTelefone" id="cTelefone" class="form-control form-control-sm" required>
  </div>
  <div class='form-group col-md-6'>
    <label>Estado</label>
    <select name="tEstado"  class="form-control form-control-sm" required>
      <option value="">Selecione</option>
          <?php
          require "CadastroCtrl.php";
          $estados = controle_listar_estados();
          foreach ($estados as $estado)
          {
          echo "<option value='". $estado['id'] . "'>" . $estado['municipios']. "</option>";
          }
          ?>
    </select>
  </div>
</div>

<div class='form-group col-md-6'>
  <label>Município</label>
  <input type="text" name="tMunicipio" id="cMunicipio" class="form-control form-control-sm" required>
</div>
<h2 class="card-title">Informações de login</h2>
<div class="form-group">
  <label>Endereço de email</label>
  <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="tEmail" required>
</div>

<div class="form-row">
  <div class='form-group col-md-6'>
    <label>Senha</label>
    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Senha" maxlength="8" name="tSenha" required>
    <small class="form-text text-muted">A senha deverá possuir apenas 8 dígitos</small>
  </div>
  <div class='form-group col-md-6'>
    <label>Confirme a senha</label>
    <input type="password" class="form-control form-control-sm" id="exampleInputPassword2" placeholder="Confirme a senha" maxlength="8"name="tConfirmaSenha" required>
  </div>
</div>  
<div>
    <label>Selecione o tipo de usuário</label>
    <select class="form-control form-control-sm" name="tTipoUsuario" required>
      <option value="">Selecione</option>
                <option value="1">Cliente</option>
                <option value="2">Funcionário</option>
    </select>
</div>
<br>
<div class="form-row"> 
    <div class='form-group col-md-6'>
      <label>Selecione uma pergunta de segurança</label>
      <select name="tPergunta"  class="form-control form-control-sm" required>
        <option value="">Selecione</option>
            <?php
            $perguntas = controle_listar_perguntas();
            foreach ($perguntas as $pergunta)
              {
                echo "<option value='". $pergunta['id'] . "'>" . $pergunta['pergunta']. "</option>";
              }
            ?>
      </select>
    </div>
    <div class='form-group col-md-6'>
      <label>Resposta</label>
      <input type="text" name="tResposta" class="form-control form-control-sm" required>
    </div>
</div>

<input class="btn btn-outline-danger" type="submit" value="Enviar">
<input class="btn btn-outline-danger" type="reset" value="Limpar">

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