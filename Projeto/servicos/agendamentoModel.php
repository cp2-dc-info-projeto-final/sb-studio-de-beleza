<?php

$link = mysqli_connect("localhost", "root", "", "studiodebeleza");

// Check connection
if($link === false)
{
    die("ERRO: Não foi possível conectar" . mysqli_connect_error());
} else
{
    echo "Hello World!";
}


session_start();

function cadastraAgendamento($id_servico, $id_func, $data_agend, $horario) {
  $sql = "INSERT INTO agendamento(id_servico, id_func, data_agend, hora_inicio) VALUES ('$id_servico, $id_func, $data_agend, $horario')";  
  $result = mysqli_query($link, $sql); //armazenar o resultado da QUERY
  $erro = "";
}

//----------------------------------------------------------------------------------------
$tempoocupado = "SELECT hora_inicio FROM Agendamento";

$hora = array ('9:00', '10:00', '11:00', '13:00', '14:00', '15:00', '16:00', '17:00');

if ($id_servico == "tServico" && $id_func == "tFunc"){
  if ($data_agend != $tempoocupado){
    for ($i; 0<=7; $i++){
      if ($hora[$i] != $tempoocupado){
        $horario = $hora[$i];
      }
    }
  }
}










//------------------------------------------------------------------------------------------
$sql = "SELECT data_agend FROM agendamento WHERE data_agend = '$data_agend'";
$result = mysqli_query($link, $sql); //armazenar o resultado da QUERY
$erro = "";


  // Free result set
{
  mysqli_free_result($result); 
}

mysqli_close($link);
?>