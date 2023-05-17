<?php 

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if ($email == 'admin@admin.com' && $senha == 'admin') {
		echo "Acesso <b>LIBERADO</b>";
	} else {
		echo "Acesso <b>NEGADO</b>";
	}

?>