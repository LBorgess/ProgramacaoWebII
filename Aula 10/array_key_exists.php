<?php 

	$nomes = array("MA" => "Maria", "ZE" => "Jose", "PE" => "Pedro");

	if(array_key_exists("ZE", $nomes)){
		echo "<br/> Nome encontrado no vetor, através da chave.";
	}

?>