<?php
	function escreveInput($quantidade){
		for($i = 1; $i <= $quantidade; $i++){
			echo "<label for=\"jogador$i\">Jogador $i: </label>";
    	echo "<input type=\"text\" name=\"$i\" id=\"jogador$i\"><br>";	
		}
	}
?>
