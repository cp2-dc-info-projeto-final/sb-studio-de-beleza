<html>
<head>
  <meta charset="UTF-8">
  <title>Cadastre-se</title>
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
         <p align="center">Cliente assíduo(a) do Studio de Beleza Evelyn Marins</p>  
      </div>
      <div>        	
        	<h1 id="titulo">Olá, caro visitante!</h1>
        	<p id="subtitulo" align="justify"><b>É um prazer tê-lo acessando o nosso site!</b> <br><br> Você sabia que agora fazer o <b>agendamento</b> dos nossos serviços está bem mais fácil? <br><br> Para isso, é preciso que você possua um cadastro em nosso sistema. Caso não possua, <b>faça-o agora mesmo</b> preenchendo os campos abaixo. </p>
      </div>

      <div>

<form action="cadastro.php" method="post" onsubmit="return validarSenha(this);" name="formulario"> <!-- configurar com php | todos os inputs estão sem o termo VALUE! -->

      <!-- DADOS PESSOAIS-->
      <fieldset class="fieldset_cadastro">
 			<legend>Dados Pessoais</legend>
 			<table cellspacing="15">
			<tr>
 	         <td>
    		    <label for="cNome">Nome completo: </label>
  		      </td>
            <td align="left">
             <input type="text" name="tNome" id="cNome" size="30">
            </td>
         </tr>
         <tr>
           <td>
             <label for="datepicker">Data de nascimento:</label>
           </td>
            <td align="left">
             <input type="text" id="datepicker" name="tCalendario">
            </td>
           <td align="left">
         <legend>Sexo:</legend>
           </td>
           <td> 
 	          <input type="radio" name="tSexo" id="cMasc" value="M" required/>
             <label for="cMasc">Masculino</label><br>
             <input type="radio" name="tSexo" id="cFem" value="F" required/>
             <label for="cFem">Feminino</label><br>   
            </td>
         </tr>
         <tr>
          <td>
             <label for="cCpf">CPF:</label>
            </td>
            <td align="left">
             <input type="text" name="tCpf" id="cCpf"> 
            </td>
          <td>
             <label for="cTelefone">Telefone: </label>
            </td>
          <td align="left">
             <input type="text" name="tTelefone" id="cTelefone">
            </td>
         </tr>
         </table>
      </fieldset>

      <!-- DADOS DE LOGIN --> 
      <fieldset class="fieldset_cadastro">
         <legend>Dados de login</legend>
         <table cellspacing="10">
      <tr>
         <td>
          <label for="cEmail">E-mail: </label>
         </td>
         <td align="left">
          <input type="text" name="tEmail" placeholder=" abcde@blabla.com" size="30" id="cEmail">
         </td>
         <td>
          <label>Tipo de usuário</label>
           <select name="tTipoUsuario" class="fieldset2">
                <option value="">Selecione</option>
                <option value="1">Cliente</option>
                <option value="2">Funcionário</option>
            </select>
         </td>
      </tr>
      <tr>
         <td>
          <label for="cSenha">Senha: </label>
         </td>
         <td align="left">
          <input type="password" name="tSenha" placeholder=" 8 digítos" maxlength="8" id="cSenha" size="30">
         </td>
         <td align="left">
               <label>Pergunta de Segurança:</label>
               <select name="tPergunta">
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
           </td>
      </tr>
      <tr>
         <td>
          <label for="cConfirmaSenha">Confirme a senha: </label>
         </td>
         <td align="left">
          <input type="password" name="tConfirmaSenha" placeholder=" 8 digítos" maxlength="8" id="cConfirmaSenha" size="30">
         </td>
         <td align="left">
            <input type="text" name="tResposta" id="cResposta" placeholder=" RESPOSTA">
           </td>
      </tr>
        </table>
      </fieldset>
      </div>
<br/>
          <input type="submit">
          <input type="reset" value="Limpar"> 
</form>
      <div class="footer">
          <footer> 
            <h2 align="center" id="itens_rodape">Studio de Beleza Evelyn Marins</h2>
            <hr></hr>
            <p align="center">Rua José Ferreira Murro, Nº 320 - Nova Iguaçu<br>Rio de Janeiro - RJ - 26031-170<br>Tel:. (00) 0000-0000</p>
         </footer>
</body>
</html>