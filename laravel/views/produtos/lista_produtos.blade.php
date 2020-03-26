<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Lista de Produtos </title>
  </head>
  <body>
  <a href="produtos/create">Cadastrar Produtos</a>
  <h1 id="conteudo">Lista de Produtos </h1>
<ul>
@forelse($listaProdutos as $produto)
<li>{{ $produto->nome }}
<a role="button" href="{{ url("/produtos/".$produto->id."/edit") }}">Editar Produto</a>
<form action="{{ route("produtos.destroy",$produto->id) }}" method="post">
@csrf
@method("delete")
<button type="submit">Excluir Produto </button>
</form>
</li>
@empty
<li>Ainda não temos nenhum Produto cadastrado. </li>
@endforelse
</ul>

  </body>
</html>