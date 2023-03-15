<?php 
	
	// Caso 1
	// $x = 1; $y = 2; $z = 3;

	// Caso 2
	// $x = 2; $y = 1; $z = 3;
	
	// Caso 3
	// $x = 1; $y = 3; $z = 2;
	
	// Caso 4
	// $x = 2; $y = 3; $z = 1;

	// Caso 5
	// $x = 3; $y = 1; $z = 2;

	// Caso 6
	// $x = 3; $y = 2; $z = 1;

	// Z maior e Y > X [Caso 1]
	if($z > $x && $z > $y && $y > $x){
		$fmt = sprintf("Z = [%d] | Y = [%d] | X = [%d]", $z, $y, $x);
		echo $fmt;
	}

	// Z maior X > Y [Caso 2]
	if($z > $x && $z > $y && $x > $y){
		$fmt = sprintf("Z = [%d] | X = [%d] | Y = [%d]", $z, $x, $y);
		echo $fmt;
	}

	// Y maior e Z > X [Caso 3]
	if($y > $x && $y > $z && $z > $x){
		$fmt = sprintf("Y = [%d] | Z = [%d] | X = [%d]", $y, $z, $x);
		echo $fmt;
	}

	// Y maior e X > Z [Caso 4]
	if($y > $x && $y > $z && $x > $z){
		$fmt = sprintf("Y = [%d] | X = [%d] | Z = [%d]", $y, $x, $z);
		echo $fmt;
	}

	// X maior e Z > Y [Caso 5]
	if($x > $z && $z > $y && $x > $y){
		$fmt = sprintf("X = [%d] | Z = [%d] | Y = [%d]", $x, $z, $y);
		echo $fmt;
	}

	// X maior e Y > Z [Caso 6]
	if($x > $z && $y > $z && $x > $y){
		$fmt = sprintf("X = [%d] | Y = [%d] | Z = [%d]", $x, $y, $z);
		echo $fmt;
	}


?>