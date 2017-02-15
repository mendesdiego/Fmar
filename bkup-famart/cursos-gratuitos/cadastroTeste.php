<?php
if($_POST['Enviar']!="")
{  
	require ("conexao.php");

	$OpcaoUm = isset($_POST['OpcaoUm']) ? $_POST['OpcaoUm'] : null;
	$OpcaoDois = isset($_POST['OpcaoDois']) ? $_POST['OpcaoDois'] : null;
	$FormaPagamentoUm = $_POST["FormaPagamentoUm"];
	$FormaPagamentoDois = $_POST["FormaPagamentoDois"];
	$CPF = $_POST["CPF"];
	$RG = $_POST["RG"];
	$NomeCompleto = $_POST["NomeCompleto"];
	$DDDFixo = $_POST["DDDFixo"];
	$TelFixo = $_POST["TelFixo"];
	$DDDCel = $_POST["DDDCel"];
	$TelCel = $_POST["TelCel"];
	$Email = $_POST["Email"];
	$Sexo = $_POST["Sexo"];
	$Formacao = $_POST["Formacao"];
	$AnoConclusao = $_POST["AnoConclusao"];
	$DNascimento = invertedata($_POST["DNascimento"]);
	$Cep = $_POST["cep"];
	$Endereco = $_POST["endereco"];
	$Numero = $_POST["numero"];
	$Bairro = $_POST["Bairro"];
	$Cidade = $_POST["cidade"];
	$Estado = $_POST["estado"];
	$DataMatricula = invertedata($_POST['DataMatricula']);
	$HorarioParaEntrarmosEmContato = $_POST["HorarioParaEntrarmosEmContato"];
	$ind_nomecompleto = (array) $_POST['ind_nomecompleto'];
	$ind_telefone = (array) $_POST['ind_telefone'];
	$ind_email = (array) $_POST['ind_email'];
	$indicacoes = '';
	$nome_gestor = $_POST['nome_gestor'];
	$cidade_gestor = $_POST['cidade_gestor'];



	$num_indicacoes = count($ind_nomecompleto);
	//echo $indicacoes;
	//var_dump($_POST); exit;
	$query = "INSERT INTO matricula_dosedupla 
	(OpcaoUm, OpcaoDois, FormaPagamentoUm, FormaPagamentoDois, CPF, RG, NomeCompleto, DDDFixo, TelFixo, DDDCel, TelCel, Email, Sexo, Formacao,
		AnoConclusao, DNascimento, CEP, Endereco, Numero, Bairro, Cidade, Estado, DataMatricula,
		HorarioParaEntrarmosEmContato, num_indicacoes, indicacoes , nome_gestor , cidade_gestor) 
VALUES 
('$OpcaoUm','$OpcaoDois', '$FormaPagamentoUm','$FormaPagamentoDois', '$CPF', '$RG', '$NomeCompleto', '$DDDFixo', '$TelFixo', '$DDDCel', '$TelCel', '$Email', '$Sexo', 
	'$Formacao', '$AnoConclusao', '$DNascimento', '$Cep', '$Endereco', '$Numero', '$Bairro', '$Cidade', '$Estado', '$DataMatricula',
	'$HorarioParaEntrarmosEmContato', '$num_indicacoes', '$indicacoes', '$nome_gestor', '$cidade_gestor')";
				// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("phpmailer/class.phpmailer.php");
require("/var/www/institutocotemar.com.br/email_conf.php");
				// Inicia a classe PHPMailer
$mail = new PHPMailer();
				// Define os dados do servidor e tipo de conexão
				// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				$mail->IsSMTP(); // Define que a mensagem será SMTP
				$mail->Host = EMAIL_HOST; // Endereço do servidor SMTP
				$mail->SMTPAuth = EMAIL_SMTP_AUTH; // Usa autenticação SMTP? (opcional)
				$mail->SMTPSecure = EMAIL_SMTP_SECURE;
				$mail->port = EMAIL_PORT;
				$mail->Username = EMAIL_USERNAME; // Usuário do servidor SMTP
				$mail->Password = EMAIL_PASSWORD; // Senha do servidor SMTP
				// Define o remetente
				// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				$mail->From = "atendimento@institutocotemar.com.br"; // Seu e-mail
				$mail->FromName = "Instituto Cotemar"; // Seu nome
				$mail->AddReplyTo(EMAIL_REPLY_TO);
				// Define os destinatário(s)
				// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				$mail->AddAddress($Email, $NomeCompleto);
				//$mail->AddAddress('ciclano@site.net');


				/*$mail->AddBCC('matricula@grupoandrademartins.com.br', 'Contato Via Site'); // Copia
				$mail->AddBCC('suporte@grupoandrademartins.com.br', 'Contato Via Site'); // Copia
				$mail->AddBCC('junio@cotemar.com.br', 'Contato Via Site'); // Copia*/
				$mail->AddBCC('suporte03@grupoandrademartins.com.br', 'Contato Via Site'); // Copia


				//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
				// Define os dados técnicos da Mensagem
				// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
				$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
				// Define a mensagem (Texto e Assunto)
				// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				$mail->Subject  = "Instituto Cotemar - Matrícula On-Line (não responder)"; // Assunto da mensagem
				$array_nomes = array(
					'{OpcaoUm}','{OpcaoDois}', '{FormaPagamentoUm}', '{FormaPagamentoDois}', '{CPF}', '{RG}', '{NomeCompleto}', '{DDDFixo}', '{TelFixo}',
					'{DDDCel}', '{TelCel}', '{Email}', '{Sexo}', '{Formacao}', '{AnoConclusao}', '{DNascimento}',
					'{Cep}', '{Endereco}', '{Numero}', '{Bairro}', '{Cidade}', '{Estado}', '{DataMatricula}',
					'{HorarioParaEntrarmosEmContato}', '{Indicacoes}', '{nome_gestor}', '{cidade_gestor}'
					);
				$array_valores = array(
					$_POST['OpcaoUm'], $_POST['OpcaoDois'], $_POST['FormaPagamentoUm'], $_POST['FormaPagamentoDois'], $_POST['CPF'], $_POST['RG'], $_POST['NomeCompleto'], $_POST['DDDFixo'], $_POST['TelFixo'],
					$_POST['DDDCel'], $_POST['TelCel'], $_POST['Email'], $_POST['Sexo'], $_POST['Formacao'], $_POST['AnoConclusao'], $_POST['DNascimento'],
					$_POST['cep'], $_POST['endereco'], $_POST['numero'], $_POST['Bairro'], $_POST['cidade'], $_POST['estado'], $_POST['DataMatricula'],
					$_POST['HorarioParaEntrarmosEmContato'], nl2br($indicacoes) ,
					$_POST['nome_gestor'], $_POST['cidade_gestor']
					);
				$template = file_get_contents("../templates/matricula-dosedupla.tpl");
				$mensagem = str_replace($array_nomes, $array_valores, $template);
				$mail->Body = $mensagem;
				//$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n <IMG class=wp-smiley alt=:) src="http://blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif" nodeIndex="2"> ";
				// Define os anexos (opcional)
				// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
				// Envia o e-mail
				$enviado = $mail->Send();
				// Limpa os destinatários e os anexos
				$mail->ClearAllRecipients();
				$mail->ClearAttachments();
				// Exibe uma mensagem de resultado
				/*if ($enviado) {
				echo "<img src='images/sucesso.png' align='absmiddle' />Sua comentário foi armazenado! Um E-mail de notificação foi enviado para: $Email";
				} else {
				echo "O comentário foi registrado em nosso sistema, no entanto, houve uma falha ao enviar a notificação para: $Email<br /><br />";
				echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
			}*/
			$sql=mysql_query($query, $db) or die('ERRO!' . mysql_error());
			$validacao = "1";
			session_start();
			$_SESSION['validacao'] = $validacao;
			header("Location: pgto.php?CPF=$CPF");
		}
		?> 
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>

			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Pré Matrícula OnLine</title>
			<?php
			include("topo.php");
			?>
			<link rel="stylesheet" type="text/css" href="css/paginas.css" />
			<script src="js/jquery.js" type="text/javascript"></script>
			<script src="js/jquery.validate.js" type="text/javascript"></script>
			<script type="text/javascript" src="js/cep.js"></script>
			<script type="text/javascript">  
				$(document).ready(function(){  
					$("#palco > div").hide();  
					$("#Curso").change(function(){  
						$("#Polo").html($("#Polo" + $(this).val()).html());  
					});	
				});  
			</script>
			<script>
				function mascara_TelFixo() {
					if(document.signupform.TelFixo.value.length == 4) {
						document.signupform.TelFixo.value += '-';
					}}
					function mascara_TelCel() {
						if(document.signupform.TelCel.value.length == 4) {
							document.signupform.TelCel.value += '-';
						}
					}
					function mascara_dataN() {
						if(document.signupform.DNascimento.value.length == 2) {
							document.signupform.DNascimento.value += '/';
						}
						if(document.signupform.DNascimento.value.length == 5) {
							document.signupform.DNascimento.value += '/';
						}
					}
				</script> 
				<script>
					function mostrarResultado(box,num_max,campospan){
						var contagem_carac = box.length;
						if (contagem_carac != 0){
							document.getElementById(campospan).innerHTML = contagem_carac + "/";
							if (contagem_carac == 1){
								document.getElementById(campospan).innerHTML = contagem_carac + "/";
							}
							if (contagem_carac >= num_max){
								document.getElementById(campospan).innerHTML = "Limite de caracteres excedido!";
							}
						}else{
							document.getElementById(campospan).innerHTML = "Deixe aqui sua mensagem!";
						}
					}
					function contarCaracteres(box,valor,campospan){
						var conta = valor - box.length;
						document.getElementById(campospan).innerHTML = conta;
						if(box.length >= valor){
							document.getElementById(campospan).innerHTML = "";
							document.getElementById("campo").value = document.getElementById("campo").value.substr(0,valor);
						}	
					}
				</script>
				<script id="demo" type="text/javascript">
					$(document).ready(function() {
	// validate signup form on keyup and submit
	var validator = $("#signupform").validate({
		rules: {
			OpcaoUm: "required",
			OpcaoDois: "required",
			FormaPagamentoUm: "required",
			FormaPagamentoDois: "required",
			NomeCompleto: "required",
			CPF: "required",
			RG: "required",
			Formacao: "required",
			AnoConclusao: "required",
			DNascimento: "required",
			cep: "required",
			endereco: "required",				
			numero: "required",
			Bairro: "required",
			cidade: "required",
			estado: "required",
			/*username: {
				required: true,
				minlength: 2,
				},
			password: {
				required: true,
				minlength: 5
			},
			password_confirm: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},*/
			Email: {
				required: true,
				email: true,
			},
			dateformat: "required",
			terms: "required"
		},
		messages: {
			/*Nome: "Digite seu primeiro Nome",
			Sobrenome: "Digite seu Sobrenome",
			username: {
				required: "Enter a username",
				minlength: jQuery.format("Enter at least {0} characters"),
				remote: jQuery.format("{0} is already in use")
			},
			password: {
				required: "Provide a password",
				rangelength: jQuery.format("Enter at least {0} characters")
			},
			password_confirm: {
				required: "Repeat your password",
				minlength: jQuery.format("Enter at least {0} characters"),
				equalTo: "Enter the same password as above"
			},*/
			Email: {
				required: "Insira um email válido!",
				minlength: "Insira um email válido!"//,
				//remote: jQuery.format("{0} is already in use")
			},
			dateformat: "Choose your preferred dateformat",
			terms: " "
		},
		// the errorPlacement has to take the table layout into account
		errorPlacement: function(error, element) {
			if ( element.is(":radio") )
				error.appendTo( element.parent().next().next() );
			else if ( element.is(":checkbox") )
				error.appendTo ( element.next() );
			else
				error.appendTo( element.parent().next() );
		},
		// specifying a submitHandler prevents the default submit, good for the demo
		/*submitHandler: function() {
			alert("Os dados foram enviados!");
		},*/
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("checked");
		}
	});
});
</script>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-33601004-2']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<script type="text/javascript">
	$(function() {
		numero = 0;
		$("#add").click(function() {
			if (numero < 2 ){
				var  input = '<div class="intens">';
				input += '<span style="padding-left:10px">';
				input += '<label>Nome Completo:<input type="text" name="ind_nomecompleto[]" size="30" /> </label>';
				input += '<label>Telefone:<input type="text" name="ind_telefone[]" size="14" /> </label>';
				input += '<label>Email:<input type="text" name="ind_email[]" size="26" /> </label>';
				input += '</span>';
				input += '<a href="javascript:;" class="del"><img src="../images/remove.png" /></a></div>';
				numero +=1;
				$("#campos").append(input) ;
				return false;
			}
		});
		$(".del").live('click', function(){
			$(this).parent().remove();
			numero -=1;
		});
	});
</script>
<link rel="stylesheet" href="js/jquery.superbox.css" type="text/css" media="all" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-superbox-0.9.1/jquery.superbox.js"></script>
<script type="text/javascript">
	$(function(){
		$('#conteudo').hide();
		$.superbox.settings = {
			closeTxt: "",
			loadTxt: "Carregando...",
				overlayOpacity : .8, // opacidade Fundo
	 			boxWidth : "820", // largura padrão da caixa de
				boxHeight : "600", // altura padrão da caixa de
			};
			$.superbox();
		});
</script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script type="text/javascript">

	$('div#pai').on('click', 'a', function (evt) {
		var that = $(this),
		tio = that.parents().children('div#tio');

		tio.fadeToggle();


		evt.preventDefault();
	});

</script>

<style type="text/css">

	#pai { 
		width: 100%;
		height: 30px;
		padding: 10px;
	}
	#tio {
		width: 100%;
		padding: 30px;
		background: red;
	}
</style>




<!-- ############################# JQUERY DO DROP DOWN DA PROMOÇÃO DOSE DUPLA ############-->

<script language="Javascript">
	function showDiv(div)
	{
		document.getElementById("plano1").className = "invisivel";
		document.getElementById("plano2").className = "invisivel";
		document.getElementById("plano3").className = "invisivel";

		document.getElementById(div).className = "visivel";
	}
</script>
<style>
	.invisivel { display: none; }
	.visivel { visibility: visible; }
</style>


<script language="Javascript">
	function showDiv2(div)
	{
		document.getElementById("plano1div2").className = "invisivel";
		document.getElementById("plano2").className = "invisivel";
		document.getElementById("plano3").className = "invisivel";

		document.getElementById(div).className = "visivel";
	}
</script>
<style>
	.invisivel { display: none; }
	.visivel { visibility: visible; }
</style>


<!-- ############################# JQUERY DO DROP DOWN DA PROMOÇÃO DOSE DUPLA ############-->



<script language="javascript" src="js/funcao.js"></script>


</head>

<?php
$Data = date("d/m/Y");
$Curso = $_GET["Curso"];
?>
<body>
	<table class="tabela">
		<tr>
			<td valign="baseline">
				<h1 id="h1"> MATRÍCULA ON-LINE</h1>
				<div id="signupwrap">
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="766"><div id="formate">DETALHAMENTO</div>
								<div align="justify">Para registrar-se basta  preencher o formulário abaixo! O inscrito estará garantindo a matrícula nesse valor (R$150,00), contudo, este é o valor pago referente apenas a matrícula. As demais mensalidades serão emitidas por boleto bancário e enviado a você pela instituição.</div></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
						</table> 
						<!-- Google Code for Fale Conosco Conversion Page -->
						<script type="text/javascript">
							/* <![CDATA[ */
							var google_conversion_id = 982841178;
							var google_conversion_language = "en";
							var google_conversion_format = "2";
							var google_conversion_color = "ffffff";
							var google_conversion_label = "seSFCJb2pwUQ2u7T1AM"; var google_conversion_value = 0;
							/* ]]> */
						</script>
						<script type="text/javascript"  
						src="//www.googleadservices.com/pagead/conversion.js">
					</script>
					<noscript>
						<div style="display:inline;">
							<img height="1" width="1" style="border-style:none;" alt=""  
							src="//www.googleadservices.com/pagead/conversion/982841178/?value=0&amp;lab
							el=seSFCJb2pwUQ2u7T1AM&amp;guid=ON&amp;script=0"/>
						</div>
					</noscript>    
					<form action="" method="post" name="signupform" id="signupform" autocomplete="off">
						
						<!--<fieldset>
							<legend>Curso escolhido
							</legend><table width="726">
							<tr>
								<td colspan="3" class="label">&nbsp;</td>
							</tr>
							<tr>
								<td width="177" class="label"><label id="ListaCurso" for="ListaCurso">Curso:</label></td>
								<td width="460" class="field"><label for="Curso"></label><?php echo $Curso; ?>
									<input type="hidden" name="Curso" id="Curso" value="<?php echo $Curso; ?>" /></td>
									<td width="73" class="status">&nbsp;</td>
								</tr>
								<tr>
									<td class="label">Forma de Pagamento:</td>
									<td class="field"><label for="FormaPagamento"><s><font color="#F2F5F7">......</font><font color="#FF0000">8 X 255,00</font></s>
										<label for="FormaPagamento"> <s>
											<font color="#F2F5F7"> ..... .</font><font color="#FF0000">15 X R$ 143,00</font></s></label></td>
											<td class="status">&nbsp;</td>
										</tr>
										<tr>
											<td class="label">&nbsp;</td>
											<td align="left"><span class="field">
												<input type="radio" name="FormaPagamento" id="radio2" value="12 Vezes" />
												8 X 204,00
												<label for="FormaPagamento2">
													<input type="radio" name="FormaPagamento" id="radio4" value="18 Vezes" />
													15 X R$ 114,40</label>
												</span></td>
												<td align="left">&nbsp;</td>
											</tr>
											<tr>
												<td class="label">&nbsp;</td>
												<!--<td colspan="2" align="left"><font color="#990000">(Promoção válida de 15/04/14 a 30/04/14. O valor acima é garantido para pagamentos realizados até a data de vencimento)</font></td>
											</tr>
											<tr>
												<td colspan="3" class="label">&nbsp;</td>
											</tr>
										</table>
										<div id="palco">  
											<div id="Administracao"></div>
											<div id="Eletronica"></div>
											<div id="Enfermagem"></div>
											<div id="Informatica"></div>
											<div id="Mineracao"></div>
											<div id="Radiologia"></div>
											<div id="SegurancaTrabalho"></div>
										</div>
									</fieldset> -->
									
									<fieldset>
										<legend>Escolha seu curso:</legend>
										<table width="694">
											<tr>
												<td colspan="3" class="label">&nbsp;</td>
											</tr>
											<tr>
												<td class="label">
													<label id="Manifestacao" for="Manifestacao">Opções de Curso:</label>
												</td>

												<td class="field">
													<select id="OpcaoUm" name="OpcaoUm" onChange="showDiv(this.value);" style="width: 440px;">
														<option>Selecione sua primeira opção...</option>
														<option class="drop">Pós em Direito</option>
														<option value="Direito Adm">Direito Administrativo</option>
														<option value="plano1">Direito do Consumidor</option>
														<option value="plano1">Direito do Trabalho</option>
														<option value="plano1">Direito Empresarial</option>
														<option value="plano1">Direito Imobiliário</option>
														<option value="plano1">Direito Penal</option>
														<option value="plano1">Direito Tributário</option>
														<option class="drop">Pós em Educação</option>
														<option value="plano1">Alfabetização e Letramento</option>
														<option value="plano1">Atendimento Educacional Especializado e a Psicomotricidade</option>
														<option value="plano1">Coordenação Pedagógica e Planejamento</option>
														<option value="plano1">Docência do Ensino Superior</option>
														<option value="plano1">Educação à distância </option>
														<option value="plano1">Educação de Jovens e Adultos</option>
														<option value="plano1">Educação Infantil e Ensino Fundamental</option>
														<option value="plano1">Educação Musical e Ensino de Artes</option>
														<option value="plano1">Ensino Religioso</option>
														<option value="plano1">Gestão e Administração Escolar</option>
														<option value="plano1">Gestão Escolar (Administração, Supervisão, Orientação e Inspeção)</option>
														<option value="plano1">Informática na Educação</option>
														<option value="plano1">Inspeção Escolar</option>
														<option value="plano1">Libras</option>
														<option value="plano1">Língua Portuguesa e Literatura Brasileira</option>
														<option value="plano1">Linguística Aplicada na Educação</option>
														<option value="plano1">Metodologia do Ensino da Língua Portuguesa</option>
														<option value="plano1">Metodologia do Ensino de Filosofia e Sociologia</option>
														<option value="plano1">Orientação Educacional</option>
														<option value="plano1">Pedagogia Empresarial</option>
														<option value="plano1">Psicomotricidade</option>
														<option value="plano1">Psicopedagogia Clínica e Institucional</option>
														<option value="plano1">Supervisão Escolar</option>
														<option value="plano1">Tutoria em Educação EAD </option>
														<option class="drop">Pós em Gestão / MBA</option>
														<option value="plano1">Administração Pública</option>
														<option value="plano1">Gestão da Qualidade</option>
														<option value="plano1">Gestão de Negócios Imobiliários</option>
														<option value="plano1">Gestão e Logística Empresarial</option>
														<option value="plano1">Gestão Estratégica de Negócios</option>
														<option value="plano1">Marketing e Gestão Estratégica</option>
														<option value="plano1">MBA em Auditoria e Perícia Contábil</option>
														<option value="plano1">MBA em Controladoria e Finanças</option>
														<option value="plano1">MBA em Executivo em Marketing</option>
														<option value="plano1">MBA em Gestao de Pessoas e Recursos Humanos</option>
														<option value="plano1">MBA em Planejamento Empresarial </option>
														<option value="plano1">MBA em Segurança Trabalho e Gestao Ambiental</option>
														<option value="plano1">Meio Ambiente, Desenvolvimento e Sustentabilidade</option>
														<option value="plano1">Psicologia das Organizações e do Trabalho</option>
														<option class="drop">Pós em Informática</option>
														<option value="plano1">Gestão do Conhecimento e Tecnologias da Informação</option>
														<option class="drop">Pós em Saúde</option>
														<option value="plano1">Enfermagem do Trabalho Aplicada à Saúde Ocupacional</option>
														<option value="plano1">Farmacologia Aplicada à Atenção Farmacêutica</option>
														<option value="plano1">Gestão e Administração Hospitalar</option>
														<option value="plano1">Neurociência Aplicada à Aprendizagem</option>
														<option value="plano1">Radiologia Aplicada à Proteção Radiológica</option>
														<option value="plano1">Saúde do Idoso: Gestão e Assistência em Gerontologia</option>
														<option value="plano1">Saúde e Segurança do Trabalho</option>
														<option value="plano1">Saúde Pública e Vigilância Sanitária</option>
													</select>
													<div id="plano1" class="invisivel">
														<p>
															<img src="images/check.png">
															&nbsp;Parabéns, você ganhou <strong>20% de desconto</strong> em seu curso!
														</p>
														<p>
															►&nbsp;Selecione a forma de pagamento desejada:
														</p>
														<label for="FormaPagamentoUm">
															<span onClick="AparecerDiv();" style="cursor: pointer;">
																<input type="checkbox" name="FormaPagamentoOpcaoUm" id="FormaPagamentoOpcaoUm" value="12x"> 8 X 204,00
															</span>
														</label>
														<label for="FormaPagamentoUm">
															<span onClick="AparecerDiv();" style="cursor: pointer;">
																<input type="checkbox" name="FormaPagamentoOpcaoUm" id="FormaPagamentoOpcaoUm" value="15x">15 X R$ 114,40
															</span>
														</label>
														<br><br>
														<div id="manipulada" style="display: none;">
															<table width="694">
																<tr>
																	<td colspan="3" class="label">&nbsp;</td>
																</tr>
																<tr>
																	<td class="field">
																		<select id="OpcaoDois" name="OpcaoDois" onChange="showDiv2(this.value);" style="width: 440px;">
																			<option>Selecione sua segunda opção...</option>
																			<option class="drop">Pós em Direito</option>
																			<option value="plano1div2">Direito Administrativo</option>
																			<option value="plano1div2">Direito do Consumidor</option>
																			<option value="plano1div2">Direito do Trabalho</option>
																			<option value="plano1div2">Direito Empresarial</option>
																			<option value="plano1div2">Direito Imobiliário</option>
																			<option value="plano1div2">Direito Penal</option>
																			<option value="plano1div2">Direito Tributário</option>
																			<option class="drop">Pós em Educação</option>
																			<option value="plano1div2">Alfabetização e Letramento</option>
																			<option value="plano1div2">Atendimento Educacional Especializado e a Psicomotricidade</option>
																			<option value="plano1div2">Coordenação Pedagógica e Planejamento</option>
																			<option value="plano1div2">Docência do Ensino Superior</option>
																			<option value="plano1div2">Educação à distância </option>
																			<option value="plano1div2">Educação de Jovens e Adultos</option>
																			<option value="plano1div2">Educação Infantil e Ensino Fundamental</option>
																			<option value="plano1div2">Educação Musical e Ensino de Artes</option>
																			<option value="plano1div2">Ensino Religioso</option>
																			<option value="plano1div2">Gestão e Administração Escolar</option>
																			<option value="plano1div2">Gestão Escolar (Administração, Supervisão, Orientação e Inspeção)</option>
																			<option value="plano1div2">Informática na Educação</option>
																			<option value="plano1div2">Inspeção Escolar</option>
																			<option value="plano1div2">Libras</option>
																			<option value="plano1div2">Língua Portuguesa e Literatura Brasileira</option>
																			<option value="plano1div2">Linguística Aplicada na Educação</option>
																			<option value="plano1div2">Metodologia do Ensino da Língua Portuguesa</option>
																			<option value="plano1div2">Metodologia do Ensino de Filosofia e Sociologia</option>
																			<option value="plano1div2">Orientação Educacional</option>
																			<option value="plano1div2">Pedagogia Empresarial</option>
																			<option value="plano1div2">Psicomotricidade</option>
																			<option value="plano1div2">Psicopedagogia Clínica e Institucional</option>
																			<option value="plano1div2">Supervisão Escolar</option>
																			<option value="plano1div2">Tutoria em Educação EAD </option>
																			<option class="drop">Pós em Gestão / MBA</option>
																			<option value="plano1div2">Administração Pública</option>
																			<option value="plano1div2">Gestão da Qualidade</option>
																			<option value="plano1div2">Gestão de Negócios Imobiliários</option>
																			<option value="plano1div2">Gestão e Logística Empresarial</option>
																			<option value="plano1div2">Gestão Estratégica de Negócios</option>
																			<option value="plano1div2">Marketing e Gestão Estratégica</option>
																			<option value="plano1div2">MBA em Auditoria e Perícia Contábil</option>
																			<option value="plano1div2">MBA em Controladoria e Finanças</option>
																			<option value="plano1div2">MBA em Executivo em Marketing</option>
																			<option value="plano1div2">MBA em Gestao de Pessoas e Recursos Humanos</option>
																			<option value="plano1div2">MBA em Planejamento Empresarial </option>
																			<option value="plano1div2">MBA em Segurança Trabalho e Gestao Ambiental</option>
																			<option value="plano1div2">Meio Ambiente, Desenvolvimento e Sustentabilidade</option>
																			<option value="plano1div2">Psicologia das Organizações e do Trabalho</option>
																			<option class="drop">Pós em Informática</option>
																			<option value="plano1div2">Gestão do Conhecimento e Tecnologias da Informação</option>
																			<option class="drop">Pós em Saúde</option>
																			<option value="plano1div2">Enfermagem do Trabalho Aplicada à Saúde Ocupacional</option>
																			<option value="plano1div2">Farmacologia Aplicada à Atenção Farmacêutica</option>
																			<option value="plano1div2">Gestão e Administração Hospitalar</option>
																			<option value="plano1div2">Neurociência Aplicada à Aprendizagem</option>
																			<option value="plano1div2">Radiologia Aplicada à Proteção Radiológica</option>
																			<option value="plano1div2">Saúde do Idoso: Gestão e Assistência em Gerontologia</option>
																			<option value="plano1div2">Saúde e Segurança do Trabalho</option>
																			<option value="plano1div2">Saúde Pública e Vigilância Sanitária</option>
																		</select>
																		<div id="plano1div2" class="invisivel">
																			<p>
																				<img src="images/check.png">
																				&nbsp;Parabéns, você agora é um aluno <strong>Dose Dupla</strong>. Você ganhou <strong>50% de desconto</strong> em seu curso!
																			</p>
																			<p>
																				►&nbsp;Selecione a forma de pagamento desejada:
																			</p>
																			<label for="FormaPagamentoDois">
																				<input type="checkbox" name="FormaPagamentoOpcaoDois" id="FormaPagamentoOpcaoDois" value="8 Vezes" />
																				8 X 204,00
																			</label>
																			<label for="FormaPagamentoDois">
																				<input type="checkbox" name="FormaPagamentoOpcaoDois" id="FormaPagamentoOpcaoDois" value="15 Vezes" />
																				15 X R$ 114,40
																			</label></br></br>
																			<p>&nbsp;<font style="color:red; font-size:15px">*</font>Faça sua matrícula por apenas <strong>R$ 100,00</strong>.</p>
																		</div>
																	</div>	

																	<div id="plano2" class="invisivel">O PLANO 2 vai aqui</div>
																	<div id="plano3" class="invisivel">Se qeuiser um terceiro plano, este é o espaço</div>
																</td>
																<td width="166" class="status"></td>
															</tr>
														</table>
													</fieldset>
													<!--################# botão fechar div ################# -->
													<!--<span onClick="OcultarDiv();" style="cursor: pointer;"><img src="images/apagar.png"></span> -->
													<!--################# botão fechar div ################# -->
												</div>
											</div>	
										</td>
										<td width="166" class="status"></td>
									</tr>
								</table>

							</fieldset>


							<fieldset>
								<legend>Identificação</legend>  		 
								<table width="694">
									<tr>
										<td colspan="3" class="label">&nbsp;</td>
									</tr>
									<tr>
										<td width="159" class="label"><label id="CPF" for="CPF">CPF:</label></td>
										<td width="269" class="field"><input name="CPF" type="text" id="CPF" size="20" maxlength="11" /> 		        
											Somente números</td>
											<td width="250" class="status"></td>
										</tr>
										<tr>
											<td class="label">Identidade (RG):</td>
											<td class="field"><input name="RG" type="text" id="RG" size="20" maxlength="15"/></td>
											<td class="status"></td>
										</tr>
										<tr>
											<td class="label"><label id="NomeCompleto" for="NomeCompleto">Nome Completo:</label></td>
											<td class="field"><input name="NomeCompleto" type="text" id="NomeCompleto" value="" size="40" maxlength="100" /></td>
											<td class="status"></td>
										</tr>
										<tr>
											<td class="label">Telefone Fixo:</td>
											<td colspan="2" class="field"><input name="DDDFixo"  id="DDDFixo" size="3" maxlength="2" />
												<input name="TelFixo" type="text" id="TelFixo" onkeyup="mascara_TelFixo()" size="20" maxlength="10" /></td>
											</tr>
											<tr>
												<td class="label">Telefone Celular:</td>
												<td colspan="2" class="field"><input name="DDDCel"  id="DDDCel" size="3" maxlength="2" />
													<input name="TelCel" type="text" id="TelCel" onkeyup="mascara_TelCel()" size="20" maxlength="10" /></td>
												</tr>
												<tr>
													<td class="label"><label id="Email" for="Email">Email:</label></td>
													<td class="field"><input name="Email" type="text" id="Email" value="" size="40" maxlength="150" /></td>
													<td class="status"></td>
												</tr>
												<tr>
													<td class="label">Sexo:</td>
													<td class="field"><input type="radio" name="Sexo" value="Masculino" />
														Masculino
														<input type="radio" name="Sexo" value="Feminino" />
														Feminino </td>
														<td class="status"></td>
													</tr>
													<tr>
														<td class="label">Formação: </td>
														<td class="field"><input name="Formacao" type="text" id="Formacao" value="" size="40" maxlength="100" /></td>
														<td class="status">&nbsp;</td>
													</tr>
													<tr>
														<td class="label">Ano de Conclusão: </td>
														<td class="field"><input name="AnoConclusao" type="text" id="AnoConclusao" value="" size="10" maxlength="4" /></td>
														<td class="status">&nbsp;</td>
													</tr>
													<tr>
														<td class="label">Data de Nascimento:</td>
														<td class="field"><input name="DNascimento" type="text" id="DNascimento" onkeyup="mascara_dataN()"size="20" maxlength="10"/></td>
														<td class="status">&nbsp;</td>
													</tr>
													<tr>
														<td colspan="3" class="label">&nbsp;</td>
													</tr>
												</table>
											</fieldset>
											<fieldset>
												<legend>Endereço / Localização</legend>
												<table width="697">
													<tr>
														<td colspan="3" class="label">&nbsp;</td>
													</tr>
													<?php include 'cep.php'; ?>
													<tr>
														<td colspan="3" class="label">&nbsp;</td>
													</tr>
												</table>
											</fieldset>
											<fieldset>
												<legend>Informe seu Gestor</legend>
												<br />
												<br />
												<table width="697">
													<td class="label">Você tomou conhecimento de nossos produtos através de um representante de vendas autorizado pelo Instituto? Se sim, informe abaixo:</td>
													<tr>
														<td class="field" colspan="2">
															<br />
															<span style="padding-left:10px">
																<label>Nome <input type="text" name="nome_gestor" size="30" /></label>
																<label>Cidade <input type="text" name="cidade_gestor" size="14" /></label>
															</span>
															<div id="campos"></div>
															<br />
														</table>
													</fieldset>
													<fieldset>
														<legend>Conclusão</legend>
														<table width="697">
															<tr>
																<td colspan="3" class="label">&nbsp;</td>
															</tr>
															<tr>
																<td class="label"><label id="Data" for="Data">Data da Matrícula:</label></td>
																<td width="128" class="field"><input name="DataMatricula" type="text" id="DataMatricula" value="<?php echo $Data; ?>" size="15" maxlength="100" /></td>
																<td width="389" class="status"></td>
															</tr>
															<tr>
																<td class="label">Turno para Contato:</td>
																<td class="field" colspan="2"><input type="radio" name="HorarioParaEntrarmosEmContato" value="Manhã" />
																	Manhã    <input type="radio" name="HorarioParaEntrarmosEmContato" value="Tarde" />
																	Tarde</td>
																</tr>
																<tr>
																	<td width="164" class="label"><label id="lsignupsubmit" for="signupsubmit"></label></td>
																	<td class="field" colspan="2">
																		<input name="Enviar" type="submit" class="submit" id="Enviar" value="Enviar"/>	  			</td>
																	</tr>
																	<tr>
																		<td class="label">&nbsp;</td>
																		<td class="field" colspan="2">             </td>
																	</tr>
																</table>
															</fieldset>
														</form>

													</div> 
													<div align="center"><img src="images/formas-pagamento.jpg" />  </div>
												</td>
											</tr>
										</table>
									</body>
									</html>
									<?php
									include("rodape.html");
									?>
									<?php
									function invertedata($Data)
									{
										$Pos = explode("/",$Data);
										$DataInvertida = $Pos[2]."-".$Pos[1]."-".$Pos[0];
										return $DataInvertida;
									}
									?>
