<?php 

	define("PI", 3.14159);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Volume</title>
</head>
<body>


	<?php 

		$raio   = $_POST['raio'];
		$altura = $_POST['altura'];

		$volume = (PI * $raio * $altura);
		$res = sprintf("%.2f", $volume);		

	?>

	<h3 class="text-center">Resultado</h3>

	<div class="container text-center pt-4">
		<div class="alert alert-secondary" role="alert">
			A lata de óleo possui <strong><?php echo $res . " L"; ?> </strong>de volume.
		</div>		
	</div>


	<div class="justify-content-center align-items-center row">
		<a class="btn btn-info" href="./volume.html">Voltar</a>		
	</div>

	<!-- Bootstrap JS -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>