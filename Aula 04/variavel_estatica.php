<?php 

	function exibir(){
		STATIC $ano;   // definindo variável estática
		$ano++;
		echo "<br/>" . $ano;
	}

	echo exibir();
	echo exibir();
	echo exibir();

?>