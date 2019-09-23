<?php 

    function autenticacao($email, $senha) {
        $connection = mysqli_connect("localhost", "root", "", "studiodebeleza"); 
        $sql = "SELECT senha,email FROM usuario WHERE email='$email'";
        $result = mysqli_query($connection, $sql);
        $erro = "";
        if (mysqli_num_rows($result) > 0) /*serve para validar a autenticação a partir 
        do email e senha */
        {
            // a condição a seguir serve para fazer a comparação da senha com a hash da mesma
            while($row = mysqli_fetch_assoc($result)) {
                $hash = $row["senha"];
                if (password_verify($senha, $hash)) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }        
        mysqli_close($connection);
    }    
?>