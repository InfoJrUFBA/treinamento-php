<?php
function escreveInput($var) {
  for ($i=1; $i<=$var; $i++) {
?>
    <label for="jogador<?php echo $i;?>">Jogador <?php echo $i;?>:</label>
    <input type="number" name="<?php echo $i;?>" id="jogador<?php echo $i;?>"><br>
<?php
  }
}
?>