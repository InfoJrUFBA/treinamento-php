<?php

  function escreveInput($numJog){
    for($i = 1; $i<=$numJog; $i++){
?>
      <label for="jogador<?php echo $i ?>">Jogador <?php echo $i ?></label>
      <input type="text" name="<?php echo $i ?>" id="jogador<?php echo $i ?>"><br>
<?php } } ?>
