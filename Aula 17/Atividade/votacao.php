<?php 

	$voto = $_GET['voto'];
	setcookie("voto", $voto);
	$votou = false;

	switch ($voto) {
		case 1:	$time = "co"; break;
		case 2:	$time = "sp"; break;
		case 3:	$time = "sa"; break;
		case 4:	$time = "pa"; break;
		default:$time = "null"; break;
	}

	if(!$votou){
		if (!isset($_COOKIE['voto'])) {
			// duração de um mês
			setcookie("voto", $voto, time()+3600*24*31);
			$msg = "Obrigado por votar!!";
			$votou = true;
		} else {
			$msg = "Você já votou uma vez.";
		}
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

	<title>Votação</title>

	<!-- Tamanho fixo para as fotos -->
	<style>
		img {width: 150px;}
	</style>
</head>
<body>

	<!-- Primeiro voto -->
	<?php if($votou): ?>
		<div class="container">
			<div class="text-center mt-3">
				<img src="./img/<?php echo $time . ".svg"; ?>" alt="Times" class="img-fluid center-block">
				<div class="alert alert-success col" role="alert">
					<p class="text-center mt-3"> <?php echo "<strong>".$msg."</strong>"?></p>				
				</div>
			<a href="index.php" class="btn btn-info btn-block">Voltar</a>
			</div>
		</div>
	<?php endif; ?>

	<!-- Já votou -->
	<?php if(!$votou): ?>
		<div class="container">
			<div class="text-center mt-3">
				<img src="./img/block.svg" alt="block" class="img-fluid center-block">
				<div class="alert alert-danger">
					<p class="text-center mt-3"> <?php echo "<strong>".$msg ."</strong>"?> </p>						
				</div>
				<a href="index.php" class="btn btn-info btn-block">Voltar</a>				
			</div>
		</div>

	<?php endif; ?>
	
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="../../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>