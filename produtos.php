<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Produtos e serviços  </title>
  </head>
  <body>
  <h1 id="conteudo">Produtos e Serviços disponíveis para você </h1>
<p>Oferecemos os melhores produtos e serviços para que você não se preocupe com nada em um momento tão delicado. Deixe por conta de nossos profissionais e trate apenas de participar deste momento. </p>
<ul>
<?php 
include_once "conexao.php";
$produtos= $cx->query ("select * from produtos order by nome");
/*busca os dados no banco */
while ($produto = $produtos->fetch_assoc()){
echo "<li>$produto[nome] </li>";
}
?>
</ul>


  
  </body>
</html>