<DOCTYPE!>
<html>
<?php
	$i=array_rand($_POST);
	$a=$_POST[$i];
?>
	<h1>O Jogador <?php echo $i ?> foi o Vencedor com <?php echo $_POST[$i] ?> pontos</h1>
</html>