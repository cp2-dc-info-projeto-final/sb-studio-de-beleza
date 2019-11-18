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

function cadastraAgendamento($id_servico, $id_func, $data_agend, $hora_inicio) {
  $sql = "INSERT INTO agendamento(id_servico, id_func, data_agend, hora_inicio, duracao) VALUES ('$id_servico, $id_func, $data_agend, $hora_inicio, $duracao')";  
  $result = mysqli_query($link, $sql); //armazenar o resultado da QUERY
  $erro = "";
}

$sql = "SELECT data_agend FROM agendamento WHERE data_agend = '$data_agend'";
$result = mysqli_query($link, $sql); //armazenar o resultado da QUERY
$erro = "";


  // Free result set
{
  mysqli_free_result($result); 
}

mysqli_close($link);
?>