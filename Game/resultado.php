<!DOCTYPE html>
<html lang="pt-br">   
	
	<meta charset="UTF-8">
	<head>

	<title> Resultado</title> 

	</head>

	<body>    
	
	<?php

	session_start();
   $ganhador=rand(1,count($_POST));
   echo "<h1>O Jogador " .$ganhador. " foi o vencedor com " . $_POST[$ganhador] . "pontos</h1>";
    
    
	?>
       
  	
	</body>

</html> 
