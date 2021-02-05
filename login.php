
	<html>
	<head>
		<title>Login.html</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<center>
	<body>
		<h1>Página da Bárbara</h1>
		<div class="login" class="center">
		<form name="login" method="post" action="index.php">
			Nome: <input class="center" name="nome" type="text" required> <br>
			Usuário: <input class="center" name="login" type="email" required> <br>
			Senha: <input class="center" name="senha" type="password" required> <br>
			<input type="checkbox" name="senha" value="lembrarsenha">Lembrar Senha<br><br>
			<a href="alterarsenha.html"> Esqueci minha senha </a><br><br>
			<input name="enviar" type="submit" >
			<input name="Limpar" type="reset" >
		</form>
		</div>
	</body>
	</center>
</html>