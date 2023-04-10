<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<p>Exemplo declaração de váriavel sem array</p>

	<?php 

		$nome1 = "Maria";
		$nome2 = "João";
		$nome3 = "Pedro";
		$nome4 = "Paulo";
		$nome5 = "Lucas";

		echo "$nome1<br/>$nome2<br/>$nome3<br/>$nome4<br/>$nome5<br/>";

	?>

	<p>Exemplo declaração de várivel com array</p>

	<?php 

		$nome = array("Maria", "João", "Pedro", "Paulo", "Lucas");

		echo "Os nomes no array<br/>";

		foreach($nome as $nomes){
			echo "<br.> " . $nomes;
		}

	?>

</body>
</html>