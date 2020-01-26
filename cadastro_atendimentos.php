<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Cadastro dos atendimentos</title>
  </head>
  <body>
  <h1 id="conteudo">Cadastro de atendimentos</h1>
  <h2>Cadastre aqui as despesas geradas pelo evento que você atendeu </h2>
<form action="atendimentos_cadastro.php" method="post">

<div class="form-group">
<label for ="ev">Selecione um Evento cadastrado para atendimento</label>
<select name="ev" id="ev" autofocus />
<?php
include_once "conexao.php";
$eventos= $cx->query ("select * from eventos order by id");
while ($evento = $eventos->fetch_assoc()){
echo "<option value='$evento[id]'>$evento[nome_morto]</option>";
}
?>
</select>
</div>
<div class="form-group">
<label for="km">Informe a Quilometragem percorrida </label>
<input type="number" name="km" id="km" class="form-control" />
</div>

<div class="form-group">
<label for="ali">Inclua o total de despesas com alimentação</label>
<input name="ali" id="ali" type="number" class="form-control" />
</div>

<div class="form-group">
<label for="ped">Inclua o total de despesas com pedágio </label>
<input name="ped" id="ped" type="number" class="form-control" />
</div>


<div class="form-group">
<label for="combu"> Inclua o total de despesas com combustível </label>
<input type="number" name="combu" id="combu" class="form-control" />
</div>

<div class="form-group">
<label for="mec"> Inclua o total de despesas com oficina mecânica </label>
<input type="number" name="mec" id="mec" class="form-control" />
</div>


<div class="form-group">
<label for="obs"> Informe os demais ítens ou serviços que foram consumidos  durante este atendimento </label>
<input type="text" name="obs" id="obs" class="form-control" />
</div>

<div class="form-group">
<label for ="ev">Selecione um Evento cadastrado para atendimento</label>
<select name="ev" id="ev" />
<?php
include_once "conexao.php";
$eventos= $cx->query ("select * from eventos order by id");
while ($evento = $eventos->fetch_assoc()){
echo "<option value='$evento[id]'>$evento[nome_morto]</option>";
}
?>
</select>
</div>

<div class="form-group">
<!-- <fieldset>
<legend>Status de conclusão do atendimento</legend>
<label for="atendido">  Atendimento realizado </label>
<input type="radio" name="status" id="atendido" value="atendido" checked />
<label for="pendente"> Pendente de atendimento </label>
<input type="radio" name="status" id="pendente" value="pendente" />
</fieldset> -->
</div>


<button type="submit" id="b" class="btn btn-primary">Finalizar Atendimento</button>
</form>

    
<!-- arquivos js importantes -->
    <script src="js/jquery-3.4.1.js" ></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
        <script src="js/functions.js" ></script>
        <script>
        
        </script>
  </body>
</html>
