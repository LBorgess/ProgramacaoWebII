<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sessão de usuário - identificando uma sessão</title>
</head>
<body>
	<?php
		session_start();
		$_SESSION['nome'] = "usuario";
	?>
</body>
</html>