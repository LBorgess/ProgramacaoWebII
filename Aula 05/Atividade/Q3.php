<?php 

	# $nome = "Lucas"; $idade = 26; $sexo = "M"; // Não aceito
	$nome = "Adriana"; $idade = 20; $sexo = "F"; // Aceito

	if($sexo == 'F' && $idade < 25){
		$txt = sprintf("Parabéns $nome, você está foi ACEITA(O).");
		echo $txt;
	} else {
		$txt = sprintf("$nome, infelizmente você NÃO FOI ACEITA(O).");
		echo $txt;
	}
?>