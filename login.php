<?php 
	$mysql= new mysqli("localhost","root", "admin","usuario");
	session_start();
  include_once "config.php";
?>
<!doctype HTML/>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="./css/style_login.css">
    </head>
	<body>
   <div class="content">      
      <div id="login">
        <form method="post" action="validalogin.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="email_login">Seu e-mail</label>
            <input id="email_login" name="login" required="required" type="text" placeholder="exemplo@exemplo.com"/>
          </p>
          
          <p> 
            <label for="senha_login">Sua senha</label>
            <input id="senha_login" name="senha" required="required" type="password" placeholder="1234" /> 
          </p>
          
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
          
          <p> 
            <input type="submit"  name="entrar" value="Logar" /> 
          </p>

          <p class="negado">
			<?php
			if (isset($_SESSION['loginErro'])) {
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
				}
			?>
		</p>
        </form>

      </div>

	</body>
</html>