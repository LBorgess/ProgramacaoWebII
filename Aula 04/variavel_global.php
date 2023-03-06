<?php 

	$ano = 2023;

	function exibir(){
		GLOBAL $ano;   // definição de variável global
		$ano++;
		return $ano;
	}

	echo "<br /> Ano " . $ano;
	echo "<br /> Ano " . exibir();
	echo "<br /> Ano " . exibir();
	echo "<br /> Ano " . $ano;

?>