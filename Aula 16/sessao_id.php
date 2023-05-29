<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sessão ID</title>
</head>
<body>
	<?php 

		session_start();

	?>

	<h3>Sessão do Usuário</h3>
	SID dessa sessão é <?php echo session_id(); ?>

</body>
</html>