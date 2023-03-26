<?php 

	$tempo = 4;
	$velocidade = 8;

	$distancia = $tempo * $velocidade;
	$litros = $distancia / 12;

	$fmt = sprintf("Gastou-se %.2f L de combustível na viagem.", $litros);
	echo $fmt;

?>