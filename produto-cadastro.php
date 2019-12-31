<?php 
/*comando para logar no banco */
$cx = new mysqli ("localhost","root","","funeraria");
/*Método que irá chamar as querys */
$cx->query("insert into produtos (nome) values('$_POST[produto]')");
/*função para mandar uma metatag para o navegador */
header("Location: produtos.php");