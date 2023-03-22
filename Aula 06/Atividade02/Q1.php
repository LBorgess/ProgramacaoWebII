<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Tabela</title>

	<style>
		table, th, td{
			border: 1px solid black;
			text-align: center;
		}
	</style>

</head>
<body>
	<table style="width:50%">
		<tr>
			<th>Código</th>
			<th>Porcentagem do Aumento</th>
		</tr>
		<tr>
			<td>1</td>
			<td>10</td>
		</tr>
		<tr>
			<td>3</td>
			<td>25</td>
		</tr>
		<tr>
			<td>4</td>
			<td>30</td>
		</tr>
		<tr>
			<td>8</td>
			<td>50</td>
		</tr>
	</table>
</body>
</html>		

<?php 

	$produto = 10.00; 
	$novoValor = 0;
	$codigo = 8;

	// Aumento

	switch($codigo){
		case 1:
			$novoValor = $produto * 1.10;
			break;

		case 3:
			$novoValor = $produto * 1.25;
			break;

		case 4:
			$novoValor = $produto * 1.30;
			break;

		case 8:
			$novoValor = $produto * 1.50;
			break;
	}

	echo "Opção selecionada: " .$codigo; 

	$txt = sprintf("<br/>Novo valor: R$ %.2f<br/>", $novoValor);
	echo $txt;

?>