<?php 

$ano = 2020; // local

// função

function exibir($parametro)
{
	$parametro = $parametro + 3;
	return $parametro;
}

echo "Estamos em " . $ano . " e daqui a 4 anos estaremos em " . exibir($ano);

?>