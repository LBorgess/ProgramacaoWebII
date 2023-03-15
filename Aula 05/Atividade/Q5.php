<?php 

	$maior_altura = 1.70; $menor_altura = 1.50;
	$media_altura = 1.68; $mais_novo =  25;
	$mais_velho   = 50;

	echo "Informações da Pesquisa <br/><br/>";

	$alturas = sprintf("• Pessoa mais Alta tem %.2fcm e a mais baixa %.2fcm e a média de altura entre as mulheres é de %.2fcm <br/>", $maior_altura, $menor_altura, $media_altura);

	echo $alturas;

	$idades = sprintf("<br/>• A pessoa mais velha tem %d e a mais nova %d <br/>", $mais_velho, $mais_novo);

	echo $idades;


?>