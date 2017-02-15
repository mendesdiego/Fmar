<?php



require ("conexao.php");



$CPF = $_POST["CPF"];

$NomeCompleto = $_POST["NomeCompleto"];

$Usuario = $_POST["username"];

$Senha = $_POST["password"];

$ConfirmaSenha = $_POST["password_confirm"];

$Curso = $_POST["Curso"];

$DDDFixo = $_POST['DDDFixo'];

$TelFixo = $_POST["TelFixo"];

$DDDCel = $_POST['DDDCel'];

$TelCel = $_POST["TelCel"];

$Email = $_POST["email"];

$EmailAlternativo = $_POST["email_alternativo"];

$RG = $_POST["RG"];

$OrgaoEmissor = $_POST["OrgaoEmissor"];

$Sexo = $_POST["Sexo"];

$CEP = $_POST["cep"];

$Endereco = $_POST["endereco"];

$Numero = $_POST["numero"];

$Complemento = $_POST["complemento"];

$Bairro = $_POST["bairro"];

$Cidade = $_POST["cidade"];

$Estado = $_POST["estado"];

$Escolaridade = $_POST["Escolaridade"];

$DataDoCadastro = invertedata($_POST["DataDoCadastro"]);

$Regulamento = $_POST["terms"];

$TipoCurso = $_POST["TipoCurso"];





if($submit!="")

{



$query = "INSERT INTO cadastro_cursos (CPF, NomeCompleto, Usuario, Senha, ConfirmaSenha, Curso, DDDFixo, TelFixo, DDDCel, TelCel, Email, EmailAlternativo, RG, OrgaoEmissor, Sexo, CEP, Endereco, Numero, Complemento, Bairro, Cidade, Estado, Escolaridade, DataDoCadastro, Regulamento) VALUES ('$CPF', '$NomeCompleto', '$Usuario', '$Senha', '$ConfirmaSenha', '$Curso',  '$DDDFixo', '$TelFixo', '$DDDCel', '$TelCel', '$Email', '$EmailAlternativo', '$RG', '$OrgaoEmissor', '$Sexo', '$CEP', '$Endereco', '$Numero', '$Complemento', '$Bairro', '$Cidade', '$Estado', '$Escolaridade', '$DataDoCadastro', '$Regulamento')";



// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

require("phpmailer/class.phpmailer.php");



// Inicia a classe PHPMailer

$mail = new PHPMailer();



// Define os dados do servidor e tipo de conexão

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsSMTP(); // Define que a mensagem será SMTP

$mail->Host = "mail.escoladobrasilvip.com.br"; // Endereço do servidor SMTP

$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)

$mail->Username = 'cadastro@escoladobrasilvip.com.br'; // Usuário do servidor SMTP

$mail->Password = 'cadastroedbvip'; // Senha do servidor SMTP



// Define o remetente

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->From = "cadastro@escoladobrasilvip.com.br"; // Seu e-mail

$mail->FromName = "Escola do Brasil VIP"; // Seu nome



// Define os destinatário(s)

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->AddAddress($Email, $NomeCompleto);

//$mail->AddAddress('ciclano@site.net');

$mail->AddBCC('alef@cotemar.com.br', 'Contato Via Site'); // Copia

$mail->AddBCC('suporte02@cotemar.com.br', 'Contato Via Site'); // Copia

//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta



// Define os dados técnicos da Mensagem

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)



// Define a mensagem (Texto e Assunto)

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->Subject  = "Email de Confirmação dos Dados (não responder)"; // Assunto da mensagem



$array_nomes = array('{CPF}', '{NomeCompleto}', '{Usuario}', '{Senha}', '{DDDFixo}', '{TelFixo}', '{DDDCel}', '{TelCel}', '{Curso}', '{DataDoCadastro}', '{CEP}','{Endereco}', '{Numero}', '{Complemento}', '{Bairro}', '{Cidade}', '{Estado}');



$array_valores = array($_POST['CPF'], $_POST['NomeCompleto'], $_POST['username'], $_POST['password'], $_POST['DDDFixo'], $_POST['TelFixo'], $_POST['DDDCel'], $_POST['TelCel'], $_POST['Curso'], $_POST['DataDoCadastro'], $_POST['cep'], $_POST['endereco'], $_POST['numero'], $_POST['complemento'], $_POST['bairro'], $_POST['cidade'], $_POST['estado']);



$template = file_get_contents("templates/cadastro.tpl");



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
echo "OBRIGADO POR SE REGISTRAR! UM E-MAIL DE NOTIFICAÇÃO FOI ENVIADO PARA: $Email";
} else {
echo "O REGISTRO NO SITE FOI EFETUADO, NO ENTANTO HOUVE UMA FALHA AO ENVIAR A NOTIFICAÇÃO PARA: $Email<br /><br />";
echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
}
*/

$sql=mysql_query($query) or die('ERRO!' . mysql_error());

$validacao = "1";

session_start();
	$_SESSION['validacao'] = $validacao;
	header("Location: pgto.php?CPF=$CPF");
}

?>





<?php

include("topo.php");

?>

<?php

$Data = date("d/m/Y");

$Curso = $_GET['Curso'];

$Email = $_GET['IdCadastrar'];

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">



<head>

 <title>: Cadastro ::</title>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



 

<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript" src="jquery.validate.js"></script>

<script src="jscripts/cep.js" type="text/javascript"></script>

<script> !window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>'); </script>

<script type="text/javascript" src="jquery.mousewheel-3.0.4.pack.js"></script>

<script type="text/javascript" src="jquery.fancybox-1.3.2.js"></script>

<link rel="stylesheet" type="text/css" href="jquery.fancybox-1.3.2.css" media="screen" />

 

 <link rel="stylesheet" type="text/css" href="style.css" />

 <link href="stylecep.css" type="text/css" rel="stylesheet" />

 

  <script type="text/javascript">

		$(document).ready(function() {

			$("#various3").fancybox({

				'width'				: '80%',

				'height'			: '60%',

				'autoScale'			: false,

				'transitionIn'		: 'none',

				'transitionOut'		: 'none',

				'type'				: 'iframe'

			});

			

			$("#various4").fancybox({

				'width'				: '80%',

				'height'			: '60%',

				'autoScale'			: false,

				'transitionIn'		: 'none',

				'transitionOut'		: 'none',

				'type'				: 'iframe'

			});

			

			$("#various5").fancybox({

				'width'				: '100%',

				'height'			: '100%',

				'autoScale'			: false,

				'transitionIn'		: 'none',

				'transitionOut'		: 'none',

				'type'				: 'iframe'

			});

			

			})

</script>

 

<script>

function converteUpper(campo) {

    campo.value = campo.value.toUpperCase();

}

</script>





 <script type="text/javascript">

			var isOpen = false;

			function showDiv()

			{

				if(isOpen)

				{

					document.getElementById('Mostra').style.display = 'none';

				}

				else

				{

					document.getElementById('Mostra').style.display = 'block';

				}

				isOpen = !isOpen;

			}

</script>



<script>

function mascara_TelFixo() {

if(document.captchaform.TelFixo.value.length == 4) {

document.captchaform.TelFixo.value += '-';

}

}





function mascara_TelCel() {

if(document.captchaform.TelCel.value.length == 4) {

document.captchaform.TelCel.value += '-';

}

}

</script> 







<script id="demo" type="text/javascript">

$(document).ready(function() {

	// validate signup form on keyup and submit

	var validator = $("#captchaform").validate({

		rules: {

			CPF: "required",

			NomeCompleto: "required",

			Curso: "required",

			RG: "required",

			Sexo: "required",

			cep: "required",

			numero: "required",

			Escolaridade: "required",

			

			username: {

				required: true,

				minlength: 2,

				//remote: "users.php"

			},

			

			password: {

				required: true,

				minlength: 5

			},

			password_confirm: {

				required: true,

				minlength: 5,

				equalTo: "#password"

			},

			email: {

				required: true,

				email: true,

				//remote: "emails.php"

			},

			

			dateformat: "required",

			terms: "required"

		},

		messages: {

			NomeCompleto: "Digite seu Nome Completo",

			CPF: "Você deve informar seu CPF",

			Curso: "Você deve informar qual curso irá fazer",

			RG: "Você deve informar a Identidade (RG)",

			Sexo: "Por favor, informe o sexo",

			cep: "Você deve informar o CEP",

			numero: "Informe o Número da residência",

			Escolaridade: "Você deve informar qual é a Escolaridade",

						

			

			

			username: {

				required: "Informe o Nome de Usuário do Sistema",

				minlength: jQuery.format("Digite pelo menos 6 caracteres"),

				remote: jQuery.format("{0} is already in use")

			},

			password: {

				required: "Informe uma senha",

				rangelength: jQuery.format("Digite pelo menos 6 caracteres")

			},

			password_confirm: {

				required: "Repita sua senha",

				minlength: jQuery.format("Digite pelo menos 6 caracteres"),

				equalTo: "A Confirmação de Senha não confere"

			},

			email: {

				required: "Por favor insira um email válido",

				minlength: "Por favor insira um email válido",

				remote: jQuery.format("{0} is already in use")

			},

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

		 //specifying a submitHandler prevents the default submit, good for the demo

		//submitHandler: function() {

			//alert("submitted!");

		//},

		// set this class to error-labels to indicate valid fields

		success: function(label) {

			// set &nbsp; as text for IE

			label.html("&nbsp;").addClass("checked");

		}

	});

	

	// propose username by combining first- and lastname

	$("#username").focus(function() {

		var firstname = $("#firstname").val();

		var lastname = $("#lastname").val();

		if(firstname && lastname && !this.value) {

			this.value = firstname + "." + lastname;

		}

	});



});

</script>









</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">



<table width="966" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td>

    <h1>FORMULÁRIO DE CADASTRO</h1>



    <form action="cadastro.php" method="post" name="captchaform" id="captchaform"  autocomplete="off">



<fieldset>

<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="CPF" for="CPF">CPF:</label></td>

<td width="150"><input name="CPF" type="text" class="field" id="CPF" size="20" maxlength="11" /></td>

<td width="596" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" height="31" class="label"><label id="NomeCompleto" for="NomeCompleto">Nome Completo:</label></td>

<td width="400"><input name="NomeCompleto" type="text" class="field" id="NomeCompleto" size="55" /></td>

<td width="346" class="status"></td>

</tr>

</table>

  

<table width="966" border="0" cellpadding="0">

<tr>
<!--
<td width="220" class="label"><label id="Usuario" for="username">ID do Usu&aacute;rio:</label></td>

<td width="220"><input name="username" type="text" onKeyUp='converteUpper(this);' class="field" id="username" value="" size="30" /></td>

<td width="526" class="status"></td>
-->
</tr>

</table>

  
<!--
<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="Senha" for="password">Senha:</label></td>

<td width="150"><input name="password" type="password" onKeyUp='converteUpper(this);' class="field" id="password" size="20" maxlength="12" />    </td>

<td width="596" class="status"></td>

</tr>

</table>
-->

<!--
<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="ConfirmacaoSenha" for="password_confirm">Confirme a Senha: </label></td>

<td width="150"><input name="password_confirm" type="password" onKeyUp='converteUpper(this);' class="field" id="password_confirm" size="20" maxlength="12" />    </td>

<td width="596" class="status"></td>

</tr>

</table>
-->
<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="Curso" for="Curso">Curso:</label></td>

<td width="400"><input name="Curso" type="text" class="field" id="Curso" value="<?php echo $Curso; ?>" size="55" />
<font color="#FF0000"><b>*</b></font></td>

<td width="346" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="TelFixo" for="TelFixo">Telefone Fixo: </label></td>

<td width="746"><div align="left">

  <input name="DDDFixo"  id="DDDFixo" size="3" maxlength="2" />

  <input name="TelFixo" type="text" class="field" id="TelFixo" onkeyup="mascara_TelFixo()" size="20" maxlength="9" />

</div></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="TelCel" for="TelCel">Telefone Celular:</label></td>

<td width="746"><div align="left">

  <input name="DDDCel"  id="DDDCel" size="3" maxlength="2" />

  <input name="TelCel" type="text" class="field" id="TelCel" onkeyup="mascara_TelCel()" size="20" maxlength="9" />    

</div></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="Email" for="email">Email:</label></td>

<td width="400"><input name="email" type="text" class="field" id="email" value="<?php echo $Email; ?>" size="55" />    </td>

<td width="346" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="ConfirmacaoEmail" for="email_alternativo">Email Alternativo:</label></td>

<td width="400"><input name="email_alternativo" type="text" class="field" id="email_alternativo" value="" size="55" />    </td>

<td width="346" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="RG" for="RG">Identidade (RG):</label></td>

<td width="230"><input name="RG" type="text" class="field" id="RG" value="" size="30" />    </td>

<td width="516" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="OrgaoEmissor" for="OrgaoEmissor">Org&atilde;o Emissor:</label></td>

<td width="170"><input name="OrgaoEmissor" type="text" class="field" id="OrgaoEmissor" value="" size="20" />    </td>

<td width="576" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="Sexo" for="Sexo">Sexo:</label></td>

<td width="220"><input type="radio" name="Sexo" value="Masculino" />

Masculino

<input type="radio" name="Sexo" value="Feminino" />

Feminino </td>

<td width="526" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="CEP" for="cep">CEP:</label></td>

<td width="250"><input name="cep" type="text" class="field" id="cep" size="20" maxlength="8" />

<button id="btn" onclick="return getEndereco()">Consultar</button>      </td>

<td width="496" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="Endereco" for="endereco">Endere&ccedil;o:</label></td>

<td width="400"><input name="endereco" type="text" class="field" id="endereco" value="" size="55" />    </td>

<td width="346" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="Numero" for="numero">Numero:</label></td>

<td width="170"><input name="numero" type="text" class="field" id="numero" value="" size="20" />    </td>

<td width="576" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="Complemento" for="complemento">Complemento:</label></td>

<td width="230"><input name="complemento" type="text" class="field" id="complemento" value="" size="30" />    </td>

<td width="516" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="Bairro" for="bairro">Bairro:</label></td>

<td width="230"><input name="bairro" type="text" class="field" id="bairro" value="" size="30" />    </td>

<td width="516" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="Cidade" for="Cidade">Cidade:</label></td>

<td width="230"><input name="cidade" type="text" class="field" id="cidade" value="" size="30" />    </td>

<td width="516" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="Estado" for="estado">Estado:</label></td>

<td width="100"><select name="estado" class="field" id="estado">

<option value="" selected="selected">.....</option>

<option value="AC">AC</option>

<option value="AL">AL</option>

<option value="AP">AP</option>

<option value="AM">AM</option>

<option value="BA">BA</option>

<option value="CE">CE</option>

<option value="DF">DF</option>

<option value="GO">GO</option>

<option value="ES">ES</option>

<option value="MA">MA</option>

<option value="MT">MT</option>

<option value="MS">MS</option>

<option value="MG">MG</option>

<option value="PA">PA</option>

<option value="PB">PB</option>

<option value="PR">PR</option>

<option value="PE">PE</option>

<option value="PI">PI</option>

<option value="RJ">RJ</option>

<option value="RN">RN</option>

<option value="RS">RS</option>

<option value="RO">RO</option>

<option value="RR">RR</option>

<option value="SP">SP</option>

<option value="SC">SC</option>

<option value="SE">SE</option>

<option value="TO">TO</option>

</select></td>

<td width="646" class="status"></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="Escolaridade" for="Escolaridade">Escolaridade:</label></td>

<td width="746"><input name="Escolaridade" type="radio" id="radio" value="Analfabeto" />

Analfabeto

<input type="radio" name="Escolaridade" id="radio2" value="Ensino Fundamental" />

Ensino  Fundamental

<input type="radio" name="Escolaridade" id="radio3" value="Ensino Medio" />

Ensino  Médio

<input type="radio" name="Escolaridade" id="radio4" value="Superior Imcompleto" />

Superior  Incompleto

<input type="radio" name="Escolaridade" id="radio5" value="Pos Graduacao" />

Pos  Graduação</td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="220" class="label"><label id="DataDoCadastro" for="DataDoCadastro">Data do Cadastro:</label></td>

<td width="140"><input name="DataDoCadastro" type="text" readonly="readonly" class="field" id="DataDoCadastro" onkeyup="mascara_data()" value="<?php echo $Data;?>" size="15" maxlength="10" />    </td>

<td width="606" class="status"></td>

</tr>

</table>



</fieldset>



<fieldset>

   <table width="100%">

    <tr>

      <td width="130" class="label"><label id="lterms" for="terms">Regulamento:</label></td>

      <td width="30"><input name="terms" type="checkbox" id="terms"/></td>

      <td width="850" class="status">Li e aceito o <a href="javascript:showDiv()" class="a"> <em>Regulamento</em> </a> exposto no site.</td>

    </tr>

     <tr>

       <td>&nbsp;</td>

       <td colspan="2">

        

        <div id="Mostra" style="display:none; padding:20px; overflow: auto; position: relative; height: 200px; background: #f8f8f8; border-left:0px solid #999; border-right:0px solid #999; border-top:0px solid #999; border-bottom:0px solid #999; " >



<fieldset><h2>Regulamento Geral </h2>

<div align="justify">Por este instrumento de garantia e compromisso mútuo, estabelecido entre a empresa Business Brasil Empreendimentos, projeto Escola do Brasil ®. denominada CONTRATADA  de outro o usuário do sistema – aluno – doravante denominado CONTRATANTE que fará seu curso através do site www.escoladobrasilvip.com.br.</div><br />

<h3>1 - Do Curso:</h3>

<div align="justify">O aluno fará um pacote de curso de alta qualidade pedagógica desenvolvido por uma Escola Técnica contratada pela BBE.</div><br />

<div align="justify">Trata-se de curso de qualificação profissional no modelo e-learning onde não há perda de qualidade pedagógica haja vista que nos testes do ENADE/MEC as finalizações das provas (presenciais) realizadas entre alunos de cursos à distância e cursos presenciais obteve o seguinte resultado: alunos de cursos à distância foram iguais ou superiores a alunos de cursos presenciais.</div><br />

<div align="justify">Além do mais é bom ir acostumando com Educação a Distância afinal, com um país continental como o Brasil, a velocidade das mudanças nas organizações globais, e a necessidade da educação continuada somente a Educação a Distância é eficaz em treinamento atualizado e rápido para acompanhar imensidão de informação mutante.</div><br />

<div align="justify"> Parte deste projeto é subsidiada por um grupo de empresas denominado projeto UBEC – União Brasileira das Empresas cidadãs a fim de tornar o preço e curso acessível a todos sem perda de qualidade. Que por sua vez é vinculado ao PROINPRO – Programa de Inclusão Profissional ® que como o nome já diz, visa colocar o aluno no mercado de trabalho. E mais, além de capacitá-lo, prepará-lo para o mercado e certificá-lo o projeto auxilia-o quando em dúvida de qual carreira seguir e também a agrega valor ao seu currículo visando melhorar sua produtividade ou alavancar sua carreira profissional. Desta forma todos saem ganhando: as empresas contratam mão de obra especializada reduzindo custos e aumentando produtividade e os alunos conseguem melhor colocação e segurança no mercado de trabalho.</div><br />

<h3> 2 - Regras Gerais</h3> <div align="justify"> 

  1) A Escola do Brasil ® através de seus parceiros locais oferecerá com custo fixo mensal ou apenas cobrando pelos materiais didáticos cursos em sistema EAD ( Educação A Distância) de alta qualidade.<br />

  2) Não ofertamos acesso à internet, exceto quando descrito especificamente no contrato – ou em nossas escolas próprias (neste caso o acesso é pago a parte). O curso será composto de:<br />

  a) Código e Senha de Acesso de acordo com o curso livre profissionalizante especifico.<br />

  b) material de aprendizagem eletrônica (guias didáticos no Computador) e/ou material impresso. <br />

  c) certificado de conclusão de curso Livre Profissionalizante oferecidos por Escola Técnica – o curso não é técnico.<br />

  d) Inclusão de currículo gratuito no site BNE, Banco Nacional de Emprego.<br />

  e) carteira de Estudante digitalizada.<br />

  3) A Carteira Profissional só será entregue em casos específicos (quando citado na publicidade).<br />

  4) Importante:<br />

  4.1) Certificado, carteira de Estudante e benefícios apenas para alunos adimplentes que atingirem no mínimo 60% dos pontos na prova final. <br />

  5)Não haverá repetição de prova ou recuperação, o aluno reprovado deverá repetir do curso.<br />

  6) Não existem férias.<br />

  7.1) Feriado: somente não haverá aula regular quando o aluno for comunicado por escrito/e-mail.</div><br />

  <h3>3 -Do pagamento.Geral </h3><div align="justify">

  A)Pagando em cheque ou boleto: seu curso só será liberado após a compensação do mesmo. <br />

  2) Não estando quites com sua parcela seu curso será interrompido até a quitação e não receberá certificações. <br />

  2.1) Pagando atrasado entre no site www.escoladobrasil.com.br e informe da quitação.<br />

  3) Seu acesso ao curso será liberado no máximo em 72 horas após quitação.<br />

  4) No caso de pagamento de material didático ou pagamento em forma de prestação: não se trata de mensalidade a venda é a vista dividido em parcelas assim mesmo não indo às aulas deverá quitar o material.<br />

  B) Contratação de mensalidade de acesso a internet: neste caso pague a mensalidade enquanto estiver usando o serviço diretamente ao prestador de serviço, ou os respectivos boletos bancários/carnês.<br /></div>

  <h3>4 - Inadimplência:</h3><div align="justify">

  1) Estando inadimplente o Aluno  terá paralisado imediatamente o acesso ao sistema de curso, além de total impedimento de receber os benefícios e não receberá as certificações e carteiras : Profissionais e de Estudante. Atrasos de pagamento multa de 2% mais 2 % de juros ao mês <br />

  &nbsp;&nbsp;4.1 - SPC.Tem ciência neste ato o contratante, que em caso de inadimplência das parcelas ou qualquer obrigação de pagamento decorrente deste contrato por trinta dias ou mais, será este fato comunicado ao cadastro de consumidor SCPC.<br />

  <h3>5 -Prazo de Validade: </h3><div align="justify">

  1) Da data de assinatura até o término do curso previsto para 3 a 6  meses  - depende do rendimento de cada aluno.2)O seu curso ficará disponível no máximo 9 meses.</div><br />

  <h3>6 -Da rescisão</h3><div align="justify">

  6.1) – PCL II. 1) NÃO HAVERÁ DEVOLUÇÃO DE TAXA DE RESERVA (inscrição) E MATERIAL DIDÁTICO sob nenhuma hipótese, se pagar estas taxas e desistir não recebe o dinheiro de volta. Mensalidades de acesso a computadores – (caso não esteja utilizando acesso próprio) se desejar desistir deverá avisar por escrito e pagar pelas aulas que já fez, contudo não terá direito a receber nenhum tipo de benefício ou certificação. <br />

  2) Não vir a aula, mandar recado, telefonar não cancela o curso, o curso só será cancelado por escrito.Se optou em usar acesso pagando mensalidade - Tipo 1 – ; não poderá depois migrar para o tipo 2 – acesso próprio.<br />

  6.2) – PCL I - Desistência ou distrato do presente contrato: fica estabelecido que,  a título de carência, o CONTRATANTE deverá enviar solicitação de desistência via site, devendo pagar taxa de Rescisão Contratual no valor de R$ 50,00  (Cinqüenta Reais), independente do mês em que ocorreu a rescisão, e ainda, pagar parcelas em atraso (se houver), sem nenhum outro ônus<br />

  2) Não vir a aula, mandar recado, telefonar não cancela o curso, o curso só será cancelado via site ou na secretaria da escola e com o pagamento da multa.</div><br />

  <h3>7 - Da reposição.</h3>

  <div align="justify">Não haverá reposição de aula: Em caso de atrasos de aula por qualquer motivo o aluno deverá continuar no curso até seu término, caso não consiga terminá-lo no prazo previsto no contrato continuará estudando até o término, pagando o valor de nova parcela para cada mês que estiver inscrito e utilizando o curso e/ou a máquina.</div><br />

  <h3>8- Curso de Enfermagem </h3>

  <div align="justify">O curso objetiva informar os fundamentos da área treinando o profissional para trabalhos básicos, não é curso técnico e não dá direito ao registro junto ao COREN – Conselho Regional de Enfermagem.<br />

  <h3>9 - Carteiras:</h3>

  <div align="justify">1) Estudante: trata-se de documento emitido por uma Escola Regular Credenciada para o curso livre de capacitação profissional o seu objetivo é de identificar o aluno desta escola. Para uso como desconto em ingressos consulte as leis do seu Estado.<br />

  2) Profissional. Esta identifica o aluno, a escola e o grau e a formação trata-se das mesmas informações do certificado, porém de forma reduzida. Importante : somente escolas regulares podem emitir tais carteiras. Os documentos serão enviados em formato digital por e-mail o Estudante, deverá imprimi-los, assiná-los, colar foto e plastificar. Se desejar adquirir as carteiras impressas basta solicitar neste site.Atenção a autenticidade das carteiras e dos certificado (digitais via e-mail ou emitidos direto da escola) é a mesma. Importante II : O pagamento efetuado não contempla a impressão de certificado e carteiras enviadas por e-mail. As carteiras são válidas por um ano.</div><br />

  <h3>10  - Certificação:</h3><div align="justify">

  Através do projeto ESCOLA DO BRASIL ®  oferecemos as aulas de qualificação profissional  gratuitas ou onerosas utilizando de treinamento à distância sem perda de qualidade pedagógica e no final o aluno receberá um certificado GENUÍNO de uma Escola Técnica Credenciada nos órgãos de Educação.<br />

  No seu certificado não consta que o curso foi oferecido à distância. Apesar do curso não ser técnico o credibilidade de um certificado emitido por uma escola Técnica é total, diferente de demais certificados emitidos por qualquer outro empresa.<br />

  Para certificar desta forma a BBE/Escola do Brasil ® Contrata Escolas Técnicas credenciadas junto a Secretarias Estaduais de Educação e devidamente regulamentada no MEC junto vide LDB – Leis de Diretrizes Básicas da Educação -  a fim de certificar de forma genuína, afinal a certificação é a prova da sua educação.<br />

  Seu certificado (e as carteiras) será enviado em formato digital – via e-mail - deverá imprimir em papel cartolina a cores – de preferência a laser – o que atesta sua autenticidade é o registro do mesmo junto a nossa instituição e que poderá ser consultado a qualquer momento pelo interessado no nosso site. Para evitar falsificações de certificado, o que não é incomum,  a Escola Técnica que emitirá esta credencial será revelada, apenas no Certificado do Aluno que o solicitar. O aluno poderá solicitar seu certificado impresso emitido pela escola  e devidamente assinado neste caso haverá uma taxa adicional no valor de R$ 50,00 de taxas logística e envio. O aluno receberá o certificado e carteira estudantil digitalizado ou impressos no máximo em 30 dias. Repetindo: a autenticidade das carteiras e dos certificados (digitais via e-mail ou emitidos direto da escola) é a mesma.</div><br />

 <h3>11 - BNE – Banco Nacional do Emprego</h3><div align="justify">

 No final de seu curso – já com suas certificações em mãos -  todo o aluno que concluiu nossos ensinamentos poderá cadastrar seu currículo e certificado gratuitamente. Basta acessar www.bne.com.br<br />

</fieldset>

</div>        </td>

      </tr>

  </table>

</fieldset>



<input type="submit" name="submit" id="submit" value="CONTINUAR" />

</form>

    </td>

  </tr>

</table>





</body>



</html>

<?php

function invertedata($Data)

{

$Pos = explode("/",$Data);

$DataInvertida = $Pos[2]."-".$Pos[1]."-".$Pos[0];

return $DataInvertida;

}

?>
