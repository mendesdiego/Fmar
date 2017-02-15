<html>
<head>
	<link rel = "shortcut icon" href = "img/favicon.png " />
	<title>Faculdade Martins</title>
	<script src = "js/jquery-1.9.1.js"></script>
	<script type = "text/javascript" src = "js/jquery.freezeheader.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "css/grade.css">
	<meta http-equiv = "Content-Type" content = "text/html; charset=iso-8859-1">
	<link rel = "stylesheet" href = "css/informacoes.css">
	<link rel='stylesheet' id='Bootstrap-css'  href='http://faculdadealfa.edu.br/wp-content/themes/alfa/css/bootstrap.css?ver=3.3.6' type='text/css' media='screen' />
	<link rel='stylesheet' id='Font Awesome-css'  href='http://faculdadealfa.edu.br/wp-content/themes/alfa/css/font-awesome.css?ver=4.5.0' type='text/css' media='screen' />
	<link rel='stylesheet' id='effects-css'  href='http://faculdadealfa.edu.br/wp-content/themes/alfa/css/effects.css?ver=1.0.0' type='text/css' media='screen' />
	<link rel='stylesheet' id='bwg_font-awesome-css'  href='http://faculdadealfa.edu.br/wp-content/plugins/photo-gallery/css/font-awesome/font-awesome.css?ver=4.6.3' type='text/css' media='all' />

	<style type="text/css">
		#mask {
			position:absolute;
			left:0;
			top:0;
			z-index:9000;
			background-color:#000;
			display:none;
		}
		#boxes .window {
			position:absolute;
			left:0;
			top:0;
			width:440px;
			height:200px;
			display:none;
			z-index:9999;
			padding:20px;
		}
		#boxes #dialog {
			width: 385px;
			height: 203px;
			color: #fff;
			padding: 10px;
			text-align: center;
			font-size: 2.5em;
			/*background-color:#ffffff;*/
		}
		#boxes #dialog1 {
			width:375px;
			height:203px;
		}
		#dialog1 .d-header {
			background:url(login-header.png) no-repeat 0 0 transparent;
			width:375px;
			height:150px;
		}
		#dialog1 .d-header input {
			position:relative;
			top:60px;
			left:100px;
			border:3px solid #cccccc;
			height:22px;
			width:200px;
			font-size:15px;
			padding:5px;
			margin-top:4px;
		}
		#dialog1 .d-blank {
			float:left;
			background:url(login-blank.png) no-repeat 0 0 transparent;
			width:267px;
			height:53px;
		}
		#dialog1 .d-login {
			float:left;
			width:108px;
			height:53px;
		}
		#boxes #dialog2 {
			background:url(notice.png) no-repeat 0 0 transparent;
			width:326px;
			height:229px;
			padding:50px 0 20px 25px;
		}
		.close{display:block; text-align:right;}
		.depoimento_box{
			background: url(images/depoimento-linha.jpg) center bottom no-repeat;
			height: 100%!important ;
		}

		#noticias > h1{
			font-size: 25px;
			padding-left: 18px;
			color: #3C3C3C;
		}

		.box950 {
			width: 67%!important;
			height: auto;
		}

		.col-md-6 {
			width: 62%!important;
		}



	</style>
</head>
<body>

	<?php include_once('topo.html') ?>

	<div class = "wrapper">
		<div class="col-md-12">

			<?php
			require('conexao.php');
			$query = "SELECT * FROM  extensao_educacao ";
			$sql = mysql_query($query, $con) or die(mysql_error());
			while ($linha = mysql_fetch_array($sql)) {
				?>

				<div class="col-md-4">
					<div class="cursos-graduacao-interno">
						<div class="hover ehover4">
							<?php echo "<img src=img/cursos/" . ($linha['NomeImagem']) . " alt='' class='img-responsive wp-post-image'>";?>
							<div class="overlay">
								<?php echo("<h2>" . $linha['NomeCurso'] . "</h2>");?>
								<a href = "informacoes-extensao-educacao.php?IdCurso=<?php echo($linha['IdCurso']); ?>" class="link-grid">
									<button class="info">Saiba mais</button>
								</a>
							</div>
						</div>
					</div>
				</div>

				<?php
			}
			?>
		</div>
	</div>

	<?php include_once('rodape.php') ?>
</body>
</html>