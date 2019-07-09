<?php 
$email = $_POST['tEmail'];
$senha = md5($_POST['tSenha']);
$connect = mysqli_connect("localhost", "root", "", "studiodebeleza"); 
$senha = $_POST['tSenha'];
$connection = mysqli_connect("localhost", "root", "", "studiodebeleza"); 
/*
$db = mysqli_query('studiodebeleza');
*/      
session_start();
    
$sql = "SELECT senha,email FROM usuario WHERE email='$email'";
$result = mysqli_query($connection, $sql);
$erro = "";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $hash = $row["senha"];
        if (password_verify($senha, $hash)) {
          session_unset();
          $_SESSION["nome"] = $row["nome"]; 
          header("Location: logo.png");
          exit();
      } else {
          $erro = "<p style='font-size: 35px;color:red;' align='center'> Senha incorreta </p>";     
          $_SESSION["erro"] = $erro;
          header("Location: formLogin.php");
          exit();
      }
    }
} else {
    $erro = "<p style='font-size: 35px;color:red;' align='center'> Login inexistente </p>";
    $_SESSION["erro"] = $erro;
    header("Location: formLogin.php");
    exit();
}        
mysqli_close($connection);
?>