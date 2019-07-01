<?php 
$email = $_POST['tEmail'];
$senha = md5($_POST['tSenha']);
$connect = mysqli_connect("localhost", "root", "", "studiodebeleza"); 
/*
$db = mysqli_query('studiodebeleza');
*/      
    session_start();
    $verifica = mysqli_query("SELECT * FROM usuario WHERE email = 
    '$email' AND senha == '$senha'") or die("erro ao selecionar");
      if (!$_SESSION['nome']) {  
        header('Location: index.php');
        exit();
   
  }
?>