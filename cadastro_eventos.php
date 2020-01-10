<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title> Cadastro de eventos </title>
  </head>
  <body>
  <h1 id="conteudo">Cadastro de eventos em construção </h1>
<p>Informe abaixo os dados do cliente que será cadastrado. </p>
<form action="eventos_cadastro.php" method="post">


<label for="mat">Selecione um Cliente cadastrado ou adicione um novo</label>
<select name="mat" id="mat" autofocus/>
<option value="">Novo Cliente</option> 
<?php 
$cx = new mysqli ("localhost","root","","funeraria");
$eventos= $cx->query ("select * from eventos order by nome");
/*busca os dados no banco */
while ($evento = $eventos->fetch_assoc()){
echo "<option>$evento[nome]</option>";
}
?>
</select>

<label for="nome">Informe o nome do Cliente</label>
<input type="text" name="nome" id="nome" required autocomplete="full-name" autofocus/>
<label for="cpf">Informe o CPF do Cliente</label>
<input type="tel" name="cpf" id="cpf" required />

<label for="tel1">Informe o telefone do Cliente</label>
<input type="tel" name="tel1" id="tel1" required autocomplete="tel" />

<label for="tel2">Informe outro telefone do Cliente</label>
<input type="tel" name="tel2" id="tel2" required autocomplete="tel" />

<label for="email">Informe um e-mail válido do Cliente</label>
<input type="email" name="email" id="email" required autocomplete="tel" />

<fieldset>
<legend>Selecione os produtos que o cliente está solicitando</legend>

<?php 
$cx = new mysqli ("localhost","root","","funeraria");
$produtos= $cx->query ("select * from produtos order by nome");
/*busca os dados no banco */
while ($produto = $produtos->fetch_assoc()){
echo "<label for=''>$produto[nome] - $produto[preco] </label>
<input type='checkbox' name='produ' id='produ' value='produ' />
";
}
?>
</fieldset>

<button type="submit" id="b" class="btn btn-primary">Cadastrar</button>
</form>
  
  </body>
</html>