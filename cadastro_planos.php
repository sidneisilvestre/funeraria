<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Conectados - Cadastro de Alunos </title>
  </head>
  <body>
  <h1 id="conteudo">Cadastro de Alunos </h1>
<p>Informe abaixo os dados do aluno que será cadastrado. </p>
<form action="curso-cadastro.php" method="post">
<label for="aluno">Informe o nome do Aluno </label>
<input type="text" name="aluno" id="aluno" required autocomplete autofocus/>
<label for="mat">Selecione em qual curso está matriculado </label>
<select name="mat" id="mat" required />
<?php 
$cx = new mysqli ("localhost","root","","escola");
$cursos= $cx->query ("select * from cursos order by nome");
/*busca os dados no banco */
while ($curso = $cursos->fetch_assoc()){
echo "<option value='$curso[id]'>$curso[nome] </option>";
}

?>
</option>
</select>
<button type="submit" id="b" class="btn btn-primary">Executar </button>
</form>
  
  </body>
</html>