<?php 

	# Funções

	function somar($x, $y){
		echo ("<br/>SOMA: $x + $y = ". ($x + $y));
	}

	function subtrai($x, $y){
		echo ("<br/>SUBTRAÇÃO: $x - $y = ". ($x - $y));
	}

	function multiplica($x, $y){
		echo ("<br/>MULTIPLICAÇÃO: $x x $y = ". ($x * $y));
	}

	function dividir($x, $y){
		if($y == 0){
			echo "<br/> IMPOSSÍVEL CALCULAR!";
		} else{
			$fmt = sprintf("\nDIVISÃO: %.2f / %.2f = %.2f", $x, $y, ($x / $y));
			echo $fmt;
		}
	}


	# ===

	# Variáveis

	$a = 10;
	$b = 2.6;
	$opcao = '+';

	# Operações;

	switch ($opcao) {
		case '+':
			somar($a, $b);			
			break;
		case '-':
			echo(subtrai($a, $b));
			break;
		case '*':
			echo(multiplica($a, $b));
			break;
		case '/':
			echo(dividir($a, $b));
			break;		
		default:
			echo "SELEÇÃO INVÁLIDA.";
			break;
	}

?>