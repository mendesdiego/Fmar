<link rel = "shortcut icon" href = "img/favicon.png " />
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Pedagogia</title>
	
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
	FROM cursos c
	WHERE c.IdCurso =  '$id'
	";


	$sql = mysql_query($query, $con);

	if (!mysql_num_rows($sql)) {
		die("Nenhum Curso foi localizado!");
	}

	while ($linha = mysql_fetch_array($sql)) {
		?>

		<title><?php echo $linha['NomeCurso']; ?></title>
		<!-- ================================================ -->
		<div id = "info-curso" class = "box950 centraliza">

			<h1 class="titulo-pagina"> Curso de Pedagogia</h1>

			<!--<div class="paragrafo box-100">
				<div class="img-responsiva">
					<img src="/img/pedagogia.png">
				</div>
			</div>-->

			<div>
				<div id = "txt-curso" class = "float-left">
					<h3 class = "titulo-info "><i class="fa fa-clock-o" aria-hidden="true"></i> Duração</h3>
					4 anos<br>
					<br>

					<h3 class = "titulo-info "><i class="fa fa-graduation-cap" aria-hidden="true"></i> Titulação</h3>
					Licenciatura<br>
					<br>

					<h3 class = "titulo-info "><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Período</h3>
					Matutino / Vespertino / Noturno<br>
					<br>

					<h3 class = "titulo-info "><i class="fa fa-star" aria-hidden="true"></i> Modalidade</h3>
					Presencial<br>
					<br>

					<h3 class = "titulo-info "><i class="fa fa-pencil" aria-hidden="true"></i> Regime de Matrícula</h3>
					Semestral<br>
					<br>

				</div>

				<div class="tabela" style="float: left; margin-top: -8%;">
					<!-- =================== TABS  ====================== -->
					<?php include_once 'pedagogia.html'; ?>
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
</html>