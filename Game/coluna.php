<?php
require_once("funcaoColuna.php");
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pontuações</title>
        <style media="screen">
            input[type=number]::-webkit-inner-spin-button {
                -webkit-appearance: none;
            }
            input[type=number] {
                -moz-appearance: textfield;
                appearance: textfield;
            }
            html, body {
                font-family: 'Segoe UI', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Pontuação dos Jogadores</h1>
        <form action="resultado.php" method="post">
            <?php escreveInput($_SESSION["jogadores"]); ?>
            <br><input type="submit" value="Enviar">
        </form>
    </body>
</html>