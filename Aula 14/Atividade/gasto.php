<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Gasto de Combustivel</title>
</head>
<body>

	<h2 class="p-2 m-2 justify-content-center align-items-center row">Resultado</h2>
	
	<?php 

	$tempo = $_POST['tempo'];
	$velocidade = $_POST['velocidade'];

	if ($tempo == null || $velocidade == null) {

		echo ("<div class='alert alert-danger justify-content-center align-items-center row' role='alert'>Favor insira dados válidos.</div>");

	} else {

		$distancia = ($tempo * $velocidade);
		$litros = ($distancia / 12);

		$resultado = sprintf("<div class=\"alert alert-success justify-content-center align-items-center row\">Você gastou&nbsp;<strong>%.2f</strong>&nbsp;litros de combustível.</div>", $litros);

		echo $resultado;

	}

	?>

	<div class="p-2 m-2 justify-content-center align-items-center row">
		<a class="btn btn-primary" href="./gasto.html">Voltar</a>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

