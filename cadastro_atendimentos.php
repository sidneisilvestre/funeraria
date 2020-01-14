<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Cadastro dos atendimentos</title>
  </head>
  <body>
  <h1 id="conteudo">Cadastro dos eventos atendidos</h1>
<form action="atendimentos_cadastro.php" method="post">
<label for ="ev">Selecione um Evento cadastrado para atendimento</label>
<select name="ev" id="ev" autofocus />
<?php 
$cx = new mysqli ("localhost","root","","funeraria");
$eventos= $cx->query ("select * from eventos order by nome");
while ($evento = $eventos->fetch_assoc()){
echo "<option value='evento[$evento[id]]'>$evento[nome]</option>";
}
?>
</select>
<label for="km">Informe a Quilometragem percorrida </label>
<input type="number" name="km" id="km" />
<label for="desp">Informe a despesa total  </label>
<input type="number" name="despesa" id="desp" />
<label for="obs"> Informe os demais ítens ou serviços que foram adquiridos durante este atendimento </label>
<input type="text" name="obs" id="obs" />
<button type="submit" id="b" class="btn btn-primary">Cadastrar </button>
</form>
</body>
</html>