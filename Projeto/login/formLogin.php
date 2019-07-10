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
<div class="login-form">
	<h2 class="text-center" id="itens_titulo">Faça seu login agora mesmo</h2>
    <form action="login.php" method="post">
		<div class="avatar">
			<img src="icon.png" alt="Avatar">
		</div>           
        <div class="form-group">
        	<input type="text" class="form-control input-lg" name="tEmail" placeholder=" E-mail " required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="tSenha" placeholder=" Senha " maxlength="8" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn" name="entrar">Enviar</button>
        </div>
		<p class="hint-text">Não possui cadastro? <a href="cadastro.html"> Clique aqui!</a></p>
    </form>
    <?php
            session_start();
            if(array_key_exists('erro', $_SESSION) == true){
                $erro = $_SESSION["erro"];
                echo "<br><b>$erro</b>";
                session_unset();
            }
        ?>
</div>
<div class="footer">
    <footer> 
      <h2 align="center" id="itens_rodape">Studio de Beleza Evelyn Marins</h2>
      <hr></hr>
      <p align="center">Rua José Ferreira Murro, Nº 320 - Nova Iguaçu<br>Rio de Janeiro - RJ - 26031-170<br>Tel:. (00) 0000-0000</p>
   </footer>
</body>
</html>     