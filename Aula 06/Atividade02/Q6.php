<?php 
	
	define("PI", 3.14159);
	$raio = 5;
	$altura = 10;
	$volume = PI * ($raio * $raio) * $altura;

	$fmt = sprintf("O volume da lata é de %.2f.", $volume);
	echo $fmt;

?>