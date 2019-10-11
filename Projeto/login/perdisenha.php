<?php

require "../connection_factory.php";

$link = get_connection();
?>
<html>
  <head>
    <title>Recuperar senha</title>
    <meta charset="utf-8"/>
  </head>
  <body>
    <h1>Perdi a senha de acesso</h1>
    <form method="post" action="perdisenha.php">
      <label for="email">E-mail:</label>
      <input type="text" name="email" id="email" />
      <?php
        require "perdisenhaCtrl.php";
          if( !empty($_POST) ){
            $perguntaSecreta = RecuperaPerguntaSecreta($_POST['email']);

            if ($perguntaSecreta == false) {
              echo "Email não cadastrado";
            }
            else {
              echo "<label> $perguntaSecreta </label>";
              echo "<input type='text' name='resposta'/>";
            }
          }   
        ?>
      
      <input type="submit" value="Recuperar" />
    </form>
  </body>
</html>


