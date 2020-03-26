<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Lista de Eventos </title>
  </head>
  <body>
  <a href="eventos/create">Cadastrar Eventos</a>
  <h1 id="conteudo">Lista de Eventos </h1>
<ul>
@forelse($listaEventos as $evento)
<li>{{ $evento->nome }}
<a role="button" href="{{ url("/evesntos/".$evento->id."/edit") }}">Editar Cliente</a>
<form action="{{ route("eventos.destroy",$evento->id) }}" method="post">
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