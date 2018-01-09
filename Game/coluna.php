<?php 
	require_once 'funcaoColuna.php';
	
	$players = $_GET['players'];
		
	echo "<form action=\"resultado.php\" method=\"POST\" id=\formResultado\">";
	escreveInput($players);
	echo "<br /><input type=\"submit\" value=\"Enviar\">";
	echo "</form>";

?>
