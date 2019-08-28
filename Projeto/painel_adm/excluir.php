
<?php
require ("lista_funcView.php");

$id_func = $_GET['id'];
$id_usuario = $_GET['id'];

$connection = mysqli_connect("localhost", "root", "", "studiodebeleza"); 
if(!$connection) die("Falha ao conectar ao banco");
mysqli_select_db($connection, "studiodebeleza");

$sql = "DELETE FROM usuario WHERE usuario.id_usuario = '$id_usuario'";

$result = mysqli_query($connection, $sql) or die ("Houve um erro");
 

$sql = "DELETE FROM Funcionario WHERE funcionario.id_func = '$id_func'";

 $result = mysqli_query($connection, $sql) or die ("Houve um erro");
  
 echo '<script> location.href="lista_funcView.php"; </script>';

?>
