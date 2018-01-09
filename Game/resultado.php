<?php
	$ganhador = rand(1, count($_POST));
	echo "<h1>O Jogador $ganhador foi o vencedor com $_POST[$ganhador] pontos.</h1><br />";
?>
