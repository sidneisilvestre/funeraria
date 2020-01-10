<?php 
/*comando para logar/post no banco */
$cx = new mysqli ("localhost","root","","funeraria");
/*Método que irá chamar as querys */
$cx->query("insert into eventos (nome) values('$_POST[evento]')");
/*função para mandar uma metatag para o navegador */
header("Location: eventos_exibir.php");
