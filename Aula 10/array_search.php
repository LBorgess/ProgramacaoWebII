<?php 

	$nomes = array("MA" => "Maria", "ZE" => "Jose", "PE" => "Pedro", "AN" => "Ana");
	$chave = array_search("Ana", $nomes);

	echo "<br/> Chave de busca realizada: ".$chave;	

?>