<h1>Alterar password</h1>
<?php

  if( empty($_GET['utilizador']) || empty($_GET['confirmacao']) )
    die('<p>Não é possível alterar a password: dados em falta</p>');
 
  mysqli_connect("localhost", "root", "", "studiodebeleza");  // ligar à base de dados
  mysqli_select_db("studiodebeleza");  // escolher a base de dados pretendida
 
  $usuario = mysqli_real_escape_string($_GET['utilizador']);
  $hash = mysqli_real_escape_string($_GET['confirmacao']);
 
  $sql = mysqli_query("SELECT * FROM recuperacao WHERE utilizador = '$usuario' AND confirmacao = '$hash'");
 
  if( mysqli_result($sql, 0, 0) == "1" ){
    // os dados estão corretos: eliminar o pedido e permitir alterar a password
    mysqli_query("DELETE FROM recuperacao WHERE utilizador = '$usuario' AND confirmacao = '$hash'");

    ?>
   <form method="post" action="loginCtrl.php">
    <input type ="password" name="tSenha" id="cSenha" placeholder=" Informe a nova senha"> <br><br>
    <input type ="password" name="tConfirmarSenha" id="cConfirmarSenha" placeholder=" Confirme sua senha"> <br><br>
    <input type ="submit"> <br> <br>
    </form>
<?php
  } else {
    echo "<p>Não é possível alterar a senha, dados incorretos</p>";
  }
 
?>