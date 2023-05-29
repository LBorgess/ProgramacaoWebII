<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário Bloqueando Sessão</title>
</head>
<body>
	<form action="sessao_bloqueada.php" method="post" name="logar">
		<label for="nome">Nome:</label>	<br>
		<input type="text" name="nome" id="nome" autocomplete="off">
		<br>
		<label for="senha">Senha:</label><br>
		<input type="password" name="senha" id="senha" autocomplete="off">
		<br><br>
		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="reset" value="Limpar">
	</form>
</body>
</html>