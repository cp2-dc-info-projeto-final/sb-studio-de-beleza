<?php
require "agendamentoModel.php";

$id_servico = $_POST['tServico']; 
$id_func = $_POST['tFunc'];
$data_agend = $_POST['tCalendario'];
$horario = $_POST['tHorario'];


cadastraAgendamento($id_servico, $id_func, $data_agend, $horario);

?>