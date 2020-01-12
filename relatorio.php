<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Funerária Só Falta Você - Relatório Financeiro </title>
  </head>
  <body>
  <h1 id="conteudo">Relatório Financeiro </h1>
<p>Veja abaixo o relatório da movimentação financeira da sua empresa. </p>
<ul>
<?php 
$cx = new mysqli ("localhost","root","","funeraria");
$eventos= $cx->query ("select * from eventos order by id");
/*busca os dados no banco */
while ($evento = $eventos->fetch_assoc()){
echo "<li>$evento[nome] - $evento[receita] - $evento[despesa]</li>";
}
?>
</ul>



  
  </body>
</html>