<!DOCTYPE html>
<html lang = "en">
<head>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-61163900-14', 'auto');
		ga('send', 'pageview');

	</script> 

	<link rel="shortcut icon" href="img/favicon.png " />
	<meta name = "viewport" id = "viewport"
	content = "width=device-width,minimum-scale=1.0,maximum-scale=3.0,initial-scale=1.0" />
	<script src = "js/min/jquery-v1.10.2.min.js" type = "text/javascript"></script>
	<link rel = "stylesheet" href = "css/style.css">
	<link rel = "stylesheet" href = "css/paginas.css">
	<link rel = "stylesheet" href = "css/responsivo.css">
	<meta charset = "UTF-8">
	<title>Processo de Seleção</title>


	<!--########## MODAL ########## -->

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> 
	<script type="text/javascript">

		$(document).ready(function() {	

			$('a[name=modal]').click(function(e) {
				e.preventDefault();

				var id = $(this).attr('href');

				var maskHeight = $(document).height();
				var maskWidth = $(window).width();

				$('#mask').css({'width':maskWidth,'height':maskHeight});

				$('#mask').fadeIn(1000);	
				$('#mask').fadeTo("slow",0.8);	

		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();

		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);

		$(id).fadeIn(2000); 

	});

			$('.window .close').click(function (e) {
				e.preventDefault();

				$('#mask').hide();
				$('.window').hide();
			});		

			$('#mask').click(function () {
				$(this).hide();
				$('.window').hide();
			});			

		});

	</script>
	<style type="text/css">
		body {
			font-family:verdana;
			font-size:15px;
		}

		a {color:#333; text-decoration:none}
		a:hover {color:#ccc; text-decoration:none}

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

	</style>



</head>
<body>
	<div id = "containner" class = "containner100">

		<!-- ###################################################### -->

		<?php include("topo.html") ?>


		<!-- ###################################################### -->
		<div id = "conteudo">

			<p align="center">
				<img src="http://famart.com.br/images/banner_site_famart1214x170.jpg" style="margin-top: 30px;width: 920px!important;">
			</p>

			<div id = "box950" class = "box950 centraliza  ">

				<div class = "infocontato">
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

						.botao-azul{
							background: #33506d;
							border: none;
							border-bottom: 2px solid #102d4b;
							color: #ffffff;
							cursor: pointer;
							font-weight: bold;
							font-size: 2.5em;
							min-width: 65px;
							padding: 0px;
							text-align: center;
							width: 68.7%;
							line-height: 2.5;
							margin-bottom: 10px;
						}


						.ico-inscricao-p {
							background: url("images/cadeado.png") no-repeat left center;
						}


						.btn-facebook{
							border-radius: 0;
							background-color: #33506d;
							padding-left: 0;
							padding: 0.7em;
							border: 0 none;
							color: #ffffff;
							cursor: pointer;
							font-weight: bold;
							font-size: 2em;
							min-width: 65px;
							text-align: center;
							border-bottom: 2px solid #1c2935;
						}
						.btn-facebook > span{
							padding: 10px; 
							margin-right: 12px; 
						}
						.btn-facebook:hover,
						.btn-facebook:active,
						.btn-facebook:focus{
							background:#283e54;
						}
						/*.btn-facebook:hover > span,
						.btn-facebook:active > span,
						.btn-facebook:focus > span{
							background:#1c2935;
						}*/

						.box-botao-grande {
							background: #34495e;
							margin-bottom: 10px;
							padding: 2%;
							border-bottom: solid 4px #273748;
							width: 60%;
							margin: 0 auto;
							font-size: 0.8em;
						}

						.box-texto-btn{
							color: #FFF;
							font-weight: 700;
							font-size: 2em;
							font-family: 'Montserrat', sans-serif;
						}

					</style>
					<div id = "noticias">
						<h1 style="margin-bottom: -10px; margin-top: 20px;">Vestibular Agendado FAMART 2º Semestre/2016</h1>
						<hr>
					</div>

					<TR>
						<TD>
							<p style="font-size:14px;">SUA ÚLTIMA CHANCE DE CURSAR PEDAGOGIA ESTE SEMESTRE!</p>
							<p style="margin-top: 13px;">A <strong>FAMART – Faculdade Martins</strong> está lhe proporcionando esta última chance para iniciar seu curso de Pedagogia ainda este semestre.</p>
							<p style="margin-top: 13px;">Você pode se inscrever em nosso <strong>Vestibular Agendado</strong> e garantir sua vaga!</p>
							<p style="margin-top: 13px;">Escolha o dia<span style="color:red">*</span> e horário que seja melhor para você para realização de sua prova.</p>
							<p style="margin-top: 13px;">Dúvidas poderão ser esclarecidas pelo telefone <strong>0800 037 4212</strong> ou <strong>(37)3241-4212</strong>.</p>
							<p style="margin-top: 13px; font-size:10px"><span style="color:red">*</span>Exceto sábado e domingo. Última dia para agendamento 29/07.</p>


							<a href="inscricao/" class="box-texto-btn">
								<div style="margin-top: 50px;" class="box-botao-grande" align="center">
									QUERO AGENDAR MINHA PROVA AGORA
								</div>
							</a>

							<br/>

							<p style="margin-top: 20px;">
								→ <a href="http://famart.com.br/EDITAL-VESTIBULAR-AGENDADO-FAMART.pdf" target="_blank">Clique aqui para acessar o EDITAL Nº2/2016</a>
							</p>

							<p style="margin-top: 13px;">
								→ <a href="http://famart.com.br/edital-processo-de-selecao-famart.pdf" target="_blank">Confira o Conteúdo Programático da prova</a>
							</p>

							<p style="margin-top: 13px;">
								→ Saiba os documentos necessários para matrícula, clicando <a href="http://famart.com.br/edital-processo-de-selecao-famart.pdf" target="_blank"><em>aqui</em></a>.
							</p>

						</TD>
					</TR>

					<br />
				</div>
			</div>
		</div>
	</div>


	<?php include('rodape.php') ?>
</div>

<!-- ###################################################### -->

<div id="boxes">
	<div id="dialog" class="window">
		<a href="#" class="close" style="color: #fff; font-size: 0.9em;">x</a>
		Que pena! :(<br />
		Inscrições encerradas.
	</div>
	<!-- Máscara para cobrir a tela -->
	<div id="mask"></div>
</div>

</body>
</html>
