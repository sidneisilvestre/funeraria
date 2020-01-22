<?php 
include_once "conexao.php";
/*Método que irá chamar as querys */
$cx->query("insert into despesas (nome,km,despesa,obs,evento_id) values('$_POST[ev]','$_POST[km]','$_POST[despesa]','$_POST[obs]')");
/*função para mandar uma metatag para o navegador */
header("Location: cadastro_atendimentos.php");
