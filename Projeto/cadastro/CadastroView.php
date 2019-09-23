<html>
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
     $(document).ready(function() /* evento em Jquery que espera instantaneamente o documento html ser carregado para ser executado */
  {  
     /* inserção das mascáras nos campos de input */
     $("#cCpf").mask("000.000.000-00", {placeholder: " 9 dígitos + 2 dígitos"});
     $("#datepicker").mask("00-00-0000", {placeholder: " DD-MM-AAAA"});
     $("#cTelefone").mask("(00) 000000000", {placeholder: " (DDD)"});
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
		<div class="logo_studiodiv"></div>
			<img id="logo_studio" src="../fotos_icones/logo_editada.png" width="120">  <!-- provavelmente editar a logo, pois ainda não há o vetor da mesma -->
		</div>
      <div>
			<ul id="menu">
         <li><a href="../pagina_inicial/paginainicial.html">Página Inicial</a></li>
			<li><a href="../servicos/servicos.html">Serviços</a></li>
			<li><a href="../galeria_fotos/galeriadefotos.html">Galeria de Fotos</a></li>
         <li><a href="../quem_somos/quemsomos.html">Quem somos nós</a></li>
			</ul>
		</div>

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
   <label>Municipio</label>
<select class="form-control form-control-sm" name="tMunicipio" required>
                     <option value="">Selecione</option>
                
	<option value="Belford Roxo">Belford Roxo</option>
    <option value="Duque de Caxias">Duque de Caxias</option>
    <option value="Guapimirim">Guapimirim</option>
    <option value="Itaguai">Itaguai</option>
    <option value="Japeri">Japeri</option>
    <option value="Magé">Magé</option>
    <option value="Mesquita">Mesquita</option>
    <option value="Nilopolis">Nilopolis</option>
    <option value="Nova Iguaçu">Nova Iguaçu</option>
    <option value="Paracambi">Paracambi</option>
    <option value="Queimados">Queimados</option>
    <option value="São João de Meriti">São João de Meriti</option>
    <option value="Seropedica">Seropedica</option>
                   </select>
                     </div>
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
</div><br>
<div class="form-row"> 
<div class='form-group col-md-6'>
   <label>Selecione uma pergunta de segurança</label>
<select name="tPergunta"  class="form-control form-control-sm" required>
                     <option value="">Selecione</option>
                     <?php
                        require "BuscaPerguntaCtrl.php";
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
</div>
</form>

<div>
       
</div>
      <div class="footer">
          <footer> 
            <h2 align="center" id="itens_rodape">Studio de Beleza Evelyn Marins</h2>
            <hr></hr>
            <p align="center">Rua José Ferreira Murro, Nº 320 - Nova Iguaçu<br>Rio de Janeiro - RJ - 26031-170<br>Tel:. (00) 0000-0000</p>
         </footer>
</body>
</html>