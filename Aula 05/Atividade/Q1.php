<?php 
	
	$x = 10;
	$y = 10;

	$soma = ($x + $y);

	if($soma > 20){
		$soma += 8;
		$txt = sprintf("Resultado: %d", $soma);
		echo $txt;
	}else{
		$soma -= 5;
		$txt = sprintf("Resultado: %d", $soma);
		echo $txt;
	}

?>