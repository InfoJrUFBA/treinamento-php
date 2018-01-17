<?php require_once ('funcaoColuna.php'); ?>
<DOCTYPE!>
<html>
	<body>
		<form action="resultado.php" method="POST">
			<?php  
				$pam = escreveInput($_GET['jogadores']);
			 	echo $pam ?>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>