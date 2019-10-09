<h1>Alterar password</h1>
<?php

  mysqli_connect("localhost", "root", "", "studiodebeleza");  // ligar à base de dados
  mysqli_select_db("studiodebeleza");  // escolher a base de dados pretendida

  $sql = mysqli_query("SELECT * FROM recuperacao WHERE = '' AND  = ''");
 
    ?>
   <form method="post" action="loginCtrl.php">
    <input type ="password" name="tSenha" id="cSenha" placeholder=" Informe a nova senha"> <br><br>
    <input type ="password" name="tConfirmarSenha" id="cConfirmarSenha" placeholder=" Confirme sua senha"> <br><br>
    <input type ="submit"> <br> <br>
    </form>
<?php


?>