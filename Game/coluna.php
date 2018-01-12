
<?php
  
  require_once('funcaoColuna.php');

?>
  <form action= "resultado.php" method= "POST">
 <?php   escreveInput($_GET['numJog']); ?>
    <input type= "submit" value= "Submit">
  </form>

<?php
