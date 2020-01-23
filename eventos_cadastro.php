<?php 
include_once "conexao.php";
/*Método que irá chamar as querys */
$cx->query("insert into eventos (id_cliente,nome_morto,data_evento,id_produto) values('_POST[id_cliente]','$_POST[nome_morto]','_POST[data_evento]','_POST[id_produto]'");

/*função para mandar uma metatag para o navegador */
header("Location: eventos_exibir.php");
