<?php

require_once("../connection_factory.php");

function buscaServicos() {
  $conn = get_connection();

  $query = "SELECT id_servico, nome_servico, preco_servico FROM Servico";
  $result = mysqli_query($conn, $query);
  
  $servicos = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $servicos;
}

function buscaFuncionario(){
  $conn = get_connection();
  $query = "SELECT id_func,nome_funcionario FROM Funcionario";
  $result = mysqli_query($conn, $query); 
  $funcionario = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);

  return $funcionario;
}

function buscaData($data_agend){
   # $sql = "INSERT INTO Agendamento (data_agend) Values
   # ($calendario)";
   # $data_agend = "SELECT data_agend FROM Agendamento";

    $dia = substr($data_agend, 0, 2);
    $mes = substr($data_agend, 3, 2);
    $ano = substr($data_agend, 6, 4);

    $result = $ano . "-" . $mes . "-" . $dia;
    return $result;
}

function buscaHorario($result, $funcionario){
  $conn = get_connection();
  $tempoocupado = "SELECT horario FROM horarios_atendimento
  WHERE horario NOT IN (
      SELECT hora_inicio FROM Agendamento
      WHERE data_agend = '$result'
      AND id_func = '$funcionario'
  );";

  $result = mysqli_query($conn, $tempoocupado); 
  $recebe = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);

  return $recebe;
}

function fazerAgendamento($horario){
  $conn = get_connection();
  $consulta = "UPDATE horarios_atendimento SET utiliado = true 
              WhERE horario = $horario";
  $result = mysqli_query($conn, $consulta);
  mysqli_close($conn); 
}
?>