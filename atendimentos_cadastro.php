<?php 
/*comando para logar/post no banco */
$cx = new mysqli ("localhost","root","","funeraria");
/*Método que irá chamar as querys */
$cx->query("insert into despesas (nome,km,despesa,obs,evento_id) values('$_POST[ev]','$_POST[km]','$_POST[despesa]','$_POST[obs]')");
/*função para mandar uma metatag para o navegador */
header("Location: cadastro_atendimentos.php");
