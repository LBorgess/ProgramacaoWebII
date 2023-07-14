<!DOCTYPE html>
<html>
<?php 
	# Testando comentário de Hash
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP - Testando comentário</title>
</head>
<body>
<?php 
	/*
		Este é um comentário de
		múltiplas linhas.
	*/

	echo "Segundo exemplo em PHP";
	$data = "20 de Agosto de 2020";

	// Este é um comentário de apenas uma linha
?>

	<p>Este parágrafo está sendo interpretado como HTML</p>
	Arquivo criado em <?php echo $data; ?>

</body>
</html>