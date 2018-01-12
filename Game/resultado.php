<?php

$vencedor = array_rand($_POST, 1);


?>
<h1>O Jogador <?php echo $vencedor ?> foi o Vencedor com <?php echo $_POST[$vencedor] ?> pontos</h1>

