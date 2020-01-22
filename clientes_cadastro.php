<?php 
include_once "conexao.php";
/*Método que irá chamar as querys */
$cx->query("insert into clientes (nome,cpf,telefone1,telefone2,email) values('$_POST[nome]','$_POST[cpf]','$_POST[tel1]','$_POST[tel2]','$_POST[email]')");
/*função para mandar uma metatag para o navegador */
header("Location: cadastro_eventos.php");
