<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "studiodebeleza");
 
// Check connection
if($link === false)
{
    die("ERRO: Não foi possível conectar" . mysqli_connect_error());
}
 
$login = $_POST['tEmail'];
$senha = $_POST['tSenha'];
// Attempt insert query execution
$sql = "INSERT INTO usuario (email, senha) VALUES ($login, $senha)";
    if(mysqli_query($link, $sql))
    {
        echo "Cadastro Concluído com Sucesso :)";
    } else
        {
            echo "ERRO: Não foi possível executar o $sql. " . mysqli_error($link);
        }

$id_usuario = SELECT id FROM usuario WHERE email = $tEmail //$id_usuario = SELECT id FROM usuario WHERE email=$temail
$nome = $_POST["tNome"];
$tipoUsuario = $_POST["tTipoUsuario"];
$tel = $_POST["$tTelefone"];
$calendario = $_POST["$tCalendario"];
$cpf = $_POST["tCpf"];
$sexo = $_POST["$tSexo"];
if ($tipoUsuario == 2) // if tipo == funcionario
{
    $id_func = $id_usuario // id_func = $id_usuario
    $sql = "INSERT INTO Funcionario (id_func, nome_funcionario, telefone, data_nasc, cpf, sexo) VALUES ($id_func, $nome, $tel, $calendario, $cpf, $sexo)";
    if(mysqli_query($link, $sql))
    {
        echo "Cadastro concluído com sucesso! :)";
    } else
        {
            echo "ERRO: Não foi possível executar o $sql. " . mysqli_error($link);
        }

}
if ($tTipoUsuario == 1) // if tipo == cliente
{
    id_cliente = $id_usuario // id_cliente = $id_usuario
    $sql = "INSERT INTO Cliente (id_cliente, nome_cliente, telefone, data_nasc, cpf, sexo) VALUES ($id_cliente, $nome, $tel, $calendario, $cpf, $sexo)";
        if(mysqli_query($link, $sql))
        {
            echo "Cadastro concluído com sucesso! :)";
        } else
            {
                echo "ERRO: Não foi possível executar o $sql. " . mysqli_error($link);
            }
}
// FECHAR CONEXÃO
mysqli_close($link);
?>