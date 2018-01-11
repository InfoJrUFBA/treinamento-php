<?php

require_once('coluna.php');
$numero = array_rand($_POST);
for ($i=1; $i<$_SESSION['jogadores']; $i++){
    if($numero == $i){
?>
        <h1>O Jogador <?php echo $numero; ?> foi o Vencedor com <?php echo $_POST[$numero]; ?> pontos</h1>
        <?php
    }
}
?>
