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

var_dump($_POST);

echo "<h1>O Jogador " . $jog . " foi o Vencedor com " . $_POST[$pts] . " pontos</h1>";
?>