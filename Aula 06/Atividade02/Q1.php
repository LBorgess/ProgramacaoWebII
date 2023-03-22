<?php 

	$produto = 10.00; 
	$novoValor = 0;
	$codigo = 8;

	// Aumento

	switch($codigo){
		case 1:
			$novoValor = $produto * 1.10;
			break;

		case 3:
			$novoValor = $produto * 1.25;
			break;

		case 4:
			$novoValor = $produto * 1.30;
			break;

		case 8:
			$novoValor = $produto * 1.50;
			break;
	}

	$txt = sprintf("Novo valor: R$ %.2f<br/>", $novoValor);
	echo $txt;

?>