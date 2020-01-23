<?php 
/*comando para logar/post no banco */
$cx = new mysqli ("localhost","root","","funeraria");
$produ = $_POST['produ[$produto[id]]'];
/*Método que irá chamar as querys */
$cx->query("insert into eventos (nome_morto,data_evento,id_cliente,id_produto) values('$_POST[nome_morto]','_POST[data]','_POST[id_cliente]','_POST[id_produto]'");
$id_produto = $_POST['produ'];
foreach($id_produto as $p){
//    echo$p;
}
 
/*função para mandar uma metatag para o navegador */
header("Location: eventos_exibir.php");
