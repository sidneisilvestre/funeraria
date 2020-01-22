<?php 
/*comando para logar no banco */
include_once "conexao.php";
/*Método que irá chamar as querys */
$cx->query("insert into produtos (nome,preco_venda) values('$_POST[produto]','$_POST[preco]')");
/*função para mandar uma metatag para o navegador */
header("Location: cadastro_produtos.php");
