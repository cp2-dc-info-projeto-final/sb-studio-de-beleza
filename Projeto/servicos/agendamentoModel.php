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

$id_servico = $_POST['tServico']; 
$id_func = $_POST['tAndre']; $_POST['tEve']; $_POST['tCat']; $_POST['tRosa']; $_POST['tKar'];
$data_agend = $_POST['tCalendario'];
$hora_inicio = $_POST['t'];
$hora_fim = $_POST['t'];

session_start();


$sql = "SELECT data_agend FROM agendamento WHERE data_agend = '$data_agend'";
$result = mysqli_query($link, $sql); //armazenar o resultado da QUERY
$erro = "";


  // Free result set
{
  mysqli_free_result($result); 
}

mysqli_close($link);
?>