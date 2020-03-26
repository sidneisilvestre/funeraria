<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Cadastro de Produtos e Serviços</title>
  </head>
  <body>
  <h1 id="conteudo">Cadastro de Produtos e Serviços </h1>
<p>Informe abaixo os dados do produto ou serviço que será cadastrado. </p>
<form action="http://funeraria.offline/produtos" method="post">
@csrf
<div class="form-group">
<label for="nome">Informe o nome do Produto ou serviço</label>
<input type="text" name="nome" id="nome" required autofocus/>
</div>
<div class="form-group">
<label for="custo">Informe o valor de custo </label>
<input type="number" name="custo" id="custo" required />
</div>
<div class="form-group">
<label for="preco">Informe o valor de venda </label>
<input type="number" name="preco" id="preco" required />
</div>
<button type="submit" id="b" class="btn btn-primary">Cadastrar Sala</button>
</form>
  
  </body>
</html>