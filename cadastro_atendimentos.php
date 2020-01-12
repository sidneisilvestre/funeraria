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
<label for="mat">Selecione um Evento cadastrado ou adicione um novo</label>
<select name="mat" id="mat"/>
<?php 
$cx = new mysqli ("localhost","root","","funeraria");
$eventos= $cx->query ("select * from eventos order by nome");
while ($evento = $eventos->fetch_assoc()){
echo "<option>$evento[nome]</option>";
}
?>
</select>

</body>
</html>