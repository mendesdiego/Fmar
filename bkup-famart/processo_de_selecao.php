<!DOCTYPE html>
<html lang = "en">
<head>
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
				<img src="images/banner---paginas---Famart.png" style="margin-top: 30px;width: 920px!important;">
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
							font-size: 2.5em;
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

					</style>
					<div id = "noticias">
						<h1>Processo de Seleção Famart</h1>
						<hr>
					</div>

					<TR>
						<TD>
							<p>Bem-vindo(a) ao Processo Seletivo de bolsas de estudo da <strong>Famart – Faculdade Martins</strong> para o curso de Pedagogia presencial em Itaúna.</p>
							<p style="margin-top: 13px;">Nesse processo o candidato concorre a descontos nas mensalidades proporcionais ao resultado alcançado na prova.</p>
							<p style="margin-top: 13px;">As provas serão realizadas nos dias <strong>09 e 16 de julho</strong> de 2016 nos turnos da manhã e tarde, conforme o regulamento, na Faculdade Famart - Campus Itaúna.</p>
							<p style="margin-top: 13px;">As inscrições são realizadas apenas pela internet gratuitamente.</p>
							<p style="margin-top: 13px;">Mais informações: <strong>0800 037 4212</strong> ou <strong>(37) 3241-4212</strong></p>
							<p style="margin-top: 13px;">Esperamos sua inscrição e BOA SORTE!</p>

							<div style="margin-top: 50px;" align="center">
								<a href="#dialog" name="modal" class="btn btn-primary btn-facebook">
									<span class="ico-inscricao-p"></span> FAÇA AGORA SUA INSCRIÇÃO
								</a>
							</div>

							<br/>

							<p style="margin-top: 20px; text-align:center;">→ <a href="edital-processo-de-selecao-famart.pdf" target="_blank">Clique aqui para ler o <em>Edital</em></a></p>

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
