<?php
-/*

  1 - Importe o arquivo "funcaoColuna.php" utilizando o require_once.

  2 - Crie um Formulario que passará os dados via POST para resultado.php

  3 - Dentro do formulário, chame a função "escreveInput" passando como parâmetro o número de jogadores que chegou nessa
  página via GET.

  4 - Antes de finalizar o formulário, crie um botão de Submit, porque a nossa função acima só cria os Inputs.
 */
require_once('funcaoColuna.php');
session_start();
?>

<?php escreveInput($_GET['jogadores'] id=formResultado); ?>
<form action ="resultado.php" method="POST"> 
<input type="submit"  value=" Enviar"  >

 </form>

