<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
    </head>
    <body>
        <?php
        session_start();
        $jog = array_rand($_POST);

        echo "<h1>O Jogador " . $jog . " foi o Vencedor com " . $_POST[$jog] . " pontos</h1>";
        ?>
    </body>
</html>