<!DOCTYPE html>
<html lang = "en">
<head>
	<link rel="shortcut icon" href="img/favicon.png " />
	<meta name = "viewport" id = "viewport"
	content = "width=device-width,minimum-scale=1.0,maximum-scale=3.0,initial-scale=1.0" />
	<script src = "http://famart.com.br/js/min/jquery-v1.10.2.min.js" type = "text/javascript"></script>
	<link rel = "stylesheet" href = "http://famart.com.br/css/style.css">
	<link rel = "stylesheet" href = "http://famart.com.br/css/paginas.css">
	<meta charset = "UTF-8">
	<title>Resultado do Processo Seletivo</title>

	<style type="text/css">
		/* min-width */
		@media screen and (max-width: 900px) {
			.botao-verde {
				width: 100%!important;
			}
		}


	</style>



</head>
<body>
	<div id = "containner" class = "containner100">

		<!-- ###################################################### -->

		<?php include("topo.html") ?>


		<!-- ###################################################### -->
		<div id = "conteudo">

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

						.botao-verde {
							width: 23%;

							/* height: 23%; */
							font-size: 1.5em;
							background: #338f65;
							color: #fff;
							border: 0;
							padding: 1.4%;
							border-bottom: solid #235f44;
						}

					</style>
					<div id = "noticias">
						<h1 style="margin-top: 15px; margin-bottom: -11px;">Resultado do Processo Seletivo</h1>
						<hr>
					</div>
					<TR>
						<TD>
							<p>
								<span style="font-size:1.4em;">O <strong>resultado</strong> já esta disponível!</span> <br>
								
								Confira abaixo a lista de aprovados no Processo Seletivo da FAMART para Bolsas de Estudo. <br>
								
								Os <strong>contemplados</strong> serão contatados e receberão mais informações sobre o percentual alcançado na prova e o valor do desconto.
								<br><br>

								<strong>Clique abaixo para conferir o resultado:</strong><br>

								<a href="http://famart.com.br/famart-resultado-processo-seletivo.pdf" class="box-texto-btn">
									<input type="button" name="button" id="button" value="VER RESULTADO" class="botao-verde">
								</a>

								<br><br>

								<a href="http://famart.com.br/famart-gabarito-processo-seletivo.pdf" target="blank" class="box-texto-btn">
									<input type="button" name="button" id="button" value="GABARITO" class="botao-verde" style="background: #891f45; border-bottom: solid #4f0f26;">
								</a>

								<br><br>

								Agradecemos a participação de todos e desejamos <strong>BONS ESTUDOS!</strong><br><br>
								
							</p>
						</TD>
					</TR>
				</div>
			</div>
		</div>
	</div>


	<?php include('rodape.php') ?>
</div>

<!-- ###################################################### -->

</body>
</html>
