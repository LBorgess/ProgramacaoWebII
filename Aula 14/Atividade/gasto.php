<?php 

	$tempo = $_POST['tempo'];
	$velocidade = $_POST['velocidade'];

	if ($tempo == null || $velocidade == null) {

		echo "Valor inserir os dados";

	} else {

		$distancia = ($tempo * $velocidade);
		$litros = ($distancia / 12);

		$fmt = sprintf("Gastou-se %.2f L de combustível na viagem", $litros);

		echo $fmt;

	}

?>