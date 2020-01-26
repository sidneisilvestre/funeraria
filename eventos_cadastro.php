<?php 
include_once "conexao.php";
/*Método que irá chamar as querys */
$query="insert into eventos (nome_morto,data_evento,id_cliente,id_produto,status) values ('$_POST[nome_morto]','$_POST[data_evento]',$_POST[id_cliente],$_POST[id_produto],'$_POST[status]')";
if($cx->query($query)){
	/*função para mandar uma metatag para o navegador */
header("Location: eventos_exibir.php");
} else {
	echo "$query";
}