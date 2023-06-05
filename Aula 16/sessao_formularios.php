<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sessão - Implementando os formulários</title>
	<?php 
		session_start();
	?>
</head>
<body>
	<b>Funcionário:</b> <?php echo $_SESSION['nome']; ?>, logado com sucesso. <br>
	<b>Data de conexão:</b> <?php echo date("d/m/Y"); ?> <br>
	<b>Hora da conexão:</b> <?php echo date("h:i:s"); ?> <br><br>
	<a href="sessao_valida.php">Área de administrador</a>
</body>
</html>