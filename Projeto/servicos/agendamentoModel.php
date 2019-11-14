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
$data = $_POST['tCalendario'];
$hora_inicio = $_POST['t'];
$hora_fim = $_POST['t'];

session_start();

?>