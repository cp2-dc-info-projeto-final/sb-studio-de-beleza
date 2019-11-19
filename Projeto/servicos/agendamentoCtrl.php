<?php
require "agendamentoModel.php";

$link = mysqli_connect("localhost", "root", "", "studiodebeleza");

$id_servico = $_POST['tServico']; 
$id_func = $_POST['tFunc'];
$data_agend = $_POST['tCalendario'];
$horario = $_POST['tHorario'];
$selecione = $_POST['tSelecione'];
$selecione1 = $_POST['tSelecione1'];
$nulo = $_POST['nulo'];
$nulofunc = $_POST['nulo1'];



?>