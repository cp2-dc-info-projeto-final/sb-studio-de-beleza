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
    $data_agend = "SELECT data_agend FROM Agendamento";

    return $data_agend;
}

//----------------------------------------------------------------------------------------

function buscaHorario($data_agend, $nome_funcionario){
  $conn = get_connection();
  $tempoocupado = "SELECT hora_inicio FROM Agendamento where data_agend = $data_agend";
  $result = mysqli_query($conn, $tempoocupado);

  $hora = array ('9:00', '10:00', '11:00', '13:00', '14:00', '15:00', '16:00', '17:00');
  $i = 0;
  $x = -1;
  $horario = array ("", "", "", "", "", "", "", "");
   implode (string $horariostring,  array $horario) : string;

  for ($i; $i <= 7 ; $i++){
    if ($hora != $result){ 
      $horariostring[$x++] = $hora[$i];
    }
  }


  return $horario;
}

?>