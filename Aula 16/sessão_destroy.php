<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sessão Usuário</title>
</head>
<body>
	<?php
		// Cria a sessão 
		session_start();

		// session_destroy(); // [Elimina todas as sessões]

		$_SESSION['nome'] = "Lucas";
		
		session_unset(); // [Elimina as sessão]
	?>

	<h3>Sessão de Usuário</h3>
	Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>

</body>
</html>