<?php

require_once("../connection_factory.php");

function buscaServicos() {
  $conn = get_connection();

  $query = "SELECT id_servico, nome_servico, preco_servico FROM Servico";
  $result = mysqli_query($conn, $query); 

<<<<<<< HEAD
function cadastraAgendamento($id_servico, $id_func, $data_agend, $horario) {
  $sql = "INSERT INTO Agendamento (id_servico, id_func, data_agend, hora_inicio) VALUES ('$id_servico', '$id_func', '$data_agend', '$horario')"; 
  $result = mysqli_query($link, $sql);

=======
  $servicos = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $servicos;
}
>>>>>>> b1bffd5af4df42240c29afcfab32a8e8e0f81b39

function buscaFuncionario(){
  $conn = get_connection();
  $query = "SELECT id_func, nome_funcionario FROM Funcionario";
  $result = mysqli_query($conn, $query); 

<<<<<<< HEAD
while ($row = mysql_fetch_row($result)) {
  $row['hora_inicio'];
  
$hora = array ('9:00', '10:00', '11:00', '13:00', '14:00', '15:00', '16:00', '17:00');
$i = 0;
=======
  $funcionario = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);

  return $funcionario;
}

//----------------------------------------------------------------------------------------

function buscaHorario($data_agend, $nome_funcionario){
  $conn = get_connection();
  $tempoocupado = "SELECT hora_inicio FROM Agendamento where data_agend = $data_agend AND id_func = $nome_funcionario";
  $result = mysqli_query($conn, $tempoocupado);

  $hora = array ('9:00', '10:00', '11:00', '13:00', '14:00', '15:00', '16:00', '17:00');
  $i = 0;
>>>>>>> b1bffd5af4df42240c29afcfab32a8e8e0f81b39

  for ($i; $i <= 7 ; $i++){
    if ($hora != $tempoocupado){ 
      $horario = $hora[$i];
    }
  }

  return $horario;

// ---------------------------------------------------------------------------------------

}
}

}



<<<<<<< HEAD
=======


>>>>>>> b1bffd5af4df42240c29afcfab32a8e8e0f81b39

?>