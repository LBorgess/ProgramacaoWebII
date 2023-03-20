<?php 
	
	define("total", 5);
	$masc = 0;
	$fem  = 0;
	$opcao;

	for($i = 1; $i <= total; $i++){
		echo "Digite uma opção: ";
		echo "<br/>[ 1 ] - Masculino";
		echo "<br/>[ 2 ] - Feminino";
		echo "<br/><br/>";
		$opcao = 2;
		switch($opcao){
			case 1:
				$masc++;
				break;
			case 2:
				$fem++;
				break;
		}
	}

	echo "<br/>-----------------";
	echo "<br/>Totais";
	echo "<br/>Masculino: " . $masc;
	echo "<br/>Feminino.: " . $fem;
	echo "<br/>-----------------";


?>