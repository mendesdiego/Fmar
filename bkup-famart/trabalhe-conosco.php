<!DOCTYPE html>
<html lang = "en">
<head>
	<link rel="shortcut icon" href="img/favicon.png " />
	<meta name = "viewport" id = "viewport"
	content = "width=device-width,minimum-scale=1.0,maximum-scale=3.0,initial-scale=1.0" />
	<link rel = "stylesheet" href = "css/style.css">
	<link rel = "stylesheet" href = "css/paginas.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

	<meta charset = "UTF-8">
	<title>Trabalhe Conosco</title>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<link href="http://icosita.com/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="http://icosita.com/js/jquery.min.js"></script>
	<!---strat-slider---->
	<link rel="stylesheet" type="text/css" href="css/slider.css" />
	<script type="text/javascript" src="http://icosita.com/js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="http://icosita.com/js/jquery.cslider.js"></script>
	<!-- start top_js_button -->
	<script type="text/javascript" src="http://icosita.com/js/move-top.js"></script>
	<script type="text/javascript" src="http://icosita.com/js/easing.js"></script>
</head>
<body>
	<div id = "containner" class = "containner100">

		<!-- ###################################################### -->

		<?php include("topo.html") ?>


		<!-- ###################################################### -->
		<div id = "conteudo">

			<div id = "box950" class = "box950 centraliza  ">
				<div id = "noticias">
					<h1>Trabalhe Conosco</h1>
					<hr>
				</div>

				<p style="text-align: justify; padding: 2% 10% 0 10%;">
					A Famart busca sempre profissionais com competência, seriedade e que almejam <strong>crescimento profissional</strong>.<br>
					Você tem essas características? Então preencha o formulário abaixo, anexe seu currículo.<br>
				</p>

				<br><br>

				<div class="espacamento-form">
					<form action="envia-curriculo.php" method="POST" enctype="multipart/form-data" name="email">
						<div class="form-group">
							<label for="fullname" class="texto-form">Nome completo: </label>
							<input type="text" class="form-control" id="nomecompleto" name="nomecompleto" aria-describedby="nome" placeholder="Digite seu nome" required>
						</div>
						<div class="form-group">
							<label for="emailid" class="texto-form">Email: </label>
							<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite seu email" required>
						</div>
						<div class="form-group">
							<label for="phone" class="texto-form">Telefone: </label>
							<input type="tel" class="form-control" id="telfixo" name="telfixo" aria-describedby="tel" placeholder="Digite seu telefone" required>
						</div>
						<div class="form-group">
							<label for="subject" class="texto-form">Assunto: </label>
							<input type="text" class="form-control" id="assunto" name="assunto" aria-describedby="assunto" placeholder="Digite o assunto da sua mensagem" required>
						</div>
						<div class="form-group">
							<label for="comments" class="texto-form">Mensagem: </label>
							<textarea class="form-control" id="comentario" name="comentario" rows="5"></textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Anexe seu currículo:</label>
							<input type="file" name="arquivo" id="arquivo" class="form-control-file" aria-describedby="fileHelp">
						</div>
						<button type="submit" name="Enviar" id="Enviar" class="btn btn-primary botao-escuro">Enviar Mensagem</button>
					</form>
				</div>
			</div>




			<?php include('rodape.php') ?>
		</div>

		<!-- ###################################################### -->

	</body>
	</html>
