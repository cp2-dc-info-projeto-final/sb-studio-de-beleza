<?php
require_once "../connection_factory.php";

require "agendamentoModel.php";

session_start();


echo ($_SESSION['servico'] . "-" . $_SESSION['id_funcionario'] . "-" . $_SESSION['data_agend'] . "-" . $_SESSION['hora']);
$conn = get_connection();
$sql = "INSERT INTO Agendamento ('id_servico', 'id_func', 'data_agend', 'hora_inicio') VALUES ('{$_SESSION['servico']}', '{$_SESSION['id_funcionario']}', '{$_SESSION['data_agend']}', '{$_SESSION['hora']}')";




mysqli_close($conn);
?>