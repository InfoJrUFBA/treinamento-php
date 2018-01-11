
<?php
require_once ("funcaoColuna.php");
session_start();
?>
<form method="post" action="/Game/resultado.php">
    <?php
    escreveInput($_SESSION['jogadores']);
    ?>

    <input type="submit" value="Enviar">
</form>
