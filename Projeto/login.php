<?php 
$email = $_POST['tEmail'];
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
          $erro = "Senha incorreta";        
          $_SESSION["erro"] = $erro;
          header("Location: formLogin.php");
          exit();
      }
    }
} else {
    $erro = "Login inexistente";
    $_SESSION["erro"] = $erro;
    header("Location: cadastro.html");
    exit();
}        
mysqli_close($connection);

?>