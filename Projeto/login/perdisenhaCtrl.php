<?php
require "perdisenhaModel.php"; 

$resposta = $_POST['tResposta'];

function RecuperaPerguntaSecreta ($email) {
    return BuscaPerguntaSecreta ($email);

}

function ConferePerguntaSecreta ($email) {

$sql = mysqli_query("select pergunta.id_pergunta, pergunta.pergunta, recuperacao.resposta, recuperacao.id_usuario from pergunta
join recuperacao on recuperacao.id_pergunta = pergunta.id_pergunta
join usuario on usuario.id_usuario = recuperacao.id_usuario
where usuario.email = '$email'";

if(mysql_num_rows($sql) == 1){
    echo "e";
  }
  else{
    echo "a";
  }
}
?>