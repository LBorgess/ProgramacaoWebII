<?php 

	$variavel = "Ana";

	$nomes = array("MA" => "Maria", "ZE" => "Jose", "PE" => "Pedro");

	if(is_array($variavel)){
		echo "<br/> Variavel é um array";
	} else {
		echo "<br/> Variavel não é um array";
	}

	if(is_array($nomes)){
		echo "<br/> Variavel é um array";
	} else {
		echo "<br/> Variavel não é um array";
	}

?>