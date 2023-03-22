<?php
	
	// define("MES", 30);
	$qtdHoras    = 8;
	$salarioHora = 50;
	$dependentes = 4;

	$salarioBruto = ($qtdHoras * $salarioHora) + (50 * $dependentes);

	echo "BRUTO R$ " . $salarioBruto;

	# Descontos INSS

	if($salarioBruto <= 1000){
		$inss = $salarioBruto * 0.085;
	} else{
		$inss = $salarioBruto * 0.09;
	}

	$salarioBruto = ($salarioBruto - $inss);

	echo "<br/>POS-INSS: R$ " . $salarioBruto;

	# IR

	if($salarioBruto <= 500){
		$ir = 0;
	} else if($salarioBruto > 500 && $salarioBruto <= 1000) {
		$ir = $salarioBruto * 0.05;
	} else{
		$ir = $salarioBruto * 0.07;
	}

	$salarioBruto = ($salarioBruto - $ir);

	echo "<br/> POS-IR: R$ " . $salarioBruto;

	$salarioLiquido = $salarioBruto;

	echo "<br/> LIQUIDO: R$ " . $salarioLiquido;

?>