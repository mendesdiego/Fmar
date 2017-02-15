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
	<title>Institucional - Faculdade Martins</title>

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
				<style>
					#texto {
						width: 90%;
						text-align: justify;
						margin: 0 auto;
					}

					#form1 > fieldset > p {
						margin: 10px;
					}

					#info {
						width: 100%;
					}

					#tabelaw {
						width: 100%;
						float: left;
						margin: 10px 0;
					}

					#nom {
						width: 200px;
						float: left;
						margin: 5px 0;
					}

					#dados {
						width: 450px;
						margin: 10px 0;
					}

					#tabelainstitucional > tbody > tr > td {
						height: 23px;
						width: 194px;
					}

					p * {
						line-height: 22px;
					}

					#noticias{
						width: 100%;
					}

					#page-wrap {
						width: 100%; 
					}
					.tabs {
						position: relative;   
						min-height: 200px; /* This part sucks */
						clear: both;
						margin: 25px 0;      
					}
					.tab {
						/*float: left; */     
						height: 41px; 
					}
					.tab label {
						background: #eee;
						padding: 9px;
						border: 0px solid #ccc;
						margin-left: -1px;
						position: relative;
						left: 1px;
						width: 14%;
						display: block;
					}

					.tab [type=radio] {
						display: none;   
					}
					.content {
						height: 975px;
						position: absolute;
						top: 0px;
						left: 18%;
						background: white;
						right: 0;
						bottom: 0;
						padding-top: 0;
						/* padding-left: 2%; */
						/* border: 1px solid #ccc; */
					}
					[type=radio]:checked ~ label {
						background: #160959;
						border-bottom: 1px solid white;
						z-index: 2;
						color: #fff;
					}
					[type=radio]:checked ~ label ~ .content {
						z-index: 1;
					}

					#amazon_scroller3 {
						left: -19px !important;
						border: 1px solid rgb(153, 153, 153);
						padding: 6px;
						width: 933px!important;
						height: 75px!important;
						position: relative;
					}

					.titulo-h1{
						font-size: 25px;
						margin-bottom: 2%;
						color: #3C3C3C;
					}



				</style>

			</style>
			<div id = "noticias">
				<h1>Responsabilidade Social</h1>
				<hr>
			</div>

			<div id="page-wrap">

				<div class="wrap">
					<div class="main">
						A FAMART também faz parte da Campanha da Responsabilidade Social do Ensino Superior Particular e carrega com o orgulho o selo que isso representa. <br><br>

						A campanha busca um futuro melhor para a sociedade e acredita que isso é responsabilidade de todos nós. Quando se busca essa meta em grupo, os resultados são ainda melhores.<br><br>

						Clique nas imagens abaixo para conhecer melhor a campanha.<br><br>

						<div style="text-align: center;">
							<a href="http://www.sisdia.abmes.org.br/hotsite/index/id/8844/ano/2015/" target="blank">
								<img src="img/campanha-social.png">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	



	<?php include('rodape.php') ?>
</div>

<!-- ###################################################### -->

</body>
</html>
