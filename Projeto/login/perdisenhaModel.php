<?php

function BuscaPerguntaSecreta ($email) {
  $connection = mysqli_connect("localhost", "root", "", "studiodebeleza");  // ligar à base de dados
  mysqli_select_db($connection, 'studiodebeleza');  // escolher a base de dados pretendida
  
  $usuario = mysqli_real_escape_string($connection, $_POST['email']);
  $query = "select pergunta.id_pergunta, pergunta.pergunta, recuperacao.resposta, recuperacao.id_usuario from pergunta
  join recuperacao on recuperacao.id_pergunta = pergunta.id_pergunta
  join usuario on usuario.id_usuario = recuperacao.id_usuario
  where usuario.email = '$email'";
  
  $result = mysqli_query($connection, $query);
  
  if( mysqli_num_rows($result) > 0 )
  {
    while($row = mysqli_fetch_assoc($result)) {
        $pergunta = $row["pergunta"];
        return $pergunta;
    }
  }
  else {
        return false;
  } 
}
?>

