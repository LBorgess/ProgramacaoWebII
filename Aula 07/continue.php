<?php 

	/**
	 * Permite que a execução da repetição do loop atual termine e inicie
	 * na próxima repetição, ou seja, o loop não é encerrado, apenas
	 * encerramos a iteração, volta do loop, atual e iniciamos a próxima.
	 **/

	for($x = 1; $x <= 100; $x++){
		if($x % 2 == 0){
			continue;
		}
		echo "<br/>" . $x;
	}

?>