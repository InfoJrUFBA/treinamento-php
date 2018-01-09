<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Game PHP</title>
		<meta name="description" content="">
		<meta name="author" content="luanlemos">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
	</head>
	<body>
		<div>
			<header>
				<h1>InfoJrUFBA - Treinamento PHP</h1>
			</header>
			<nav>
				<p></p>
			</nav>
			<div>
				<form action="check.php" method="get" id="formPlayersNumber">
				  <label for="players">Numero de Jogadores:</label>
				  <input type="text" name="players" id="players" value="<?php echo $_GET['players']; ?>"><br />
				  <input type="submit" value="Enviar">
				</form>
			</div>
			<footer>
				<p>
					CopyLeft: lemosluan@infojr.com.br
				</p>
			</footer>
		</div>
	</body>
</html>
