<?php $mysql= new mysqli("localhost","root", "admin","usuario"); session_start(); ?>
<!doctype HTML/>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
	<body>
		<div id="content">
		<h2>Cadastro de Usuários</h2>
	
		<div>
		<form method="post" action="criarUsuario.php"  enctype="multipart/form-data">
			<p>Cadastro de Pessoas</p>
			<input type="text" class="field" name="nome" placeholder="Nome" pattern="[a-zA-Z]+" required/>
			<input type="text" class="field" name="email" placeholder="Email" required/>
			<input type="text" class="field" name="senha" placeholder="Senha" pattern="[0-9a-zA-Z]{9}" required/>
			
			<div class="file">
				<div class="upload">
					<input type="file" class="field" name="foto"/>
				</div>
			</div>
			<input type="submit"  name="enviar" />
		</form>
				</div>
            
	<a href="sairlogin.php" class="sair">Sair</a>
</div>
	</body>
</html>