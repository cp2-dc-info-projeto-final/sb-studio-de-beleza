<?php
require_once "../connection_factory.php";


require "agendamentoModel.php";

$conn = get_connection();
$servico = $_GET['tServico'];
$func = $_GET['tFunc'];
$data = $_GET['tCalendario'];
$hora = $_GET['tHora'];
session_start();
$id_usuario = $_SESSION["id"];

$sql = "INSERT INTO Agendamento ('id_usuario', 'id_servico', 'id_func', 'data_agend', 'hora_inicio') VALUES ('$id_usuario', '$servico', '$func', '$data', '$hora')";

mysqli_close($conn);
?>