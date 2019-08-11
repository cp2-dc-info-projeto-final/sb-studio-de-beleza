<h1>Perdi a senha de acesso</h1>
<?php
  if( !empty($_POST) ){
    // processar o pedido
    $connection = mysqli_connect("localhost", "root", "", "studiodebeleza");  // ligar à base de dados
    mysqli_select_db($connection, 'studiodebeleza');  // escolher a base de dados pretendida
 
    $usuario = mysqli_real_escape_string($connection, $_POST['email']);
    $sql = mysqli_query($connection, "SELECT * FROM usuario WHERE email = '$usuario'");
 
    if( mysqli_num_rows($sql) == 1 ){
      // se o email existe, vamos gerar um link único e enviá-lo para o e-mail
 
      // gerar a chave (única) de confirmação
      $chave = md5(uniqid( mt_rand(), true));
 
      // guardar este par de valores na tabela para confirmar mais tarde
      $consulta = mysqli_query($connection, "INSERT INTO recuperacao VALUES ('$usuario', '$chave')");

      if(mysqli_affected_rows($connection) == 1){
      // enviando link de recuperação via email
        $link = "http://127.0.0.1/edsa-studiodebeleza/login/recuperar.php?email=$usuario&confirmacao=$chave";
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'From: StudioEvelynMarins <tccin301@hotmail.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

        if(mail($usuario, 'Recuperação de senha!', 'Olá '.$usuario.', visite este link '.$link, $headers) ){
          echo '<p>Foi enviado um e-mail para o seu endereço, acesse-o e lá encontra um link para a recuperação de sua senha</p>';
 
        } else {
          echo '<p>Houve um erro ao enviar o email (o servidor suporta a função mail?)</p>';
 
        }
 
		// Apenas para testar o link, no caso do e-mail falhar
		echo '<p>Link: '.$link.' (apresentado apenas para testes; nunca expor a público!)</p>';
 
      } else {
        echo '<p>Não foi possível gerar o link de recuperação</p>';
 
      }
    } else {
	  echo '<p>Esse usuário não existe</p>';
	}
  } else {
    // exibir o formulário para o pedido de recuperação de senha ^^
?>
<form method="post">
  <label for="email">E-mail:</label>
  <input type="text" name="email" id="email" />
  <input type="submit" value="Recuperar" />
</form>
<?php
  }
?>