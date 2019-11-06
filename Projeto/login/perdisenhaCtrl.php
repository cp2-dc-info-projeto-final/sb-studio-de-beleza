<?php
require "perdisenhaModel.php"; 

function RecuperaPerguntaSecreta($email) {
    return BuscaPerguntaSecreta($email);
}

function VerificaRespostaSecreta($email, $resposta) {

    // TODO

}
if (isset($_POST['tEmail']) && isset($_POST['tResposta'])) {
  VerificaRespostaSecreta($_POST['tEmail'], $_POST['tResposta']);
}
?>

