<?php
require_once "../connection_factory.php";
$conn = get_connection();
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
      <input type="text" name="tEmail" id="email" />
      <?php
        require "perdisenhaCtrl.php";
          $perguntaSecreta = null;
          if( !empty($_POST['tEmail']) ){
            $perguntaSecreta = RecuperaPerguntaSecreta($_POST['tEmail']);
            if ($perguntaSecreta == false) {
              echo "Email não cadastrado";
            }
          }   
        ?>
      
      <input type="submit" value="Recuperar" />
    </form>
    
      <?php
        
        if (isset($perguntaSecreta) && $perguntaSecreta != false) {
      ?>
        <form method="post" action="perdisenhaCtrl.php">
          <label> <?php echo $perguntaSecreta['pergunta'] ?></label>";
          <input type='text' name='tResposta'/>;
          <?php if( !empty($_POST['tEmail']) ){
            echo "<input type='hidden' value='" . $_POST['tEmail'] . "' />";
          }
          ?>
             
          <input type="submit" value="Conferir resposta secreta" />
        </form>
      <?php
        }
      ?>
      
  </body>
</html>