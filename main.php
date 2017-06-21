
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">
	<title> Home </title>
	<script type="text/javascript">
		function abrir(){
			document.getElementById('popup').style.display = 'block';
		}
	</script>

</head>
<body >

		<header>		
		<nav id ="main">
			
				<div id="links">
			<ul>
				
				<li> <a href="#"> INÍCIO </a> </li>
				<li> <a href="#"> CARTEIRA </a> </li>
				<li> <a href="#"> AVATAR </a> </li>
				<li> <a href="#"> LOJA </a> </li>
				<li> <a href="#"> MAIS UM </a> </li>
			</ul>
		</div>
			<div id="login">
			<ul>
				<div id = "user">

				<?php
						$email_login = $_POST ['email'];
						$senha_login = $_POST ['senha'];


						$conn = mysqli_connect('localhost', 'root', '', 'digala');	

						$user = "SELECT * FROM usuario WHERE email = '" . $email_login. "' AND senha = '" . $senha_login. "'";

						$r = $conn->query($user);

						$n_rows = $r->fetch_row();

						if ($n_rows == 0 ){
         				 echo
         				 ("<script language='javascript' type='text/javascript'>
         				 	alert('Login e/ou senha incorretos');
         				 	location.href='index.php';
         				 	</script>");
         				}
         				
         					else {
         						$result = $conn->query($user);						
						 while($row = $result->fetch_assoc()){	
						 echo ("Olá, " . $row["Nome"]);				 
						 }	
         						        					}

						

						 $conn->close();
				?>
				</div>
			</ul>
			</div>
		</nav>
		</div>
		<div id="popup" class="popup">
			<span id="titulo">Cadastro</span>
			<div id="campos"><form method="POST" action="usuario.php">
				<p>Nome:<input type="text" id="nome" name="nome" required pattern="{3,}" title="Seu nome deve conter o mínimo de três dígitos."/></p>
				<p>Email:<input type="email" id="email" name="email" required/></p>
				<p>Senha:<input type="password" id="senha" name="senha" required/></p>
			</div>
				<div id="botCadastrar"><p><input type="submit" value="Cadastrar"/></p></div>
			</form>
			
		</div>
		</header>
		<section id="sec1">

			eae
		</section>
		<section id="sec2">
			hiii
		</section>
		<section id="sec3">
			CALA A BOCA NATY
		</section>
		<footer>
			rodapé
		</footer>
</body>
</html>
