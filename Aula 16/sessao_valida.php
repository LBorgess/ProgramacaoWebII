<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sessão - implementando os formulários - Valida</title>
	<?php 
		session_start();
		if($_SESSION['nome'] != 'master'){
			session_destroy();
			header("location:sessao_formularios.php");
		}
	?>
</head>
<body>
	<b>Página autorizada.</b>
</body>
</html>