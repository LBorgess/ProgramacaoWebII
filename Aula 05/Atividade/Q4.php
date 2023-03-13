<?php 

	$x = 1;
	$y = 2;
	$z = 3;

	if($x < $y && $x < $z && $y < $z){
		$fmt = sprintf("%d - %d - %d", $z, $y, $x);
		echo $fmt;
	} elseif($y < $x && $y < $z && $z < $x){
		$fmt = sprintf("%d - %d - %d", $y, $x, $z);
		echo $fmt;
	}


?>