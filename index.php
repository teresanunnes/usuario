<?php $mysql= new mysqli("localhost","root", "admin","usuario"); session_start(); 
include_once "config.php";
?>
<!doctype HTML/>
<html>
    <head>
    	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>User Registration</title>

    <meta name="theme-color" content="#712cf9">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
	<link rel="stylesheet" type="text/css" href="./css/style.css">
  	</head>

  <body>
    </head>

	<body>

	<div class="container">
	<header class="blog-header lh-1 py-3">
		<div class="row flex-nowrap justify-content-between align-items-center">
		<div class="col-4 text-center">
			<img src="img/Logo.png" class="img-fluid">
		</div>
	<div class="col-8 nav-scroller py-1 mb-2">
		<nav class="nav d-flex justify-content-between">
		<a class="p-2 link-secondary" href="#">Usuário</a>
		<a class="p-2 link-secondary" href="#">E-mail</a>
		<a class="p-2 link-secondary" href="#">Foto</a>

		<?php 
	
		if (isset($_SESSION['usuarioNome'])){
			echo "<a class='p-2 link-secondary' href='#'>".$_SESSION['usuarioNome']."</a>";
			echo "<a class='p-2 link-secondary' href='sairlogin.php'><img width='30' src='img/sair.png'class='img-fluid'></a>";
		}else{
			echo "<a class='p-2 link-secondary' href='login.php'>Login</a>";	
		}
		
		?>
		</nav>
	</div>
	</div>
		<div id="content">
		<h2>Cadastro de Usuários</h2>
		<?php 
			
	$sql="SELECT * FROM usuario";
	$resultado= $mysql->query($sql);
	//print_r($resultado);
	if($resultado->num_rows>0){
		echo "<table>
			<thead>
				<th>id</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Foto</th>
			</thead>";
			while($usuario=$resultado->fetch_array()){
				$id=$usuario['id'];
				$nome=$usuario['nome'];
				$email= $usuario['email'];
				$foto= $usuario['foto'];
				echo "<tr>
						<td>".$id."</td>
						<td>".$nome."</td>
						<td>".$email."</td>
						<td><img src='".$foto."' class='img'/></td>
					</tr>";	
					}		
		echo "</table>";
	}
	
	?>
	<a href="criar.php" id="add">Adicionar</a>
</div>

	<footer>	
        <div class="container px-7 pt-5 pb-4">
        <div class="row">
            <div class="col-md-6">
                <img src="./img/Logo.png" alt="Logo" class="logo pb-3">
            </div>
            <div class="col-md-6 pt-2">
                <div class="row text-end justify-content-end">
                    <div class="col-md-5">
                        <p class="description">Política de Privacidade</p>
                    </div>
                    <div class="col-md-4">
                        <p class="description">Termos de Uso</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>