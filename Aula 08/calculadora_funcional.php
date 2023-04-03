<?php 

	# Funções

	function somar($x, $y){
		return $x + $y;
	}

	function subtrai($x, $y){
		return $x - $y;
	}

	function multiplica($x, $y){
		return $x * $y;
	}

	function dividir($x, $y){
		if($y == 0){
			echo "<br/> IMPOSSÍVEL CALCULAR!";
		} else{
			return $x / $y;
		}
	}

	function imprimi($opcao, $operacao){
		$fmt = sprintf("OPÇÃO: %s <br/>RESULTADO %d ", $opcao, $operacao);
		echo $fmt;
	}

	# Variáveis

	$a = 10;
	$b = 20;
	$op = '+';

	# Operações;

	switch ($op) {
		case '+':
			imprimi($op, somar($a, $b));		
			break;
		case '-':
			imprimi(subtrai($a, $b));
			break;
		case '*':
			imprimi(multiplica($a, $b));
			break;
		case '/':
			imprimi(dividir($a, $b));
			break;		
		default:
			echo "SELEÇÃO INVÁLIDA.";
			break;
	}

?>