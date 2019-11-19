<?php
   require_once "../connection_factory.php";
   $conn = get_connection();
   require "lista_clienteView.php"; /* Incluiu o arquivo referenciado e, em caso de erro, irá parar o script */

//armazenar em uma variável o id do funcionário listado em cada linha
$id = $_GET['id'];

//deletar da tabela usuário os dados do usuário
$sql = "DELETE FROM usuario WHERE usuario.id_usuario = '$id'";
$result = mysqli_query($conn, $sql) or die ("Houve um erro");
 
//deletar da tabela funcionário os dados do funcionário
$sql = "DELETE FROM Cliente WHERE cliente.id_cliente = '$id'";
$result = mysqli_query($conn, $sql) or die ("Houve um erro");

//deletar da tabela funcionário os dados do funcionário
$sql = "DELETE FROM recuperacao WHERE recuperacao.id_usuario = '$id'";
$result = mysqli_query($conn, $sql) or die ("Houve um erro");
  
//recarregar a página após o processo de exclusão
echo '<script> location.href="lista_clienteView.php"; </script>';

?>
