<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel = "shortcut icon" href = "img/favicon.png " />
	<link rel = "stylesheet" href = "css/informacoes.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<!-- css files -->
	<link href="info/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- /css files -->
	<!-- js files -->
	<script src="info/js/modernizr.custom.js"></script>
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
	<!-- /js files -->

	<style>

		#txt-curso {
			width: 100%!important;
			font-size: 15px;
			text-align: left;
			padding: 2%;
			position: relative;
			margin: 20px 10px 0 0;
		}

		#div-img-curso {
			width: 22%!important;
			height: auto!important;
			padding: 2%!important;
			position: relative!important;
			margin: 35px 0!important;
		}

		.container{
			width: 99%;
		}

		.linha-info{
			margin-top: 5px!important;
			margin-bottom: 5px!important;
		}

		#about {
			padding: 5em 0;
		}

		.text.agile-info h4 {
			font-size: 1.2em;
			font-weight: bold;
			color: #102d4b;
			margin-bottom: 0.3em;
		}

		.botao-info {
			float: none!important;
			width: 60%;
			margin: 0 auto;
			background: #299850;
			text-align: center;
			color: #fff;
			padding: 1%;
			text-decoration: none!important;
			margin-top: 10%;
			font-size: 1.5em;
			text-transform: uppercase;
			font-weight: bold;
			border-bottom: 4px solid #0d6e2f;
			cursor: pointer;
		}


	</style>

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
	FROM cursos_livres c
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
			<div id = "txt-curso" class = "float-left">
				<h3 style="font-size: 1.8em;"><?php echo $linha['NomeCurso']; ?></h3>
				<hr>
				<br>
			</div>

			<div class="main-top" id="home">
				<!--what-we-do-->
				<div class="tabs" id="about">
					<div class="container">
						<div class="tabs-grids">
							<div id="parentVerticalTab">
								<ul class="resp-tabs-list hor_1">
									<li>Sobre o Curso</li>
								</ul>
								<div class="resp-tabs-container hor_1">
									<div class="text agile-info">
										<h4>SOBRE O CURSO</h4>
										<p class="text-info">
											<?php echo $linha['Descricao']; ?>

											<div class="centro-info">
												<a href = "cadastro-curso-livre.php?IdCurso=<?php echo($linha['IdCurso']); ?>" style="text-decoration: none;">
													<div class="botao-info">
														Matricule-se
													</div>
												</a>
											</div>
										</p>
										<br><br><br>
									</div>
								</div>
							</div>
							<div class="box-e-livre">
								<div class="box-info">
									<h3 class = "titulo-info "><i class="fa fa-clock-o icone-2" aria-hidden="true"></i> DURAÇÃO</h3>
									<hr class="linha-info">
									<div class="sub-info">4 anos</div>
								</div>
								<div class="box-info">
									<h3 class = "titulo-info "><i class="fa fa-usd icone-2" aria-hidden="true"></i> VALOR DO CURSO</h3>
									<hr class="linha-info">
									<div class="sub-info" style="color: #00a824;">R$ 49,90</div>
								</div>
							</div>
						</div>
					</div>
				</div>	

			</div>
			<!--//what-we-do-->

			<?php
		}
		?>
		<!-- swipe box js -->
		<script src="info/js/jquery-2.2.3.min.js"></script> 
		<script src="info/js/jquery.pogo-slider.min.js"></script>
		<!-- /js files -->

		<!-- Starts-Number-Scroller-Animation-JavaScript -->
		<link rel="stylesheet" type="text/css" href="info/css/easy-responsive-tabs.css " />
		<script src="info/js/easyResponsiveTabs.js"></script>

		<!--Plug-in Initialisation-->
		<script type="text/javascript">
			$(document).ready(function() {

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>
			<!--/script-->
			

			<?php
			include('rodape.php');
			?>



		</body>