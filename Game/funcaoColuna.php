<DOCTYPE!>
<html>
	<?php
		function escreveInput($valor) {
			
			for($x = 1; $x <= $valor; $x++){ 
			?>
			
				<label>Jogador <?php echo $x; ?></label>
				<input type="text" name=<?php echo $x ?> id="jogadorX"><br>


			<?php 
			}
	
		}
	?>
</html>