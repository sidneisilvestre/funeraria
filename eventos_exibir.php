﻿<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Eventos de clientes</title>
  </head>
  <body>
  <h1 id="conteudo">Produtos e Serviços disponíveis para você </h1>
<p> exiba aqui nossos clientes já cadastrados!!!</p>

<ul>
<?php 
$cx = new mysqli ("localhost","root","","funeraria");
$eventos= $cx->query ("select * from eventos order by nome");
/*busca os dados no banco */
while ($evento = $eventos->fetch_assoc()){
echo "<li>$evento[nome]</li>";
}
?>

</ul>


  
  </body>
</html>