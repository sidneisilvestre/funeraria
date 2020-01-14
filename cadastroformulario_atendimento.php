<?php
/*comando para logar no banco */
$cx = new mysqli ("localhost","root","","funeraria");

/*ligando o formulário cadastro_atendimentos*/
$cx->query("insert into cadastro_atendimentos (km,li,desp,out);
header("Location: cadastro_atendimentos.php");
/>