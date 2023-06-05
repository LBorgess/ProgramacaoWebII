<?php

	$value = 'aluno';

	// Expira no final da sessão (quando o browser fechar)
	setcookie("ocupado", $value);

	// Expira em 1 min
	setcookie("ocupado", $value, time()+60);

?>