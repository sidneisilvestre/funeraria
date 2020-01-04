<!DOCTYPE html>
<html lang="pt-br">
	  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Funerária Só Falta Você</title>
  </head>
  <body>
      <form class="form-signin" method="POST" action="valida.php">
<div class="form-group">
<label for="n1">Informe seu nome </label>
<input name="n1" id="n1" type="text" required autofocus class="form-control" />
</div>
<div class="form-group">

<label for="op">Selecione seu perfil </label>
<select name="op" id="op">
<option value="">Selecione </option>
<option value="1">Gerente </option>
<option value="2">Agente </option>
<option value="3">Motorista </option>
</select>
<label for="pas">Informe sua senha </label>
<input type="password" name="pas" id="pas" required onblur="login()" />
<h2 id="s"> <h2>
<a href="gerente.php" role="button">Fazer login </a>
</form>
<a href="esqueciasenha.html">Esqueci a Senha </a>
    <script src="js/jquery-3.4.1.js" ></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
        <script src="js/functions.js" ></script>
        <script>
        </script>
</body>
</html>