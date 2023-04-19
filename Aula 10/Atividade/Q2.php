<?php 
/*
2.Entre com 10 números e armazene em um vetor. 
Ao final o programa deverá mostrar: 
- quantos  negativos  foram  digitados; -quantos  positivosforam  digitados; -quantos pares e ímpares.
*/

	$valores = array(10, 10, 10, 10, -5, -5, -5, -5, 6, 0);

	$positivos = 0; # 6
	$negativos = 0; # 4
	$pares = 0;     # 5 / 6
	$impares = 0;  # 4


	for ($i = 0; $i < 10; $i++) { 
		if($valores[$i] >= 0){
			$positivos++;
		} else {
			$negativos++;
		}

		if($valores[$i] % 2 == 0){
			$pares++;
		} else{
			$impares++;
		}
	}

	echo("<br/> POSITIVOS: ".$positivos);
	echo("<br/> NEGATIVOS: ".$negativos);
	echo("<br/> PARES....: ".$pares);
	echo("<br/> IMPARES..: ".$impares);


?>