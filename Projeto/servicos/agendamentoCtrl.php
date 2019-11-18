<?php
require "agendamentoModel.php";

$id_servico = $_POST['tServico']; 
$id_func = $_POST['tAndre']; $_POST['tEve']; $_POST['tCat']; $_POST['tRosa']; $_POST['tKar'];
$data_agend = $_POST['tCalendario'];
$hora_inicio = $_POST['tHorario'];


cadastraAgendamento($id_servico, $id_func, $data_agend, $hora_inicio);

?>