
<?php
    function escreveInput($valor){
        $a = 1;
        while ($a <= $valor) {
            ?>
            <label for="jogador<?php echo $a; ?> ">Jogador <?= $a; ?> </label><br>
            <p>
            <input type="text" placeholder="Insira uma pontuação" name=<?= $a ;?> id="jogador<?= $a ;?>"><br>
            <?php
            $a++;
        }
    }
