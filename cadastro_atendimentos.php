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
<form action="eventos_cadastro.php" method="post">
<label for ="ev">Selecione um Evento cadastrado para atendimento</label>
<select name="ev" id="ev"/>
<?php 
$cx = new mysqli ("localhost","root","","funeraria");
$eventos= $cx->query ("select * from eventos order by nome");
while ($evento = $eventos->fetch_assoc()){
echo "<option value='evento[id]'>$evento[nome]</option>";
}
?>
</select>
<label for="km">Informe a Quilometragem percorrida </label>
<imput type="number" name="km" id="km" />
<label for="lit">Informe quantos litros  de combustível foram gasto </label>
<imput type="number" name="lit" id="lit" />
<label for="desp">Ínforme se ouve despeza com mecânico </label>
<imput type="number" name="desp" id="desp" />
<label for="out">Acrescente outras despezas se houver</label>
imput type="number" name="out" id="out" />
</for>
</body>
</html>