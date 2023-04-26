<?php 

	$texto = "micro Computador";

	$tamanho = strlen($texto); // Tamanho da string

	echo "<br/>" . $texto . " possui ". $tamanho . " caracteres.";

	echo "<br/>" . strtoupper($texto); // converte a string para letras maiúsculas

	echo "<br/>" . strtolower($texto); // converte a string para letras minúsculas

	echo "<br/>" . ucfirst($texto); // converte para maiúsculo a primeira letra da string

	echo "<br/>" . ucwords($texto); // converte para maiúsculo a primeira letra de cada palavra da string

	// 3 caracteres a partir da posição 13

	echo "<br/>" . substr($texto, 13, 3); // retorna parte de uma string

	echo "<br/>" . str_replace("micro", "Nano", $texto); // substitui um termo pelo outro levando em consideração letras maísculas e minúsculas.

?>