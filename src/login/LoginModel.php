<?php 
  require_once "../connection_factory.php";
    require "../servico/agendamentoCtrl.php"
    
    function autenticacao($email, $senha) {
        $conn = get_connection();
        $sql = "SELECT
                    u.id_usuario,
                    u.email,
                    IF (f.id_func is not null, 'funcionario', 'cliente') as tipo
                FROM usuario as u
                LEFT JOIN funcionario as f ON f.id_func = u.id_usuario
                LEFT JOIN cliente as c ON c.id_cliente = u.id_usuario
                WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $erro = "";
        if (mysqli_num_rows($result) > 0) /*serve para validar a autenticação a partir 
        do email e senha */
        {
            $usuario = [];
            // a condição a seguir serve para fazer a comparação da senha com a hash da mesma
            while($row = mysqli_fetch_assoc($result)) {
                $hash = $row["senha"];
                $usuario = $row["nome"];
                $usuario["id"] = $row["id"];
                if $row["funcionario"] == 1
                    $usuario["tipo"] = "funcionario";
                if $row["cliente"] == 1
                    $row["tipo"] = "cliente";
                if (password_verify($senha, $hash)) {
                    return $row;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }        
        mysqli_close($conn);
    }    
?>