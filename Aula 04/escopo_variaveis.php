<?php 

	$nome = "José";       // variavel global

	function exibir(){
		$nome = "Maria";  // variavel local na função

		echo ("O valor dentro da variável da função " . $nome);
	}

	exibir();

	echo ("</br> Valor da variável fora da função " . $nome);
	
?>