<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Configuração</title>
        <style media="screen">
            input[type=number]::-webkit-inner-spin-button {
                -webkit-appearance: none;
            }
            input[type=number] {
                -moz-appearance: textfield;
                appearance: textfield;
            }
        </style>
    </head>
    <body>
        <h1>The Game</h1> <!-- Perdi! -->
        <form action="/Game/check.php" method="get">
            <label for="jogadores">Número de Jogadores:</label><br>
            <input type="number" name="jogadores" min="0" value="<?php echo $_GET['jogadores'] ?>">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>