<link rel = "shortcut icon" href = "img/favicon.png " />
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cursos Técnicos</title>
	
	<link rel = "stylesheet" href = "css/informacoes.css">

	<style type="text/css">
		.titulo-pagina{
			font-family: 'Open Sans', Helvetica, Arial, sans-serif !important;
			font-size: 25px;
			padding-left: 18px;
			color: #3C3C3C;
			border-bottom: 1px solid #b7b7b7;
			font-weight: 100;
			margin-top: 5%;
		}

		.box-100 {
			width: 100%;
		}

		.paragrafo {
			font-size: 14px;
			line-height: 20px;
			text-align: justify;
		}

		.img-responsiva {
			max-width: 960px;
			width: 100%;
			height: auto;
			margin-top: 3%;
			/* margin: 50px auto; */
		}


		.botao-inscreva{
			width: 90%;
			margin: 0 auto;
			background: #299850;
			text-align: center;
			color: #fff;
			padding: 5%;
			font-size: 1.5em;
			text-transform: uppercase;
			font-weight: bold;
			border-bottom: 4px solid #0d6e2f;
			cursor: pointer;
			border-radius: 2px;
		}

		.botao-inscreva:hover{
			background: #237c42
		}

		@media screen and (max-width: 1200px) {
			.box950 {
				width: 87%!important;
			}

			#txt-curso {
				width: 16%;
			}
		}

		@media screen and (max-width: 412px) {
			.box950 {
				width: 100%!important;
			}
		}

	</style>

	<!--<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">-->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
</head>

<body>
	<?php

	require('conexao.php');
	include_once 'topo.html';
// -------------------------------------


	$id = isset($_GET['IdCurso']) ? $_GET['IdCurso'] : '';

	if (!$id) {
		die("Nenhuma empresa foi clicada!");
	}


	$query = "SELECT *
	FROM cursos_tecnicos c
	WHERE c.IdCurso =  '$id'
	";


	$sql = mysql_query($query, $con);

	if (!mysql_num_rows($sql)) {
		die("Nenhum Curso foi localizado!");
	}

	while ($linha = mysql_fetch_array($sql)) {


		?>
		<title><?php echo $linha['nome']; ?></title>
		<!-- ================================================ -->
		<div id = "info-curso" class = "box950 centraliza">

			<h1 class="titulo-pagina">Curso Técnico / <?php echo $linha['nome']; ?></h1>

			<!--<div class="paragrafo box-100">
				<div class="img-responsiva">
					<img src="/img/pedagogia.png">
				</div>
			</div>-->

			<p>
				<?php echo $linha['descricao']; ?>
			</p>

			<div>
				<div id = "txt-curso" class = "float-left">
					<h3 class = "titulo-info "><i class="fa fa-clock-o" aria-hidden="true"></i> Duração</h3>
					<?php echo $linha['duracao']; ?><br>
					<br>

					<h3 class = "titulo-info "><i class="fa fa-graduation-cap" aria-hidden="true"></i> Titulação</h3>
					<?php echo $linha['titulacao']; ?><br>
					<br>

					<h3 class = "titulo-info "><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Período</h3>
					<?php echo $linha['periodo']; ?><br>
					<br>

					<h3 class = "titulo-info "><i class="fa fa-star" aria-hidden="true"></i> Modalidade</h3>
					<?php echo $linha['modalidade']; ?><br>
					<br>

					<h3 class = "titulo-info "><i class="fa fa-usd" aria-hidden="true"></i> Valor da Matrícula</h3>
					<strong style="font-size: 21px;">R$ 50,00</strong><br>
					<br>

					<a href="cadastro-curso-tecnico.php?IdCurso=<?php echo($linha['IdCurso']); ?>">
						<div class="botao-inscreva">
							Inscreva-se
						</div>
					</a>

				</div>

				<div class="tabela" style="float: left; margin-top: -8%;">
					<!-- =================== TABS  ====================== -->
					<?php
					$Grade = $linha["NomeGrade"];
					require("$Grade"); 
					?>
					<!-- ================================================ -->
				</div>

			</div>

		</div>
	</div>


	<?php
}
?>


<?php
include('rodape.php');
?>



</body>