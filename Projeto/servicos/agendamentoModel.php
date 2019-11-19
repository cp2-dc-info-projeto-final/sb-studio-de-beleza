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

<<<<<<< HEAD
=======
function cadastraAgendamento($id_servico, $id_func, $data_agend, $horario) {
  $sql = "INSERT INTO Agendamento (id_servico, id_func, data_agend, hora_inicio) VALUES ('$id_servico', '$id_func', '$data_agend', '$horario')"; 
  $result = mysqli_query($link, $sql);
}
//----------------------------------------------------------------------------------------
>>>>>>> 7a9b8aa9bd59283049010beb34f2233a6d4ed7a4

$tempoocupado = "SELECT hora_inicio FROM Agendamento WHERE id_func = '.$id_func.' AND data_agend = '.$data_agend.'";
$result = mysqli_query($link, $tempoocupado);

while ($row = mysql_fetch_row($result)) {
  $row['hora_inicio'];
}


$hora = array ('9:00', '10:00', '11:00', '13:00', '14:00', '15:00', '16:00', '17:00');
$i = 0;

for ($i; 0 <= 7 ; $i--){
  if ($hora != $tempoocupado){ 
    $horario = $hora[$i];
    $i = $i + 2;
    echo ($horario);
  }
  Break;
}




//------------------------------------------------------------------------------------------



mysqli_close($link);
?>