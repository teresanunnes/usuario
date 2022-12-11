<?php
	session_start();

	unset(
		$_SESSION['usuarioId'],
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioLogin'],
		$_SESSION['usuarioSenha']
	);

	header("Location:index.php");
?>