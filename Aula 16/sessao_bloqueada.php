<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário Bloqueando Sessão</title>

	<?php 
		session_start();
		$_SESSION['nome'] = $_POST['nome'];
		$_SESSION['senha'] = $_POST['senha'];
	?>

</head>
<body>

	<b>Funcionário: </b> <?php echo $_SESSION['nome']; ?> logado com sucesso. <br>
	<b>Data da conexão: </b> <?php echo date("d/m/Y") ?> <br>
	<b>Hora da conexão: </b> <?php echo date("h:i:s") ?> <br>

	<a href="sessao_verifica.php"><button>Área de administrador</button></a>
	
</body>
</html>