<?php 
	require_once 'funcaoCheck.php';

	$players = $_GET['players'];
	
	if (analise($players)){
		header("Location: coluna.php?players=$players");
	} else{
		header("Location: config.php?players=$players");
	}

?>
