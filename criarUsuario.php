<?php 
    $mysql= new mysqli("localhost","root", "admin","usuario"); session_start(); 
    include 'validarform.php';
	include_once "config.php";

	if(mysqli_connect_error()){
		echo "<h3 style='color:red'>Falha ao conectar</h3>";
	}
	else{

			include 'img.php';

			$sql="INSERT INTO usuario
			(nome,email,senha,foto)
			VALUES
			('".$_POST['nome']."',
				'".$_POST['email']."',
				'".md5($_POST['senha'])."',
				'".upload()."'
			)";

			$mysql->query($sql);
			header("location:pagina.php");
		}
?>