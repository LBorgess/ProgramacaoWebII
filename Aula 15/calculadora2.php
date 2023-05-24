<?php 
	
	function somar($x, $y){	return $x + $y;}	
	function subtrai($x, $y){return $x - $y;}	
	function multiplica($x, $y){return $x * $y;}	
	function dividir($x, $y){
		if($y == 0){
			echo ("<div class='alert alert-danger justify-content-center align-items-center row' role='alert'>IMPOSSÍVEL CALCULAR.</div>"); 
		} else {
			return $x / $y;
		}
	}

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$opcao = $_POST['operacao'];

	switch ($opcao) {
		case 'adicao':
			$res = somar($num1, $num2);
			break;
		case 'subtracao':
			$res = subtrai($num1, $num2);
			break;
		case 'multiplicacao':
			$res = multiplica($num1, $num2);
			break;
		case 'divisao':
			$res = dividir($num1, $num2);
			break;
		default:
			// code...
			break;
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Bootstrap -->	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Calculadora</title>
</head>
<body>


	<h3 class="text-center p-2">Resultado</h3>


	<div class="justify-content-center align-items-center row">
		<a class="btn btn-info" href="./calculadora2.html">Voltar</a>		
	</div>

	<!-- Bootstrap JS -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>