<?php
 require_once ('funcaoCheck.php');
 $resposta = analise($_GET['jogadores']);
 if($resposta == true){
 	header('location: coluna.php?jogadores='.$_GET["jogadores"]);
 } 
 else{
    header('location: config.php?jogadores='.$_GET["jogadores"]);

 }	

