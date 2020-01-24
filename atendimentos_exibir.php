<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Funerária Só Falta Você - Relatório despesas  </title>
  </head>
  <body>
  <h1 id="conteudo">Relatório de despesas </h1>
<p>Veja abaixo as despesas já cadastradas por observação.. </p>
<ul>
<?php 
include_once "conexao.php";
$despesas= $cx->query ("select * from despesas  order by id");
/*busca os dados no banco */
while ($despesa = $despesas->fetch_assoc()){
echo "<li>$despesa[obs]</li>";
}
?>
</ul>



  
  </body>
</html>