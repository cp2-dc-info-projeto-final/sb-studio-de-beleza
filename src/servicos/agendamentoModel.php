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
  $query = "SELECT id_func, nome_funcionario FROM Funcionario";
  $result = mysqli_query($conn, $query); 
  $funcionario = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);

  return $funcionario;
}

function buscaData(){
    $sql = "INSERT INTO Agendamento (data_agend) Values
    ($calendario)";
    $data_agend = ("SELECT data_agend FROM Agendamento");

    
    return $data_agend;
}

function buscaHorario($data_agend, $id_func){
  $conn = get_connection();
  $tempoocupado = "SELECT horario FROM horarios_atendimento
  WHERE horario NOT IN (
      SELECT hora_inicio FROM Agendamento
      WHERE data_agend = $data_agend
      AND id_func = $id_func
  );";

  $result = mysqli_query($conn, $tempoocupado); 
  $recebe = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);

  return $recebe;
}

?>