
<?php
require ("lista_func.php");

$connection = mysqli_connect("localhost", "root", "", "studiodebeleza"); 
if(!$connection) die("Falha ao conectar ao banco");
mysqli_select_db($connection, "studiodebeleza");

$sql = "DELETE FROM usuario WHERE id_usuario = '$id' ";

$result = mysqli_query($connection, $sql) or die ("Houve um erro");

 $sql = "DELETE FROM funcionario WHERE id_func = '$id' ";

 $result = mysqli_query($connection, $sql) or die ("Houve um erro");
  
 echo '<script> location.href="lista_func.php"; </script>';

?>
