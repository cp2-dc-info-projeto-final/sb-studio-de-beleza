<?php
require "agendamentoModel.php";

$id_servico = $_POST['tServico']; 
$id_func = $_POST['tFunc'];
$data_agend = $_POST['tCalendario'];
$horario = $_POST['tHorario'];
$selecione = $_POST['tSelecione'];
$selecionefunc = $_POST['tSelecione1'];
$nulo = $_POST['nulo'];
$nulofunc = $_POST['nulofunc'];



cadastraAgendamento($id_servico, $id_func, $data_agend, $horario, $selecione, $selecionefunc);

?>