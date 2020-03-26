<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Lista de Clientes </title>
  </head>
  <body>
  <a href="clientes/create">Cadastrar Clientes</a>
  <h1 id="conteudo">Lista de Clientes </h1>
<ul>
@forelse($listaClientes as $cliente)
<li>{{ $cliente->nome }}
<a role="button" href="{{ url("/clientes/".$cliente->id."/edit") }}">Editar Cliente</a>
<form action="{{ route("clientes.destroy",$cliente->id) }}" method="post">
@csrf
@method("delete")
<button type="submit">Excluir Cliente </button>
</form>
</li>
@empty
<li>Ainda não temos nenhum Cliente cadastrado. </li>
@endforelse
</ul>

  </body>
</html>