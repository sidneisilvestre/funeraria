<?php 
include_once "conexao.php";
/*Método que irá chamar as querys */
$cx->query("insert into despesas (km,alimentacao,pedagio,combustivel,mecanica,obs,id_evento) values($_POST[km],$_POST[ali],$_POST[ped],$_POST[combu],$_POST[mec],'$_POST[obs]',$_POST[ev])");
/*função para mandar uma metatag para o navegador */
header("Location: atendimentos_exibir.php");
