<?php
$fazer = 0;
$Data = date("d/m/Y");
$Curso = $_GET['Curso'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>: Confirmação Para Pagamento :</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<link rel="stylesheet" type="text/css" href="css/conteudo/paginas.css" />
</head>
<script language="JavaScript">
function processarvenda(){

document.formPagSeguro.item_descr_1.value = document.form.Curso.value
document.formPagSeguro.item_valor_1.value = document.form.ValorMatricula.value
document.formPagSeguro.cliente_nome.value = document.form.NomeCompleto.value
document.formPagSeguro.cliente_cep.value = document.form.CEP.value
document.formPagSeguro.cliente_end.value = document.form.Endereco.value
document.formPagSeguro.cliente_num.value = document.form.Numero.value
<!--document.formPagSeguro.cliente_compl.value = document.form.complemento.value -->
document.formPagSeguro.cliente_bairro.value = document.form.Bairro.value
document.formPagSeguro.cliente_cidade.value = document.form.Cidade.value
document.formPagSeguro.cliente_uf.value = document.form.Estado.value
document.formPagSeguro.cliente_ddd.value = document.form.DDDFixo.value
document.formPagSeguro.cliente_tel.value = document.form.TelFixo.value
document.formPagSeguro.cliente_email.value = document.form.Email.value

if (document.form.NomeCompleto.value != ""){
	document.formPagSeguro.submit();
}
}
</script>
<?php
include("topo.php");
?>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="966" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <h1>PAGAMENTO DE MATRÍCULA</h1>
<div> <strong>Atenção!</strong> verifique se seus dados estão corretos e clique em &quot;Finalizar Compra&quot; que você será direcionado para escolher a Forma de Pagamento.</div>
<br />

</p>
<font color="#990000">

<?php

if($NomeCompleto!="")
{
require ("../conexao.php");

$Curso = $_POST["Curso"];
$Polo = $_POST["Polo"];
$CPF = $_POST["CPF"];
$RG = $_POST["RG"];
$NomeCompleto = $_POST["NomeCompleto"];
$DDDFixo = $_POST["DDDFixo"];
$TelFixo = $_POST["TelFixo"];
$DDDCel = $_POST["DDDCel"];
$TelCel = $_POST["TelCel"];
$Email = $_POST["Email"];
$Sexo = $_POST["Sexo"];
$CEP = $_POST["CEP"];
$Endereco = $_POST["Endereco"];
$Numero = $_POST["Numero"];
$Bairro = $_POST["Bairro"];
$Cidade = $_POST["Cidade"];
$Estado = $_POST["Estado"];
$DataMatricula = invertedata($_POST["DataMatricula"]);
$DataPagamento = invertedata($_POST["DataPagamento"]);
$ValorMatricula = $_POST['ValorMatricula'];

$query = "INSERT INTO pgto (Curso, Polo, CPF, RG,  NomeCompleto, DDDFixo, TelFixo, DDDCel, TelCel, Email, Sexo, CEP, Endereco, Numero, Bairro, Cidade, Estado, DataMatricula, DataPagamento, ValorMatricula) VALUES ('$Curso', '$Polo', '$CPF', '$RG', '$NomeCompleto', '$DDDFixo', '$TelFixo', '$DDDCel', '$TelCel', '$Email', '$Sexo', '$CEP', '$Endereco', '$Numero', '$Bairro', '$Cidade', '$Estado', '$DataMatricula', '$DataPagamento', '$ValorMatricula')";

$sql=mysql_query($query) or die('ERRO!' . mysql_error());


// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("phpmailer/class.phpmailer.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "localhost"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'matricula-online@cotemar.com.br'; // Usuário do servidor SMTP
$mail->Password = 'MatriculaCTM'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "matricula-online@cotemar.com.br"; // Seu e-mail
$mail->FromName = "Cotemar"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress($Email, $NomeCompleto);
//$mail->AddAddress('ciclano@site.net');
$mail->AddBCC('junio@cotemar.com.br', 'Contato Via Site'); // Copia
$mail->AddBCC('nucleo.pedagogico@cotemar.com.br', 'Contato Via Site'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Pagamento de Matrícula - Cotemar (não responder)"; // Assunto da mensagem

$array_nomes = array('{Curso}', '{Polo}', '{CPF}', '{RG}', '{NomeCompleto}', '{DDDFixo}', '{TelFixo}', '{DDDCel}', '{TelCel}', '{Email}', '{Sexo}', '{Cep}', '{Endereco}', '{Numero}', '{Bairro}', '{Cidade}', '{Estado}', '{DataMatricula}', '{DataPagamento}', '{ValorMatricula}');

$array_valores = array($_POST['Curso'], $_POST['Polo'], $_POST['CPF'], $_POST['RG'], $_POST['NomeCompleto'], $_POST['DDDFixo'], $_POST['TelFixo'], $_POST['DDDCel'], $_POST['TelCel'], $_POST['Email'], $_POST['Sexo'], $_POST['CEP'], $_POST['Endereco'], $_POST['Numero'], $_POST['Bairro'], $_POST['Cidade'], $_POST['Estado'], $_POST['DataMatricula'], $_POST['DataPagamento'], $_POST['ValorMatricula']);

$template = file_get_contents("../templates/pagamento.tpl");

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
//$Curso = $_GET['Curso'];
$CPF = $_GET['CPF'];
require ("../conexao.php");

$query = "SELECT * FROM matricula_online WHERE CPF = '$CPF'";
$sql = mysql_query($query);

$linha=mysql_fetch_array($sql);

$CPF = $linha['CPF'];

if (!$CPF){
echo "Usuário não localizado no Sistema! <a href='cadastro.php' class='a'>Clique aqui</a> para se Cadastrar";
}else
{

?>
</font><br />
<form action="pgto.php" method="post" name="form">
<table width="966" border="0" cellpadding="0">
<tr>
  <td class="label">Curso:</td>
  <td><input name="Curso" type="text" class="field" id="Curso" value="<?php echo $linha["Curso"];?>" size="65" /></td>
</tr>
<tr>
  <td class="label">Polo / Unidade:</td>
  <td><input name="Polo" type="text" class="field" id="Polo" value="<?php echo $linha["Polo"];?>" size="65" /></td>
</tr>
<tr>
  <td class="label">&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td class="label">CPF:</td>
  <td><input name="CPF" type="text" class="field" id="CPF" value="<?php echo $linha["CPF"];?>" size="65" /></td>
</tr>
<tr>
  <td class="label">Identidade (RG):</td>
  <td><input name="RG" type="text" class="field" id="RG" value="<?php echo $linha["RG"];?>" size="65" /></td>
</tr>
<tr>
<td width="150" class="label"><label id="NomeCompleto" for="Curso">Nome Completo:</label></td>
<td><input name="NomeCompleto" type="text" class="field" id="NomeCompleto" value="<?php echo $linha["NomeCompleto"];?>" size="65" /></td>
</tr>
</table>
  
<table width="966" border="0" cellpadding="0">
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
<td width="150" class="label"><label id="Email" for="Email">Email:</label></td>
<td><input name="Email" type="text" class="field" id="Email" value="<?php echo $linha["Email"];?>" size="65" /></td>
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
<td width="150" class="label"><label id="CEP" for="CEP">CEP:</label></td>
<td><input name="CEP" type="text" class="field" id="CEP" value="<?php echo $linha["CEP"];?>" size="20" maxlength="9" /></td>
</tr>
</table>

<table width="966" border="0" cellpadding="0">
<tr>
<td width="150" class="label"><label id="Endereco" for="Endereco">Endere&ccedil;o:</label></td>
<td><input name="Endereco" type="text" class="field" id="Endereco" value="<?php echo $linha["Endereco"];?>" size="65" /></td>
</tr>
</table>

<table width="966" border="0" cellpadding="0">
<tr>
<td width="150" class="label"><label id="Numero" for="Numero">Numero:</label></td>
<td><input name="Numero" type="text" class="field" id="Numero" value="<?php echo $linha["Numero"];?>" size="20" /></td>
</tr>
</table>

<table width="966" border="0" cellpadding="0">
<tr>
<td width="150" class="label"><label id="Bairro" for="Bairro">Bairro:</label></td>
<td><input name="Bairro" type="text" class="field" id="Bairro" value="<?php echo $linha["Bairro"];?>" size="30" /></td>
</tr>
</table>

<table width="966" border="0" cellpadding="0">
<tr>
<td width="150" class="label"><label id="Cidade" for="Cidade">Cidade:</label></td>
<td><input name="Cidade" type="text" class="field" id="Cidade" value="<?php echo $linha["Cidade"];?>" size="30" /></td>
</tr>
</table>

<table width="966" border="0" cellpadding="0">
<tr>
<td width="150" class="label"><label id="Estado" for="Estado">Estado:</label></td>
<td><input name="Estado" type="text" class="field" id="Estado" value="<?php echo $linha["Estado"];?>" size="10" /></td>
</tr>
</table>

<table width="966" border="0" cellpadding="0">
<tr>
<td width="150" class="label"><label id="Estado" for="Estado">Data da Matrícula:</label></td>
<td><input name="DataMatricula" type="text" readonly="readonly" class="field" id="DataDoCadastro2" value="<?php echo datanormal($linha["DataDoCadastro"]);?>" size="15" maxlength="10" /></td>
</tr>
</table>

<table width="966" border="0" cellpadding="0">
<tr>
<td width="150" class="label"><label id="Estado" for="Estado">Data do Pagamento:</label></td>
<td><input name="DataPagamento" type="text" class="field" id="DataPagamento" onkeyup="mascara_data()" value="<?php echo $Data;?>" size="15" maxlength="10" readonly="readonly" /></td>
</tr>
</table>
<table width="966" border="0" cellpadding="0">
<tr>
<td width="150" class="label"><label id="Estado" for="Estado">Valor da Matrícula:</label></td>
<td><input name="ValorMatricula" type="text" readonly="readonly" class="field" value="100,00" size="15" maxlength="10" id="ValorMatricula" /></td>
</tr>
</table>
  </span></div>
<table width="966" border="0" cellpadding="0">
<tr>
<td width="645" class="label"><label id="DataDoCadastro" for="ValorMatricula">
<font color="#990000"></font></label></td>
<td width="349"><input name="submit" type="image" id="submit"onclick="javascript:processarvenda();" src="images/btcompra.jpg" alt="Pague com PagSeguro - é rápido, grátis e seguro!" border="0" /></td>
<input type="hidden" name="CPF" value="<?php echo $linha["CPF"];?>">
</tr>
</table>
<div align="center"></div>
</form>

<form action="https://pagseguro.uol.com.br/checkout/checkout.jhtml" method="post" name="formPagSeguro" target="pagseguro">
<input type="hidden" name="email_cobranca" value="matricula@cotemar.com.br">
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