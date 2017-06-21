
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js?jl=pt-BR'></script>
	<title> Home </title>
	<script type="text/javascript">
		function abrir(){
			document.getElementById('popup').style.display = 'block';
		}
		function abrir2(){
			document.getElementById('popup2').style.display = 'block';
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
				<a href="javascript: abrir2();">	<div id="qq">  <li>ENTRAR  </li> </a> </div>
				<a href="javascript: abrir();">	<div id="qq2"> <li>  CRIAR  CONTA </li> </a> </div>
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
				<div class="g-recaptcha" data-sitekey="6Le-PSYUAAAAAILei29vNbvN3PftJiVnsSMy_8Uo"></div>


				<div id="botCadastrar"><p><input type="submit" value="Cadastrar"/></p></div>
			</form>
			
		</div>
		<div id="popup2" class="popup2">
		<span id="titulo">Login</span>
			<div id="campos"><form method="POST" action="main.php">
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
