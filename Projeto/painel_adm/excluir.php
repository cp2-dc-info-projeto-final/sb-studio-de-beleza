
<?php

require ("lista_funcView.php"); /* Incluiu o arquivo referenciado e, em caso de erro, irá parar o script */

//armazenar em uma variável o id do funcionário listado em cada linha
$id_func = $_GET['id'];
$id_usuario = $_GET['id'];

$connection = mysqli_connect("localhost", "root", "", "studiodebeleza"); 
if(!$connection) die("Falha ao conectar ao banco");
mysqli_select_db($connection, "studiodebeleza");

//deletar da tabela usuário os dados do usuário
$sql = "DELETE FROM usuario WHERE usuario.id_usuario = '$id_usuario'";
$result = mysqli_query($connection, $sql) or die ("Houve um erro");
 
//deletar da tabela funcionário os dados do funcionário
$sql = "DELETE FROM Funcionario WHERE funcionario.id_func = '$id_func'";
$result = mysqli_query($connection, $sql) or die ("Houve um erro");
  
//recarregar a página após o processo de exclusão
echo '<script> location.href="lista_funcView.php"; </script>';

?>
