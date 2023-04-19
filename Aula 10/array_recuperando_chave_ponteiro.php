<?php 
	
	$nomes = array("MA" => "Maria", "ZE" => "Jose", "PE" => "Pedro", "AN" => "Ana");

	while($chave = key($nomes)){
		echo "<br/>".$chave;

		next($nomes);
	}

?>