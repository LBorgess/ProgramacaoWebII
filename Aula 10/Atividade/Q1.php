<?php 

/*
1. Entre  com  os  dados  de  10  alunos  de  uma  classe,  recebendo  as  informações  como nome  e  uma  nota  do  aluno.  
Armazene  estes  dados  em  um  vetor.  
Ao  final  do programa  mostrar  a  média  de  nota  da  classe,  e  o  nome  do  aluno  que  obteve  maior nota. 
*/

	$notas_nomes = array(
		"Lucas"     => 10,
		"Adriano"   => 10,
		"Gustavo"   => 7,
		"Ryan"      => 8,
		"Henzo"     => 10,
		"João"      => 10,
		"Guilherme" => 10,
		"David"     => 10,
		"Henrique"  => 10,
		"Laércio"   => 10
	);

	$notas = array_values($notas_nomes);
	$soma_notas = 0;

	for ($i = 0; $i < 10 ; $i++) { 
		$soma_notas += $notas[$i];
	}

	$media = ($soma_notas / 10);

	$maior_nota = 0;

	for($i = 0; $i < 10; $i++){
		if($maior_nota < $notas[$i]){
			$maior_nota = $notas[$i];
		}
	}

	$nome = array_search($maior_nota, $notas_nomes);


	echo "<br/> MÉDIA DA CLASSE.....: " . $media;
	echo "<br/> ALUNO COM MAIOR NOTA: " . $nome;


?>