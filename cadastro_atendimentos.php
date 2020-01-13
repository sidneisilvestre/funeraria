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
echo "<option>$evento[nome]</option value='$evento[id]'>";
}
?>
</select>
<label for="km!> informe a kilometragem percorrida.</label>
<imput type="number"> name="km"> id="km";
<label for="l"> informe quantos litros  de combustível foi gasto.</label>
<imput type="number"> name="l"> id="l;
<label for="desp"> informe se ouve despeza com mecânico</label>
<imput type="text"> name="desp"> id="desp";
<label for="out"> acrescente outras despezas se houver</label>
imput type="text"> name="out"> id="out";
</for>
</body>
</html>