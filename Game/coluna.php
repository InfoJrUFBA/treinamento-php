<?php
    session_start();
    require_once("funcaoColuna.php");
    ?>
    <form class="coluna" action="resultado.php" method="post">
        <?php
            escreverInput($_GET['jogadores']);
         ?>
         <input type="Submit" name="Submit" value="ganhador">
    </form>
<?php
/*

  1 - Importe o arquivo "funcaoColuna.php" utilizando o require_once.

  2 - Crie um Formulario que passará os dados via POST para resultado.php

  3 - Dentro do formulário, chame a função "escreveInput" passando como parâmetro o número de jogadores que chegou nessa
  página via GET.

  4 - Antes de finalizar o formulário, crie um botão de Submit, porque a nossa função acima só cria os Inputs.
*/
?>
