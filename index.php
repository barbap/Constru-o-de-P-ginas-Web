<?php
	//Inicia a sessão
	session_start(); 
	$_SESSION["senha"] = $_POST["senha"];
	$_SESSION["nome"] = $_POST["nome"];
	$_SESSION["login"] = $_POST["login"];
	//session_destroy();
	//Verifica se há dados ativos na sessão
	if(empty($_SESSION["senha"]) || empty($_SESSION["nome"]) || empty($_SESSION["login"])){
		//Caso não exista dados registrados, exige login
		header("Location:login.php");
	}
?>

<!DOCTYPE html>

<html>
	<head> 
		<meta charset='UTF-8'>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<title>Bárbara Araújo Paim</title>
	</head>  
	<body>
		<h1> Página da Bárbara Paim</h1>
		<p>Bem vindo: <?php echo $_SESSION["nome"];  ?></p>
		<header>
			<nav>
				<ul>
					<h2>
					<li><a href='index.html'><strong>Início</strong></a></li>  
					<li><a href='curriculo.html'><strong>Currículo</strong></a></li> 
					<li><a href='midias.html'><strong>Filmes/Séries favoritos</strong></a></li> 
					<li><a href='livros.html'><strong>Livros Preferidos</strong></a></li>
					<li><a href='marcarhorario.html'><strong>Marcar Horário</strong></a></li>
					<li><a href='horarios.html'><strong>Horários</strong></a></li>
					</h2>
				</ul>
			</nav>
		</header>
		<section>
		<div class="line">
			<div class="col-8">
				<div class="bloco bloco-esquerdo">
					<img src="imagens/dollify.jpg">
					<p>Nesta página você vai saber um pouco mais sobre mim.<br> Cada um dos itens do menu acima vai para uma das seções que dizem um pouco mais sobre a minha pessoa. </p>
				</div>
				<div class="bloco bloco-esquerdo">
					<h3>Dados Pessoais</h3>
					<ul>
						<li>Apelido: Babi</li>
						<li>Idade: 19</li>
						<li>Cidade: Charqueadas</li>
						<li>Altura: 1.57</li>
						<li>Profissão: Estudante</li>
						<li>Time: Internacional</li>
						<li>Comida preferida: massa com galinha</li>
						<li>E-mail: barbaraaraujopaim99@gmail.com </li>
					</ul>
				</div>
			</div>
			<div class="bloco-direito col-4">
				<div class="bloco">
					<h3>Favoritos</h3>  
					<h4><a href='https://twitter.com'> Twitter</h4>
					<p><img src='imagens/twitter.png' alt='twitter'>
					Rede social que uso como diário e reclamo bastante do Expresso Vitória.</p><br><br>
					<h4><a href='https://www.netflix.com'> Netflix</h4>
					<p><img src='imagens/netflix.png' alt='Netflix' ></a>
					Plataforma que utilizo para assistir B99.</p><br>
					<h4><a href='https://www.youtube.com/'> Youtube</h4>
					<p><img src='imagens/youtube.png' alt='YouTube'></a>
					Plataforma que utilizo para passar tempo.</p><br>
				</div>
			</div>
		</div>
		</section>
		<footer>Feito por Bárbara Paim</footer>
	</body>
</html>