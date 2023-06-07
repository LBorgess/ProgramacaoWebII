<?php 

	$voto = $_GET['voto'];
	setcookie("voto", $voto);
	$votou = false;

	switch ($voto) {
		case 1:
			$time = "co"; break;
		case 2:
			$time = "sp"; break;
		case 3:
			$time = "sa"; break;
		case 4:
			$time = "pa"; break;
		default:
			$time = "null"; break;
	}

	if (!isset($_COOKIE['voto'])) {
		// duração de um mês
		setcookie("voto", $voto, time()+3600*24*31);

		$msg = "Obrigado por votar!!";
		$votou = true;
	} else {
		$msg = "Você já votou uma vez.";
	}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Votação</title>

	<style>
		img {
			width: 150px;
		}
	</style>
</head>
<body>

	<div class="container row justify-content-center align-items-center">

	<div class="container row justify-content-center align-items-center">
		<?php echo $msg; ?>
	</div>

	<?php if($time != "null"): ?>	
		<img class="img-thumbnail " src="./img/<?php echo $time . ".svg"; ?>">	
	<?php endif ?>
	</div>
	
	    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>