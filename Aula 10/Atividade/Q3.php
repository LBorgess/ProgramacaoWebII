<?php 

/*
3. Digite 10 valores numéricose armazene em um vetor. Em seguida, solicite ao usuário um número para 
multiplicar todos os elementos do vetor. O programa deverá exibir o resultado  da  multiplicação  
do  número  dado  pelo  usuário  em  todos  os  elementos armazenados.
*/


	$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

	$fator = 2;

	$multiplicados = array();

	for ($i = 0; $i < 10; $i++) { 
		$multiplicados[$i] = $numeros[$i] * $fator;
	}

	for ($i = 0; $i < 10; $i++) { 
		echo "<br/> " . $multiplicados[$i]; 
	}

?>
