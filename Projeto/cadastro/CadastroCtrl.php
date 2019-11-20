<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

require_once "../connection_factory.php";
require "cadastroUsuario.php";

function controle_listar_estados() {
    return BuscarEstados();
}

function controle_listar_perguntas() {
    return BuscarPerguntas();
}


?>
