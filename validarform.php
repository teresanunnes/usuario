<?php
	$mysql= new mysqli("localhost","root", "admin","usuario");
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$erroDados=0;
		$erros=null;
		if(empty($_POST["nome"]) or !preg_match("/[a-zA-Z]+/",$_POST["nome"])){
			$erroDados++;
			$erros[]="Nome incorreto.";
		}

		if(empty($_POST["email"])){
			$erroDados++;
			$erros[]="Email incorreto.";
		}
	}
?>