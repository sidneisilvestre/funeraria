<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Funerária Só falta você - Cadastro de eventos </title>
  </head>
  <body>
  <h1 id="conteudo">Cadastro de eventos</h1>
<p>Utilize  o formulário abaixo para abrir uma nova solicitação de evento  ou realizar a venda de um produto individual. </p>
<form action="eventos_cadastro.php" method="post">


<p><a href="cadastro_clientes.php">Caso o cliente não esteja cadastrado, Clique ou pressione enter aqui para iniciar um novo  cadastro de cliente </a></p>
<label for="cliente">Selecione o nome do cliente  </label>
<select name="id_cliente" id="cliente" required />
<?php 
include_once "conexao.php";
$clientes= $cx->query ("select * from clientes order by nome");
while ($cliente = $clientes->fetch_assoc()){
echo "<option value='$cliente[id]'>$cliente[nome] </option>";
}
?>
</option>
</select>
<label for="nome_morto">Informe o nome do cadaver </label>
<input type="text" name="nome_morto" id="nome_morto" required />
<label for="data">Informe a data do evento </label>
<input type="date" name="data_evento" id="data" required />

<label for="produto">Selecione um plano ou  produto individual desejado pelo cliente  </label>
<select name="id_produto" id="produto" required />
<?php 
$produtos= $cx->query ("select * from produtos order by nome");
while ($produto = $produtos->fetch_assoc()){
echo "<option value='$produto[id]'>$produto[nome] </option>";
}
?>
</option>
</select>

<button type="submit" id="b" class="btn btn-primary">Cadastrar</button>
</form>
<button onclick="javascript:history.back()">Voltar para Home</button>
  </body>
</html>