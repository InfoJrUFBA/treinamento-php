<form method="get" action="/Game/check.php">
    <p>Insira a quantidade de jogadores: <br>
    <input type="number" name="jogadores" min="1" max="50" value=<?php echo $_GET['jogadores']; ?>> <br>
    <input type="submit" name="Enviar">
</form>
