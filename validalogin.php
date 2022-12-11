<?php
	$mysql= new mysqli("localhost","root", "admin","usuario");
	session_start();
	if((isset($_POST['login'])) && (isset($_POST['senha']))){
		$usuario=$_POST['login'];
		$senha=$_POST['senha'];
		$senha = md5($senha);

		$sql="SELECT * FROM usuario WHERE email='$usuario' && senha='$senha'";
		$result= mysqli_query($mysql, $sql);
		$resultado=mysqli_fetch_assoc($result);

		 if(isset($resultado)){
			$_SESSION['usuarioId']= $resultado['id'];
			$_SESSION['usuarioNome']= $resultado['nome'];
			$_SESSION['usuarioLogin']= $resultado['usuario'];
			$_SESSION['usuarioSenha']= $resultado['senha'];
			header("Location:index.php");
		}
		else{
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: login.php");
		}
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: login.php");
	}
?>