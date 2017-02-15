


<head>
	<link rel = "shortcut icon" href = "img/favicon.png " />
	<link rel = "stylesheet" href = "css/informacoes.css">


	<style type="text/css">
		#about {
			padding: 5em 0;
		}

		.text.agile-info h4 {
			font-size: 2em;
			font-weight: bold;
			color: #222;
			margin-bottom: 0.3em;
		}
	</style>
	<!-- css files -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- /css files -->
	<!-- js files -->
	<script src="js/modernizr.custom.js"></script>
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
	<!-- /js files -->

	<style>

		#txt-curso {
			width: 68%;
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
	FROM extensao_educacao c
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
				
				<div class="main-top" id="home">
					<!--what-we-do-->
					<div class="tabs" id="about">
						<div class="container">
							<div class="tabs-grids">
								<div id="parentVerticalTab">
									<ul class="resp-tabs-list hor_1">
										<li>Sobre o Curso</li>
										<li>Conteúdo Programático</li>
										<li>Carga Horária</li>
										<li>Valor do Curso</li>
										<li>Matricule-se</li>


									</ul>
									<div class="resp-tabs-container hor_1">
										<div class="text agile-info">
											<h4>SOBRE O CURSO</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accUKntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
											<p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
											<br><br><br>
										</div>
										<div class="text agile-info">
											<h4>CONTEÚDO PROGRAMÁTICO</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accUKntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
											<p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
											<br><br><br>
										</div>

										<div class="text agile-info">
											<h4>CARGA HORÁRIA</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accUKntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
											<p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
											<br><br><br>
										</div>



										<div class="text agile-info">
											<h4>VALOR DO CURSO</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accUKntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
											<p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
											<br><br><br>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<!--//what-we-do-->


					<!-- swipe box js -->
					<script src="js/jquery-2.2.3.min.js"></script> 
					<script src="js/jquery.pogo-slider.min.js"></script>
					<!-- /js files -->

					<!-- Starts-Number-Scroller-Animation-JavaScript -->
					<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
					<script src="js/easyResponsiveTabs.js"></script>

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