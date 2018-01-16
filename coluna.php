<?php

/*

  1 - Importe o arquivo "funcaoColuna.php" utilizando o require_once.

  2 - Crie um Formulario que passará os dados via POST para resultado.php

  3 - Dentro do formulário, chame a função "escreveInput" passando como parâmetro o número de jogadores que chegou nessa
  página via GET.

  4 - Antes de finalizar o formulário, crie um botão de Submit, porque a nossa função acima só cria os Inputs.
  */
   require_once('funcaoColuna.php');

  ?>
<!DOCTYPE html>
 <html>
 <head>
   <title>PHP Game</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
  <form action="resultado.php" method="POST" id="for">
  <?php escreveInput($_GET['qualquerCoisa']); ?>  </br>
  <button id="send" type="submit">Enviar</button>
  </form>
   </body>
 </html>
