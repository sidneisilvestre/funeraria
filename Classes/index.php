<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/style.css" />
<title>Modelo base PHP</title>
</head>
<body>
	<h1>Banca do tio Zézinho </h1>
<?php
include_once 'Cesto.php';

$cesto = new Cesto();
$manga = new Fruta('Manga', 2.00);
$uva = new Fruta('Uva', 5.30);
$maca = new Fruta('Maçã', 3.25);

$cesto->setFruta($manga, 10);
$cesto->setFruta($uva, 10);
$cesto->setFruta($maca, 15);

echo "<p>
<strong>Preço total:</strong> " . $cesto->getPrecoTotal(true) . "<br/>
<strong>Unidades:</strong> " . $cesto->getQuantidadeDeFrutas() . "<br/>
<strong>Preço pagar:</strong> " . $cesto->getPrecoPagar() . "<br/>
<strong>O valor do desconto foi:</strong> " . $cesto->getDesconto() . "<br/>
</p>";

echo '<ul class="list-unstyled" aria-label="Lista de frutas">';
foreach ($cesto->getFrutas() as $fruta) {
    echo "<li>" . $fruta['fruta']->getNome() . " - " . $fruta['qtd'] . "</li>";
}
echo '</ul>';
?>   
<!-- arquivos js importantes -->
	<script src="../js/jquery-3.4.1.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/functions.js"></script>
</body>
</html>