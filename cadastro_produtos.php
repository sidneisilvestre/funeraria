<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Cadastro de Produtos e planos </title>
  </head>
  <body>
  <h1 id="conteudo">Cadastro de Produtos e planos </h1>

<form action="produto-cadastro.php" method="post">
<label for="prod">Informe o nome do novo Produto ou plano a ser incluído </label>
<input type="text" name="produto" id="prod" required autocomplete autofocus/>
<label for="custo">Informe o valor do custo </label>
<input type="number" name="custo" id="custo" required />
<label for="preco">Informe o valor de venda </label>
<input type="number" name="preco" id="preco" required />
<button type="submit" id="b" class="btn btn-primary">Cadastrar </button>
</form>
  <a href="gerente.php">Voltar para Home </a>
  </body>
</html>