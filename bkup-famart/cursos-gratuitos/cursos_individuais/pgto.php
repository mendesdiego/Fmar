<?php

$fazer = 0;

$Data = date("j/n/Y");

$Curso = $_GET['Curso'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>: Confirmação Para Pagamento :</title>

<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript" src="jquery.validate.js"></script>

<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<script language="JavaScript">

function processarvenda(){

document.formPagSeguro.item_descr_1.value = document.form.Curso.value
document.formPagSeguro.item_valor_1.value = document.form.ValorCurso.value
document.formPagSeguro.cliente_nome.value = document.form.NomeCompleto.value
document.formPagSeguro.cliente_cep.value = document.form.cep.value
document.formPagSeguro.cliente_end.value = document.form.endereco.value
document.formPagSeguro.cliente_num.value = document.form.numero.value
document.formPagSeguro.cliente_compl.value = document.form.complemento.value
document.formPagSeguro.cliente_bairro.value = document.form.bairro.value
document.formPagSeguro.cliente_cidade.value = document.form.cidade.value
document.formPagSeguro.cliente_uf.value = document.form.estado.value
document.formPagSeguro.cliente_ddd.value = document.form.DDDFixo.value
document.formPagSeguro.cliente_tel.value = document.form.TelFixo.value
document.formPagSeguro.cliente_email.value = document.form.email.value

if (document.form.NomeCompleto.value != ""){
	document.getElementById('formPagSeguro').submit();
    return false;

}
    return false;
}

</script>

<?php

include("topo.php");

?>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">



<table width="966" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td>

    <h1>CONFIRMAÇÃO DE MATRÍCULA ESCOLA DO BRASIL VIP</h1>

<div> <strong>Atenção!</strong> Verifique se seus dados estão corretos e clique em &quot;Finalizar Matrícula&quot;. Você será direcionado para o PAG SEGURO para escolher uma forma de pagamento. Após a confirmação desse pagamento, você irá receber os dados de acesso (usuário e senha) para acesso ao curso profissionalizante, no endereço de e-mail que foi preenchido em nossa ficha de inscrição.</div>

<br />



</p>

<font color="#990000">



<?php
if($_POST["NomeCompleto"]!="")
{

require ("conexao.php");

$CPF = $_POST["CPF"];
$NomeCompleto = $_POST["NomeCompleto"];
$Curso = $_POST["Curso"];
$DDDFixo = $_POST["DDDFixo"];
$TelFixo = $_POST["TelFixo"];
$DDDCel = $_POST["DDDCel"];
$TelCel = $_POST["TelCel"];
$Email = $_POST["email"];
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
$DataDaCompra = invertedata($_POST["DataDaCompra"]);
$ValorCurso = $_POST['ValorCurso'];

$query = "INSERT INTO pgto (CPF, NomeCompleto, Curso, DDDFixo, TelFixo, DDDCel, TelCel, Email, RG, OrgaoEmissor, Sexo, CEP, Endereco, Numero, Complemento, Bairro, Cidade, Estado, Escolaridade, DataDoCadastro, DataDaCompra, ValorCurso) VALUES ('$CPF', '$NomeCompleto', '$Curso',  '$DDDFixo', '$TelFixo', '$DDDCel', '$TelCel', '$Email', '$RG', '$OrgaoEmissor', '$Sexo', '$CEP', '$Endereco', '$Numero', '$Complemento', '$Bairro', '$Cidade', '$Estado', '$Escolaridade', '$DataDoCadastro', '$DataDaCompra', '$ValorCurso')";



$sql=mysql_query($query) or die('ERRO!' . mysql_error());





// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

require("phpmailer/class.phpmailer.php");



// Inicia a classe PHPMailer

$mail = new PHPMailer();



// Define os dados do servidor e tipo de conexão

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "mail.escoladobrasilvip.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'vendas@escoladobrasilvip.com.br'; // Usuário do servidor SMTP
$mail->Password = 'vendasedbvip'; // Senha do servidor SMTP

// Define o remetente

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->From = "vendas@escoladobrasilvip.com.br"; // Seu e-mail
$mail->FromName = "Escola do Brasil VIP"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->AddAddress($Email, $NomeCompleto);

//$mail->AddAddress('ciclano@site.net');

//$mail->AddBCC('alef@cotemar.com.br', 'Contato Via Site'); // Copia

$mail->AddBCC('suporte02@cotemar.com.br', 'Contato Via Site'); // Copia

//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta



// Define os dados técnicos da Mensagem

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)



// Define a mensagem (Texto e Assunto)

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->Subject  = "Notificação de Compra - Escola do Brasil VIP (não responder)"; // Assunto da mensagem

$array_nomes = array('{NomeCompleto}', '{Curso}', '{DDDFixo}', '{TelFixo}', '{DDDCel}', '{TelCel}', '{Endereco}', '{Numero}', '{Complemento}', '{Bairro}', '{Cidade}', '{Estado}', '{DataDaCompra}', '{ValorCurso}', );

$array_valores = array($_POST['NomeCompleto'], $_POST['Curso'], $_POST['DDDFixo'], $_POST['TelFixo'], $_POST['DDDCel'], $_POST['TelCel'], $_POST['endereco'], $_POST['numero'], $_POST['complemento'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['DataDaCompra'], $_POST['ValorCurso']);

$template = file_get_contents("templates/compra.tpl");

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

if ($enviado) {

echo "OBRIGADO POR COMPRAR EM NOSSO SITE! UM E-MAIL DE NOTIFICAÇÃO FOI ENVIADO PARA: $Email";

} else {

echo "O REGISTRO NO SITE FOI EFETUADO, NO ENTANTO HOUVE UMA FALHA AO ENVIAR A NOTIFICAÇÃO PARA: $Email<br /><br />";

echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;

}

$fazer = 1;

}
?>

<?php

if($fazer == 0){
$Curso = $_GET['Curso'];
$CPF = $_GET['CPF'];

require ("conexao.php");

$query = "SELECT * FROM cadastro_cursos WHERE CPF = '$CPF'";

$sql = mysql_query($query);

$linha=mysql_fetch_array($sql);

$CPF = $linha['CPF'];

if (!$CPF){

echo "Usuário não localizado no Sistema! <a href='cadastro.php' class='a'>Clique aqui</a> para se Cadastrar";

}else

{
?>

</font><br />

<form onsubmit="return processarvenda();" action="pgto.php" method="post" name="form">

<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="NomeCompleto" for="NomeCompleto">Nome Completo:</label></td>

<td><input name="NomeCompleto" type="text" class="field" id="NomeCompleto" value="<?php echo $linha["NomeCompleto"];?>" size="65" /></td>

</tr>

</table>

  

<table width="966" border="0" cellpadding="0">

<tr>

  <td class="label">Nome do Curso</td>

  <td><input name="Curso" type="text" class="field" id="Curso" value="<?php echo $linha["Curso"]; ?>" size="65" />
  <font color="#FF0000"><b>*</b></font></td>

</tr>

<tr>

<td width="150" class="label"><label id="TelFixo" for="TelFixo">Telefone Fixo: </label></td>

<td><input name="DDDFixo" type="text" class="field" id="DDDFixo" onkeyup="mascara_TelFixo()" value="<?php echo $linha["DDDFixo"];?>" size="5" maxlength="2" />

<input name="TelFixo" type="text" class="field" id="TelFixo" onkeyup="mascara_TelFixo()" value="<?php echo $linha["TelFixo"];?>" size="20" maxlength="9" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="TelCel" for="TelCel">Telefone Celular:</label></td>

<td><input name="DDDCel" type="text" class="field" id="DDDCel" onkeyup="mascara_TelCel()" value="<?php echo $linha["DDDCel"];?>" size="5" maxlength="2" />

<input name="TelCel" type="text" class="field" id="TelCel" onkeyup="mascara_TelCel()" value="<?php echo $linha["TelCel"];?>" size="20" maxlength="9" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="Email" for="email">Email:</label></td>

<td><input name="email" type="text" class="field" id="email" value="<?php echo $linha["Email"];?>" size="65" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="RG" for="RG">Identidade (RG):</label></td>

<td><input name="RG" type="text" class="field" id="RG" value="<?php echo $linha["RG"];?>" size="30" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="OrgaoEmissor" for="OrgaoEmissor">Org&atilde;o Emissor:</label></td>

<td><input name="OrgaoEmissor" type="text" class="field" id="OrgaoEmissor" value="<?php echo $linha["OrgaoEmissor"];?>" size="20" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="Sexo" for="Sexo">Sexo:</label></td>

<td><input name="Sexo" type="text" class="field" id="Sexo" value="<?php echo $linha["Sexo"];?>" size="20" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="CEP" for="cep">CEP:</label></td>

<td><input name="cep" type="text" class="field" id="cep" value="<?php echo $linha["CEP"];?>" size="20" maxlength="9" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="Endereco" for="endereco">Endere&ccedil;o:</label></td>

<td><input name="endereco" type="text" class="field" id="endereco" value="<?php echo $linha["Endereco"];?>" size="65" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="Numero" for="numero">Numero:</label></td>

<td><input name="numero" type="text" class="field" id="numero" value="<?php echo $linha["Numero"];?>" size="20" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="Complemento" for="complemento">Complemento:</label></td>

<td><input name="complemento" type="text" class="field" id="complemento" value="<?php echo $linha["Complemento"];?>" size="30" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="Bairro" for="bairro">Bairro:</label></td>

<td><input name="bairro" type="text" class="field" id="bairro" value="<?php echo $linha["Bairro"];?>" size="30" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="Cidade" for="Cidade">Cidade:</label></td>

<td><input name="cidade" type="text" class="field" id="cidade" value="<?php echo $linha["Cidade"];?>" size="30" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="Estado" for="estado">Estado:</label></td>

<td><input name="estado" type="text" class="field" id="estado" value="<?php echo $linha["Estado"];?>" size="10" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="Estado" for="estado">Data do Cadastro:</label></td>

<td><input name="DataDoCadastro" type="text" readonly="readonly" class="field" id="DataDoCadastro2" value="<?php echo datanormal($linha["DataDoCadastro"]);?>" size="15" maxlength="10" /></td>

</tr>

</table>



<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="Estado" for="estado">Data da Compra:</label></td>

<td><input name="DataDaCompra" type="text" class="field" id="DataDaCompra" onkeyup="mascara_data()" value="<?php echo $Data;?>" size="15" maxlength="10" readonly="readonly" /></td>

</tr>

</table>

<table width="966" border="0" cellpadding="0">

<tr>

<td width="150" class="label"><label id="Estado" for="estado">Valor do Curso:</label></td>

<td><input name="ValorCurso" type="text" readonly="readonly" class="field" value="69,90" size="15" maxlength="10" /></td>

</tr>

</table>

  </span></div>

<table width="966" border="0" cellpadding="0">

<tr>

<td width="645" class="label"><label id="DataDoCadastro" for="ValorCurso">

<font color="#990000"></font></label></td>

<td width="349" border="0"><input name="submit" type="image" id="submit" onclick="javascript:document.form.submit();" src="images/btcompra.jpg" alt="Pague com PagSeguro - é rápido, grátis e seguro!" border="0" /></td>

<input type="hidden" name="CPF" value="<?php echo $linha["CPF"];?>">

</tr>

</table>

<div align="center"></div>

</form>



<form action="https://pagseguro.uol.com.br/checkout/checkout.jhtml" method="post" id="formPagSeguro" name="formPagSeguro" target="_blank">

<input type="hidden" name="email_cobranca" value="matricula-online@cotemar.com.br">

<input type="hidden" name="tipo" value="CP">

<input type="hidden" name="moeda" value="BRL">



<input type="hidden" name="item_id_1" value="00001">

<input name="item_descr_1" type="hidden">

<input type="hidden" name="item_quant_1" value="1">

<input type="hidden" name="item_valor_1">

<input type="hidden" name="item_frete_1" value="0">

<input type="hidden" name="item_peso_1" value="0">

<!-- INÍCIO DOS DADOS DO USUÁRIO -->

<input type="hidden" name="cliente_nome">

<input type="hidden" name="cliente_cep">

<input type="hidden" name="cliente_end">

<input type="hidden" name="cliente_num"/>

<input type="hidden" name="cliente_compl">

<input type="hidden" name="cliente_bairro">

<input type="hidden" name="cliente_cidade">

<input type="hidden" name="cliente_uf">

<input type="hidden" name="cliente_pais" value="BRA">

<input type="hidden" name="cliente_ddd">

<input type="hidden" name="cliente_tel" />

<input type="hidden" name="cliente_email">

<!-- FIM DOS DADOS DO USUÁRIO -->

</form>

</td>

  </tr>

</table>

</body>

</html>

  <?php

}

}

function invertedata($Data)
{
$Pos = explode("/",$Data);
$DataInvertida = $Pos[2]."-".$Pos[1]."-".$Pos[0];
return $DataInvertida;
}

function datanormal($Data)
{
$Pos = explode("-",$Data);
$DataNormal = $Pos[2]."/".$Pos[1]."/".$Pos[0];
return $DataNormal;
}
?>
