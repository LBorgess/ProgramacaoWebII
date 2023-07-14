<?php 

$nome = "Armandino"; // Variavel local

// Implementação de uma função 

function exibir()
{
	$nome = "Josefina"; // variável local na função

	echo "valor da variável dentro da função ". $nome;
}

exibir();
echo "<br/> Valor da variável fora da função." . $nome;

?>