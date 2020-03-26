<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Lista de Atendimentos </title>
  </head>
  <body>
  <a href="salas/create">Cadastrar Salas</a>
  <h1 id="conteudo">Lista de Atendimentos </h1>
<ul>
@forelse($listaAtendimentos as $atendimento)
<li>{{ $atendimento->nome }}
<a role="button" href="{{ url("/atendimentos/".$atendimento->id."/edit") }}">Editar Atendimento</a>
<form action="{{ route("atendimentos.destroy",$atendimento->id) }}" method="post">
@csrf
@method("delete")
<button type="submit">Excluir Atendimento </button>
</form>
</li>
@empty
<li>Ainda não temos nenhum Atendimento cadastrado. </li>
@endforelse
</ul>

  </body>
</html>