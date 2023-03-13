<?php 

	# $numero = 49;   // NDA
	# $numero = 30;   // 10 
	# $numero = 25;   // 5
	# $numero = 12;   // 2

	if($numero % 10 == 0){
		echo "O $numero é divisível por 10.";
	} elseif ($numero % 5 == 0){
		echo "O $numero é divisível por 5.";
	} elseif ($numero % 2 == 0) {
		echo "O $numero é divisível por 2.";
	} else{
		echo "O $numero não é divisível por 10, 5 ou 2.";
	}	

?>