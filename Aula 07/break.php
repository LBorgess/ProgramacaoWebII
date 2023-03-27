<?php 
	
	/**
	 * Permite finalizar a execução de um bloco.
	 * Pode-se utilizar em blocos de repetição, switch etc
	 */

	$x = 0;
	while($x < 100){
		echo "<br/>" . $x;
		if($x == 10)
			break;
			$x++;
		
	}

?>