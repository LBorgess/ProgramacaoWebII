<?php

	// $senha = 5000;
	$senha = 1234;
	$n1 = 2.6; $n2 = 4.9;

	$div = ($n1 / $n2);

	if($senha == 1234){
		$fmt = sprintf("Resultado = %.2f", $div);
		echo $fmt;
	} else{
		echo "Senha incorreta.";
		echo "<br/>Programa encerrado.";
	}

?>