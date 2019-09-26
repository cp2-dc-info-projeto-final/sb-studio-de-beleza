<?php
$connection = mysqli_connect("localhost", "root", "", "studiodebeleza"); 
$resposta = $_POST['resposta'];
        $sql = "SELECT id_usuario,resposta FROM recuperacao WHERE resposta='$resposta'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {

echo 'deu certo';
        } else {
echo 'deu errado';
        }

        ?>