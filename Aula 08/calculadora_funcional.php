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
			echo "<br/> <b>IMPOSSÍVEL CALCULAR!</b>";
		} else{
			return $x / $y;
		}
	}

	function imprimi($opcao, $operacao){
		$fmt = sprintf("OPERAÇÃO: %s <br/>RESULTADO: %d ", $opcao, $operacao);
		echo $fmt;
	}

	function menu(){
		echo "[1] - ADIÇÃO<br/>";
		echo "[2] - SUBTRAÇÃO<br/>";
		echo "[3] - MULTIPLICAÇÃO<br/>";
		echo "[4] - DIVISÃO<br/>";
		echo "<hr/>";
	}

	# Variáveis

	$a = 22;
	$b = 20;
	$op = '+';

	# Operações;

	menu();

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