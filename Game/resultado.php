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
        $pts = array_rand($_POST);
        $jog = 0;

        for($i=1; $i<=$_SESSION["jogadores"]; $i++) {
            if ($_POST[$i] == $_POST[$pts]) {
                $jog = $i;
                break;
            }
        }

        echo "<h1>O Jogador " . $jog . " foi o Vencedor com " . $_POST[$pts] . " pontos</h1>";
        ?>
    </body>
</html>