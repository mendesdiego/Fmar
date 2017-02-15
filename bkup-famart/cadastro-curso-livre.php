<!DOCTYPE html>
<html lang = "en">
<head>
	<link rel="shortcut icon" href="img/favicon.png " />
	<link rel = "stylesheet" href = "css/style.css">
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
	<!-- <script src="js/jquery.js" type="text/javascript"></script>-->
	<script type = "text/javascript" src = "js/cep.js"></script>
	<title>Matricule-se</title>

	<style type="text/css">
		.botao-enviar{
			width: 100%;
			float: right;
			height: 46px;
			font-size: 1.5em;
			font-weight: bold;
			margin-top: 50px;
		}

		input[type="button"], input[type="submit"] {
			background: rgb(41, 150, 197);
			/* width: 22%; */
			height: 44px;
			color: white;
			margin: 5px 0;
		}
	</style>

</head>
<body>
	<?php include_once 'topo.html' ?>
	<script src = "js/highlight.min.js"></script>
	<script type = "text/javascript" src = "http://code.jquery.com/jquery-latest.min.js"></script>
	<script type = "text/javascript" src = "js/bootstrap.min.js"></script>
	<script type = "text/javascript" src = "js/jquery.mask.min.js"></script>
	<script type = "text/javascript">
		$(function () {
			$('.ano').mask('0000');
			$('.rg').mask('AA-99.999.999');
			$('.date').mask('00/00/0000');
			$('.time').mask('00:00:00');
			$('.date_time').mask('00/00/0000 00:00:00');
			$('.cep').mask('00000-000');
			$('.phone').mask('0000-0000');
			$('.phone_with_ddd').mask('(00) 0000-00000');
			$('.phone_us').mask('(000) 000-0000');
			$('.mixed').mask('AAA 000-S0S');
			$('.ip_address').mask('099.099.099.099');
			$('.percent').mask('##0,00%', {reverse: true});
			$('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
			$('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
			$('.fallback').mask("00r00r0000", {
				translation: {
					'r': {
						pattern: /[\/]/,
						fallback: '/'
					},
					placeholder: "__/__/____"
				}
			});

			$('.cep_with_callback').mask('00000-000', {
				onComplete: function (cep) {
					console.log('Mask is done!:', cep);
				},
				onKeyPress: function (cep, event, currentField, options) {
					console.log('An key was pressed!:', cep, ' event: ', event, 'currentField: ', currentField.attr('class'), ' options: ', options);
				},
				onInvalid: function (val, e, field, invalid, options) {
					var error = invalid[0];
					console.log("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
				}
			});

			$('.crazy_cep').mask('00000-000', {
				onKeyPress: function (cep, e, field, options) {
					var masks = ['00000-000', '0-00-00-00'];
					mask = (cep.length > 7) ? masks[1] : masks[0];
					$('.crazy_cep').mask(mask, options);
				}
			});

			$('.cpf').mask('000.000.000-00', {reverse: true});
			$('.money').mask('#.##0,00', {reverse: true});

			var SPMaskBehavior = function (val) {
				return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
			},
			spOptions = {
				onKeyPress: function (val, e, field, options) {
					field.mask(SPMaskBehavior.apply({}, arguments), options);
				}
			};

			$('.sp_celphones').mask(SPMaskBehavior, spOptions);

			$(".bt-mask-it").click(function () {
				$(".mask-on-div").mask("000.000.000-00");
				$(".mask-on-div").fadeOut(500).fadeIn(500)
			})

			$('pre').each(function (i, e) {
				hljs.highlightBlock(e)
			});
		});
	</script>
	<link rel = "stylesheet" href = "css/cadastrar.css">
	<?php
	require 'conexao.php';
	$id = isset($_GET['IdCurso']) ? $_GET['IdCurso'] : '';
	$query = "SELECT * FROM cursos_livres c WHERE c.idCurso =$id";
	$sql = mysql_query($query, $con);
	while ($linha = mysql_fetch_array($sql)) {

		{
		}
		?>
		<div id = "containner" class = "box800 centraliza">
			<form name="formulario-inscricao" method="POST" action="pgto-curso-livre.php" id="formulario-inscricao">
				<fieldset>
					<div class = "legenda">
						<p></p>
					</div>
					<table>
						<tr>
							<td width = "177" class = "label">
								<label id = "ListaCurso" for = "ListaCurso">Curso:</label>
							</td>
							<td width = "460" class = "field">
								<labelfor = "Curso"></label>
									<?php echo $linha['NomeCurso']; ?>
									<input type = "hidden" name = "Curso" id = "Curso" value = "<?php echo $linha['NomeCurso']; ?>" />
								</td>

							</tr>
							<tr>
								<td colspan = "3" class = "label">&nbsp;</td>
							</tr>
							<tr>
								<td width = "177" class = "label"><label id = "ListaCurso" for = "ListaCurso">Valor do Curso:</label>
								</td>
								<td width = "460" class = "field">
									<label for = "Curso"></label>
									<font color = '#3399CC'><strong><?php echo 'R$ 49,90'; ?></strong></font>
									<input type = "hidden" name = "Valor" id = "Valor" size = "20" value="R$ 49,90" />
								</td>
							</tr>
						</table>
					</fieldset>
					<fieldset>
						<table>
							<tr>
								<td colspan = "3" class = "label">&nbsp;</td>
							</tr>
							<tr>
								<td width = "159" class = "label"><label id = "CPF" for = "CPF">CPF:</label></td>
								<td class = "field">
									<input name = "cpf" class = "cpf" type = "text" id = "cpf" size = "20" required />
									Somente números
								</td>
								<td width = "250" class = "status"></td>
							</tr>
							<tr>
								<td class = "label">Identidade (RG):</td>
								<td class = "field"><input required name = "RG" class = "rg" type = "text" id = "RG"
									size = "20" /></td>
									<td class = "status"></td>
								</tr>
								<tr>
									<td class = "label"><label id = "NomeCompleto" for = "NomeCompleto">Nome Completo:</label></td>
									<td class = "field">
										<input required name = "NomeCompleto" type = "text" id = "NomeCompleto" value = "" size = "40" /></td>
										<td class = "status"></td>
									</tr>
									<tr>
										<td class = "label">Telefone Fixo:</td>
										<td colspan = "2" class = "field">
											<input name = "TelFixo" required class = "phone_with_ddd" type = "text" id = "TelFixo"
											size = "20" />
										</td>
									</tr>
									<tr>
										<td class = "label">Telefone Celular:</td>
										<td colspan = "2" class = "field">
											<input name = "TelCel" required class = "phone_with_ddd" type = "text" id = "TelCel"
											size = "20" />
										</td>
									</tr>
									<tr>
										<td class = "label"><label id = "Email" for = "Email">Email:</label></td>
										<td class = "field">
											<input required name = "Email" type = "text" id = "Email" value = "" size = "40" />
										</td>
										<td class = "status"></td>
									</tr>
									<tr>
										<td class = "label">Sexo:</td>
										<td class = "field"><input required type = "radio" name = "Sexo" value = "Masculino" />
											Masculino
											<input type = "radio" required name = "Sexo" value = "Feminino" />
											Feminino
										</td>
										<td class = "status"></td>
									</tr>
									<tr>
										<td class = "label">Formação:</td>
										<td class = "field">
											<input required name = "Formacao" type = "text" id = "Formacao" value = "" size = "40" />
										</td>
										<td class = "status">&nbsp;</td>
									</tr>
									<tr>
										<td class = "label">Ano de Conclusão:</td>
										<td class = "field">
											<input required class = "ano" name = "AnoConclusao" type = "text"  id = "AnoConclusao"
											value = "" size = "10" /></td>
											<td class = "status">&nbsp;</td>
										</tr>
										<tr>
											<td class = "label">Data de Nascimento:</td>
											<td class = "field"><input required name = "DNascimento" class = "date" type = "text"
												id = "DNascimento"
												size = "20" /></td>
												<td class = "status">&nbsp;</td>
											</tr>
											<tr>
												<td colspan = "3" class = "label">&nbsp;</td>
											</tr>
										</table>
									</fieldset>
									<fieldset>
										<table>
											<tr>
												<td colspan = "3" class = "label">&nbsp;</td>
											</tr>
											<tr>
												<td width = "135" class = "label"><label id = "CEP" for = "CEP">CEP:</label></td>
												<td width = "270" class = "field">
													<input required class = "cep" name = "cep" type = "text" id = "cep" size = "20" />
													<button id = "btn" onClick = "return getEndereco()">Consultar</button>
												</td>
												<td width = "276" class = "status"></td>
											</tr>
											<tr>
												<td class = "label"><label id = "Endereco" for = "Endereco">Endereço:</label></td>
												<td class = "field"><input required name = "endereco" type = "text" id = "endereco" size = "40"
													maxlength = "100" /></td>
													<td class = "status"></td>
												</tr>
												<tr>
													<td class = "label"><label id = "Numero" for = "Numero">Numero:</label></td>
													<td class = "field"><input required name = "numero" type = "text" id = "numero" size = "10" />
													</td>
													<td class = "status"></td>
												</tr>
												<tr>
													<td class = "label"><label id = "Bairro" for = "Bairro">Bairro:</label></td>
													<td class = "field"><input required name = "Bairro" type = "text" id = "Bairro" size = "40"
														maxlength = "100" /></td>
														<td class = "status"></td>
													</tr>
													<tr>
														<td class = "label"><label id = "Cidade" for = "Cidade">Cidade:</label></td>
														<td class = "field"><label>
															<input name = "cidade" required type = "text" id = "cidade" size = "40"
															maxlength = "100" />
														</label>
													</td>
													<td class = "status"></td>
												</tr>
												<tr>
													<td class = "label"><label id = "Estado" for = "Estado">Estado:</label></td>
													<td class = "field">
														<select name = "estado" id = "estado" style="margin-left: 0px;">
															<option value = "" selected = "selected">Estado</option>
															<option value = "AC">AC</option>
															<option value = "AL">AL</option>
															<option value = "AP">AP</option>
															<option value = "AM">AM</option>
															<option value = "BA">BA</option>
															<option value = "CE">CE</option>
															<option value = "DF">DF</option>
															<option value = "GO">GO</option>
															<option value = "ES">ES</option>
															<option value = "MA">MA</option>
															<option value = "MT">MT</option>
															<option value = "MS">MS</option>
															<option value = "MG">MG</option>
															<option value = "PA">PA</option>
															<option value = "PB">PB</option>
															<option value = "PR">PR</option>
															<option value = "PE">PE</option>
															<option value = "PI">PI</option>
															<option value = "RJ">RJ</option>
															<option value = "RN">RN</option>
															<option value = "RS">RS</option>
															<option value = "RO">RO</option>
															<option value = "RR">RR</option>
															<option value = "SP">SP</option>
															<option value = "SC">SC</option>
															<option value = "SE">SE</option>
															<option value = "TO">TO</option>
														</select>
													</td>
													<td class = "status"></td>
												</tr>
												<tr>
													<td colspan = "3" class = "label">&nbsp;</td>
												</tr>
											</table>
										</fieldset>
										<fieldset>
											<table>
												<tr>
													<td colspan = "3" class = "label">&nbsp;</td>
												</tr>
												<tr>
													<td class = "label"><label id = "Data" for = "Data">Data da Matrícula:</label></td>
													<td width = "128" class = "field"><input name = "DataMatricula" type = "text"
														id = "DataMatricula"
														value = "<?php echo $today = date("d-m-y"); ?>"
														size = "15"
														maxlength = "100" /></td>
														<td width = "389" class = "status"></td>
													</tr>

													<tr>
														<td colspan = "3" class = "label">&nbsp;</td>
													</tr>

													<tr>
														<td class = "label">Turno para Contato:</td>
														<td class = "field" colspan = "2"><input type = "radio" name = "HorarioParaEntrarmosEmContato"
															value = "Manhã" />
															Manhã <input type = "radio" name = "HorarioParaEntrarmosEmContato" value = "Tarde" />
															Tarde
														</td>
													</tr>

													<tr>
														<td colspan = "3" class = "label">&nbsp;</td>
													</tr>

													<tr>
														<td class = "class="field"">
															<label id = "como_conheceu" for = "como_conheceu">Como nos conheceu?</label></td>
															<td class = "field">
																<select class="campos-select" name="como_conheceu" required style="height: 35px; margin-top: 5px; width: 250px; margin-bottom: 5px; padding-left: 0px;">
																	<option value="">Selecione uma opção</option>
																	<option value="Anúncio em sites">Anúncio em sites</option>
																	<option value="Busca na internet">Busca na internet</option>
																	<option value="Cartaz">Cartaz</option>
																	<option value="E-mail Marketing">E-mail Marketing</option>
																	<option value="Vendedor Externo">Vendedor Externo</option>
																	<option value="Indicação">Indicação</option>
																	<option value="Outdoor">Outdoor</option>
																	<option value="Palestra/Visita">Palestra/Visita</option>
																	<option value="Panfleto">Panfleto</option>
																	<option value="Rádio">Rádio</option>
																	<option value="Redes Sociais">Redes Sociais</option>
																	<option value="Telemarketing Ativo">Telemarketing Ativo</option>
																</select>

															</td>
															<td class = "status"></td>
														</tr>
														<tr>
															<td colspan = "3" class = "label">&nbsp;</td>
														</tr>

														<tr>
															<td width = "164" class = "label"><label id = "lsignupsubmit" for = "signupsubmit"></label></td>
															<td class = "field" colspan = "2">
																<input type="submit" class="botao-enviar submit" name="inscricaoonline" id="submit" value="Enviar" style="margin-top: -60px; height: 46px; width: 20%;"/>
															</td>
														</tr>
														<tr>
															<td class = "label">&nbsp;</td>
															<td class = "field" colspan = "2"></td>
														</tr>
													</table>
												</fieldset>
											</form>
										</div>
										<?php
									}
									?>
									<?php include 'rodape.php'; ?>
								</body>
								</html>
