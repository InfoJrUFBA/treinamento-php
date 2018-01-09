<?php
/*
1 - Crie um Formulário que Envie Dados para check.php

2 - O dado passado deve ser: "jogadores"

Dica:

  Lembrem-se que o que define a chave da variavél que será passada para a página é o atributo "name" no input. Observe:

  <input type="text" name="nomeDaVariavel">

3 - A variavél "jogadores", representa o Numero de Jogadores, logo a <label> desse <input> deve conter essa informação.

4 - Os inputs devem utilizar o atributo "value", sendo igual ao valor da variavel $_GET['nomeDaVariavel']. Isso será bastante
útil se a página check.php fazer um redicrionamento de volta para config.php.

  Dica: Veja como vocês podem utilizar o atributo "value" da tag <input>:
    Nome: <input type="text" name="fname" value="John">

  Mas se o Nome estivesse em alguma variavél?
    Nome: <input type="text" name="name" value=<?php echo $minhaVariavel; ?> >

  Mais detalhes em: https://www.w3schools.com/tags/att_input_value.asp

  */
    ?>
 
	<form>
		<label for="player">Número de Jogadores</label>
		<input type="text" name="jogadores" id="player" value=<?php echo $jogadores;?>>
	</form>


