
<div class="form-group col-md-6">
    <h3>Escolha o horário desejado:</h3>
      <select>
          <option name="tHora"></option>
        

<?php
require "agendamentoModel.php";

$data = $_GET["tCalendario"];
$id_func = $_GET["tFunc"];



$horarios = buscaHorario($data, $id_func);

foreach ($horarios as $recebe){

         

?>
  

<option name="tHora" value="<?php echo $recebe['horario']?>"><?php echo $recebe['horario'];?></option>

<?php
}
?>

</select>

  </div>