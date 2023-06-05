<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sessão - Implementado os formulários</title>
	<?php 
		if($_POST){
			session_start();
			$_SESSION['nome'] = $_POST['nome'];
			$_SESSION['senha'] = $_POST['senha'];

			header("location:sessao_formularios.php");
		}
	?>
</head>
<body>
	<form action="sessao_formulario.php" method="post" name="logar">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome"><br>
		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha"><br><br>
		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="limpar" value="Limpar">
	</form>
</body>
</html>