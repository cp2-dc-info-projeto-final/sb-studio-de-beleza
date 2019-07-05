<html>
    
<head>
    <title>Faça agora o seu login</title> 
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="formLogin.css" />
</head>
<body>
    <div class="cabecalho_login" align="center">
    <h1>Faça login</h1>
    </div>
    <form action="login.php" method="post"> 
    </div>
		<fieldset class="fieldset_cadastro">
            
			<label><b>Endereço de email</b></label>
            <input type="text" name="tEmail" id="cEmail"><br><br>
            <label><b>Senha</b></label><br>
            <input input type="password" name="tSenha" id="cSenha" maxlength="8" placeholder=" 8 dígitos">
            <input type="submit" class="btn_enviar" name="entrar">
        
        </fieldset>

        <?php
            session_start();
            if(array_key_exists('erro', $_SESSION) == true){
                $erro = $_SESSION["erro"];
                echo "<br><b>$erro</b>";
                session_unset();
            }
        ?>
        
        </div>
    </form>
    <a href="cadastro.html">
    <button name="btn_cadastrar" class="btn_cadastrar">Não possui cadastro?</button>
</a>
<div class="footer">
          <footer> 
            <h2 align="center" id="itens_rodape">Studio de Beleza Evelyn Marins</h2>
            <hr></hr>
            <p align="center">Rua José Ferreira Murro, Nº 320 - Nova Iguaçu<br>Rio de Janeiro - RJ - 26031-170<br>Tel:. (00) 0000-0000</p>
         </footer>
        </div>
</body>
</html>