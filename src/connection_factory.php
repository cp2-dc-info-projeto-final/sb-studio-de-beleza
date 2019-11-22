<?php

    function get_connection() {
        $conn = mysqli_connect("localhost", "root", "", "studiodebeleza"); /* Iniciando a conexão com o banco de dados */
        mysqli_set_charset($conn,'utf8');
        return $conn;
    }

?>