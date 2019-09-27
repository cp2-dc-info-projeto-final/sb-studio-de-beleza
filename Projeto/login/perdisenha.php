<h1>Perdi a senha de acesso</h1>
<?php
  if( !empty($_POST) ){
    // processar o pedido
    $connection = mysqli_connect("localhost", "root", "", "studiodebeleza");  // ligar à base de dados
    mysqli_select_db($connection, 'studiodebeleza');  // escolher a base de dados pretendida
 
    $usuario = mysqli_real_escape_string($connection, $_POST['email']);
    $query = "select pergunta.id_pergunta, pergunta.pergunta, recuperacao.resposta, recuperacao.id_usuario from pergunta
    join recuperacao on recuperacao.id_pergunta = pergunta.id_pergunta
    join usuario on usuario.id_usuario = recuperacao.id_usuario
    where usuario.email = '$email';
    ";
    $sql = mysqli_query($connection, $query);
 
    if( mysqli_num_rows($sql) == 1 ){
      {
        echo '<p>Esse usuário existe</p>';
      }
    } else {
	  echo '<p>Esse usuário não existe</p>';
	}
  } else {
    // exibir o formulário para o pedido de recuperação de senha ^^
?>
<form method="post" action="a.php">
  <label for="email">E-mail:</label>
  <input type="text" name="email" id="email" />
  <label>Selecione uma pergunta de segurança</label>
<select name="tPergunta" required>
                     <option value="">Selecione</option>
                     <?php
                        require "../cadastro/BuscaPerguntaCtrl.php";
                        $perguntas = controle_listar_perguntas();
                        foreach ($perguntas as $pergunta)
                        {
                           echo "<option value='". $pergunta['id'] . "'>" . $pergunta['pergunta']. "</option>";
                        }
                     ?>
                   </select>
                   <label for="resposta">resposta</label>
  <input type="text" name="resposta" id="resposta"; />
  <input type="submit" value="Recuperar" />
</form>
<?php
  }
?>