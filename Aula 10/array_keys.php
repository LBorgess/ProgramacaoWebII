<?php 

	$nomes = array("MA" => "Maria", "ZE" => "Jose", "PE" => "Pedro", "AN" => "Ana");

	$chaves = array_keys($nomes);

	foreach($chaves as $item){
		echo "<br/>".$item;
	}
	echo "<br/>";

	// Função para exibir dados de um vertor

	print_r($chaves);

?>