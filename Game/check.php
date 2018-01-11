<?php
require_once('funcaoCheck.php');
session_start();
$_SESSION['jogadores'] = $_GET['jogadores'];

if (analise($_SESSION['jogadores'])) {
    header('Location: /Game/coluna.php');
    exit;
} else {
    header('Location: /Game/config.php?jogadores=' . $_GET['jogadores']);
    exit;
}
?>