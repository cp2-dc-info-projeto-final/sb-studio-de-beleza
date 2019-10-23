<?php

function BuscaPerguntaSecreta ($email) {
  require_once "../connection_factory.php";
  $conn = get_connection();
  
  $usuario = mysqli_real_escape_string($conn, $_POST['email']);
  $query = "select pergunta.id_pergunta, pergunta.pergunta, recuperacao.resposta, recuperacao.id_usuario from pergunta
  join recuperacao on recuperacao.id_pergunta = pergunta.id_pergunta
  join usuario on usuario.id_usuario = recuperacao.id_usuario
  where usuario.email = '$email'";
  
  $result = mysqli_query($conn, $query);
  
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

  mysqli_close ($conn);
}
?>

