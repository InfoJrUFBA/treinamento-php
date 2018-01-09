<?php
session_start();
$_SESSION['jogadores'] = $_GET['jogadores'];
    require_once ("funcaoCheck.php");
    if(analise($_SESSION['jogadores'])){
        header('Location: /Game/coluna.php');
        exit;
    }else{
        header('Location: /Game/config.php?jogadores='.$jogadores);
        exit;
    }
?>
