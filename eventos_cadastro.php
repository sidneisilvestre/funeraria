<?php 
/*comando para logar/post no banco */
$cx = new mysqli ("localhost","root","","funeraria");
/*Método que irá chamar as querys */
$cx->query("insert into eventos (nome,cpf,telefone1,telefone2,email,produto_id) values('$_POST[nome]','$_POST[cpf]','$_POST[tel1]','$_POST[tel2]','$_POST[email]','$_POST[produ[$produto[id]]]')");
$produ[id];
$tecs = $_POST['produ[$produto[id]]'];
$tecsAsString = implode(", ", $tecs);

/*função para mandar uma metatag para o navegador */
header("Location: eventos_exibir.php");
