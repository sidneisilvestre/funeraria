<!DOCTYPE html>
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

<table>
<thead><tr><th scope="col">Nome</th><th scope="col">Produtos escolhidos</th></tr></thead>
<tbody>
<?php 
include_once "conexao.php";
$eventos= $cx->query ("select * from eventos order by nome_morto");
/*busca os dados no banco */
while ($evento = $eventos->fetch_assoc()){
echo "<tr><th scope='row'>$evento[nome_morto]</th><td>$evento[id_produto]</td></tr>";
}
?>
</tbody>
</table>

<button onclick="javascript:history.back()">Voltar</button>
  
  </body>
</html>