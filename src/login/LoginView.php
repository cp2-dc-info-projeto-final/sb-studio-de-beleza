<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LOGIN</title>
<link rel="stylesheet" href="../bootstrap.min.css">
<script src="../jquery_javavacript/jquery.min.js"></script>
<script src="../jquery_javascript/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="formLogin.css"/> 
</head>
<body>
<a href="../pagina_inicial/paginainicial.html" class="btn btn-primary btn-outline-danger" role="button" aria-pressed="true" id="btn_voltar">Voltar para a página inicial</a>

<div class="login-form">
	<h2 class="text-center" id="itens_titulo">Faça seu login agora mesmo</h2>
    <form action="LoginCtrl.php" method="post">
		<div class="avatar">
			<img src="../fotos_icones/icon.png" alt="Avatar">
		</div>           
        <div class="form-group">
        	<input type="text" class="form-control input-lg" name="tEmail" placeholder=" E-mail " required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="tSenha" placeholder=" Senha " maxlength="8" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn" name="entrar">Enviar</button>
            <link rel="stylesheet" href="../Projeto/pagina_inicial/paginainicial.html"/>
        </div>
        <p class="hint-text">Não possui cadastro? <a href="../cadastro/CadastroView.php"> Clique aqui!</a><br><br>
        <a href="perdisenha.php"> Esqueceu a senha?</a></p>
    <?php
            session_start();
            if(array_key_exists('erro', $_SESSION) == true){
                $erro = $_SESSION["erro"];
                echo "<br><b>$erro</b>";
                session_unset();
            }
        ?>
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
</footer>
</body>
</html>     