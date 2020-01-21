<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title> Cadastro de Clientes </title>
  </head>
  <body>
  <h1 id="conteudo">Cadastro de Clientes </h1>
<p>Utilize  o formulário abaixo para cadastrar um cliente  para  contratação de um evento funerário. </p>
<form action="clientes_cadastro.php" method="post">
<label for="nome">Informe o nome do Cliente</label>
<input type="text" name="nome" id="nome" required autocomplete="name" autofocus/>
<label for="cpf">Informe o CPF do Cliente</label>
<input type="tel" name="cpf" id="cpf" required />

<label for="tel1">Informe o telefone do Cliente</label>
<input type="tel" name="tel1" id="tel1" required autocomplete="tel" />

<label for="tel2">Informe outro telefone do Cliente</label>
<input type="tel" name="tel2" id="tel2" required autocomplete="tel" />

<label for="email">Informe um e-mail válido do Cliente</label>
<input type="email" name="email" id="email" required/>

<button type="submit" id="b" class="btn btn-primary">Cadastrar</button>
</form>
  
  </body>
</html>