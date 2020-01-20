<?php 
/*comando para logar/post no banco */
$cx = new mysqli ("localhost","root","","funeraria");
$produ = $_POST['produ[$produto[id]]'];
$produ_implode = implode(",",$produ);
/*Método que irá chamar as querys */
$cx->query("insert into eventos (nome,cpf,telefone1,telefone2,email,produto_id) values('$_POST[nome]','$_POST[cpf]','$_POST[tel1]','$_POST[tel2]','$_POST[email]','$produ_implode ')");

/*função para mandar uma metatag para o navegador */
header("Location: eventos_exibir.php");
