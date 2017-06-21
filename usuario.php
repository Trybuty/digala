
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title> Cadastro </title>

</head>
<body>

	<?php 
		$nome = $_POST ['nome'];
		$email = $_POST ['email'];
		$senha = $_POST ['senha'];

 

$conn = mysqli_connect('localhost', 'root', '', 'digala');
	if (!$conn)
		echo ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());	
	else 
		echo ("Banco de dados conectado");


 
 
 
$query = "INSERT INTO Usuario(Nome, Email, Senha) Values('$nome', '$email','$senha')";
 
$result	 = mysqli_query($conn, $query);

echo "<br>Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.<br>Você será redirecionado para a página inicial em alguns segundos";


?> 
<script language = "JavaScript">
		setTimeout(function(){ 
		location.href='index.php'; 
	}, 10000);-->
</script>
</body>
</html>
