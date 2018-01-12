<?php

  require_once ('funcaoCheck.php'); 

  if ( analise($_GET['numJog']) != 0 ){
    header ('Location: coluna.php?numJog='. $_GET['numJog']);
  }
  else{
    header ('Location: config.php?numJog='. $_GET['numJog']);
  } 

?>
