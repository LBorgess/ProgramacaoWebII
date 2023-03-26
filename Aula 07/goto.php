<?php 

	/**
	 * Permite pular para uma localização específica.
	 */

	for($i = 1; $i < 100; $i++){
		if($i == 10)
			goto desvio;

		echo "<br/>" . $i;
	}

	desvio:
	echo "<br/> Pronto, aqui está o desvio.";

?>