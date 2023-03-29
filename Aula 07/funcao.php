<?php 

	function somaValor($num1, $num2){
		return $num1 + $num2;
	}

	function imprimir($resp){
		echo "A soma é " . $resp;
	}

	// imprimir(somaValor(2,2)); # modo "hard"
	$resultado = somaValor(2,2);
	imprimir($resultado);

?>