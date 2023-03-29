<?php 

	function dobro($numero){
		$dobra = $numero * 2;
		echo "<br/> O dobro de " . $numero . " = " . $dobra;
	}

	function dobra($numero){
		$dobra = $numero * 2;
		return $dobra;
	}


	$x = 5;
	echo "<br/> O dobro de " . $x . " = " . dobra($x);

	dobro(6);


?>