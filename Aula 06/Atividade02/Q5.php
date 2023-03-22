<?php

	$vHoras = 10; $nAulas = 24;

	$salarioBruto = ($vHoras * $nAulas);

	if($salarioBruto <= 1000){
		$inss = $salarioBruto * 0.085;
	} else{
		$inss = $salarioBruto * 0.09;
	}

	$salarioBruto = $salarioBruto - $inss;

	$txt = sprintf("Salário Liquído: R$ %.2f", $salarioBruto * 30);

	echo $txt;


?>