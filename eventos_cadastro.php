<?php 
/*comando para logar/post no banco */
$cx = new mysqli ("localhost","root","","funeraria");
$produ = $_POST['produ[$produto[id]]'];
$produ_implode = implode(",",$produ);
/*Método que irá chamar as querys */
$cx->query("insert into eventos (nome_morto,data_evento,id_cliente,id_produto) values('$_POST[nomemorto]','_POST[data]','_POST[cliente_fk_corrigir]','$produ_implode ')");

/*função para mandar uma metatag para o navegador */
header("Location: eventos_exibir.php");
