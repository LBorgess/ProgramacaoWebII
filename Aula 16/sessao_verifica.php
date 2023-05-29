<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Verifica Sessão</title>
	<?php 
		session_start();
		if (!($_SESSION['nome'] == "master")) {
			session_destroy();
			header("location:sessao_bloqueando.php");	
		}
	?>
</head>
<body>
	<b>Página Autorizada</b>
</body>
</html>