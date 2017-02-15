<?php
ob_start();

if ($_POST['Enviar'])
{
$Curso = $_POST['Curso'];
$IdCadastrado = $_POST["IdCadastrado"];
$SenhaCadastrado = $_POST["SenhaCadastrado"];

require ("conexao.php");

$query = "SELECT * FROM cadastro_cursos";
$sql = mysql_query($query, $con) or die(mysql_error());

$dadoinvalido = 0;

while ($linha=mysql_fetch_array($sql)){

$Controleusuario = $linha["CPF"];
$Password = $linha["Senha"];

	if (($Controleusuario == $IdCadastrado) && ($Password == $SenhaCadastrado))
	{
	header("Location: pgto.php?CPF=$IdCadastrado&Curso=$Curso");
	}
	else
	{
		$dadoinvalido = 1;
	}
}	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>: Identificalçao :</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<?php
include("topo.php");
?>
<body leftmargin="0" topmargin="0" marginwidth="0">
<?php
$Curso = $_GET['Curso'];
?>
<table width="966" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <h1>IDENTIFICAÇÃO </h1>
<table width="966" height="281" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="282" height="281" valign="top" background="images/fundoidentificacao.jpg">
    <form id="form1" name="form1" method="post" action="identificacao.php">
      <table width="93%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="center"><font color="#990000" size="5" face="Verdana, Arial, Helvetica, sans-serif">Já sou cadastrado</font></div></td>
        </tr>
        <tr>
          <td><font color="#F0F0F0">Cl</font></td>
        </tr>
        <tr>
          <td height="30">Digite seu CPF:</td>
        </tr>
        <tr>
          <td><label>
            <input name="IdCadastrado" type="text" id="IdCadastrado" size="42" maxlength="11" />
          </label></td>
        </tr>
        <tr>
          <td><font color="#F0F0F0">Cl</font></td>
        </tr>
        <tr>
          <td height="30">Senha:</td>
        </tr>
        <tr>
          <td><input name="SenhaCadastrado" type="password" id="SenhaCadastrado" size="42" /></td>
        </tr>
        
        <tr>
          <td></td>
        </tr>
        <tr>
          <td><div align="center">
            <label>
            <div align="left"><font color="#F0F0F0">Cl</font></div>
            <input name="Curso" type="hidden" id="Curso" value="<?php echo $Curso; ?>" />
            </label>
          </div></td>
        </tr>
        <tr>
          <td><div align="center"><font color="#F0F0F0">
            <input  name="Enviar" type="submit" value="CONTINUAR" />
          </font></div></td>
        </tr>
        <tr valign="middle">
          <td height="35" valign="middle">
          <font size="2">
          <?php
          	if($dadoinvalido==1){
			echo "<img src='/images/atencao.gif' /> Usuário não localizado no Sistema!";
			}
          ?></font></td>
        </tr>
      </table>
    </form></td>
    <td width="63">&nbsp;</td>
    <td width="282" valign="top" background="images/fundoidentificacao.jpg"><form id="form2" name="form2" method="post" action="">
      <table width="93%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="center"><font color="#990000" size="5" face="Verdana, Arial, Helvetica, sans-serif">
            <?php $Curso = $_GET['Curso']; ?>
            Quero me cadastrar</font></div></td>
        </tr>
        <tr>
          <td><font color="#F0F0F0">Cl</font></td>
        </tr>
        <tr>
          <td height="30">Email:</td>
        </tr>
        <tr>
          <td><label>
            <input name="IdCadastrar" type="text" id="IdCadastrar" size="42" />
          </label></td>
        </tr>
        <tr>
          <td><font color="#F0F0F0">Cl</font></td>
        </tr>
        <tr>
          <td height="30">Nome do Curso:</td>
        </tr>
        <tr>
          <td><input name="CursoCadastrar" type="text" id="Id4" value="<?php echo $Curso; ?>" size="42" /></td>
        </tr>
        
        <tr>
          <td><div align="left"><font color="#F0F0F0">Cl</font></div></td>
        </tr>
        <tr>
          <td><div align="center"><font color="#F0F0F0">
            <input  name="Cadastrar" type="submit" value="CONTINUAR" id="Cadastrar" />
          </font></div></td>
        </tr>

        <tr>
          <td height="36" valign="middle">
            <font size="2">
            <?php
		if ($_POST['Cadastrar'])
		{

		$IdCadastrar = $_POST['IdCadastrar'];
		$CursoCadastrar = $_POST['CursoCadastrar'];
		
		if (($_POST['IdCadastrar']!="") && ($_POST['CursoCadastrar']!="")){
		echo "<img src='/images/loading.gif' /> Aguarde...";
		header("Location: cadastro.php?IdCadastrar=$IdCadastrar&Curso=$CursoCadastrar");
		}else{
		echo "<img src='/images/atencao.gif' />Preencha os dados acima!";
		}
		}
		?></font></td>
        </tr>
      </table>
    </form>    </td>
    <td width="61">&nbsp;</td>
    <td width="282" valign="top" background="images/fundoidentificacao.jpg"><form id="form3" name="form3" method="post" action="identificacao.php">
      <table width="93%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="center"><font color="#990000" size="5" face="Verdana, Arial, Helvetica, sans-serif">Esqueci minha senha</font></div></td>
        </tr>
        <tr>
          <td><font color="#F0F0F0">Cl</font></td>
        </tr>
        <tr>
          <td height="30">Email informado no Cadastro:</td>
        </tr>
        <tr>
          <td><label>
            <input name="EmailRecuperar" type="text" size="42" />
          </label></td>
        </tr>
        <tr>
          <td><div align="center"><font color="#F0F0F0">Cl</font></div></td>
        </tr>
        <tr>
          <td>
            <div align="center">
              <input  name="Recuperar" type="submit" value="CONTINUAR" id="Recuperar" />
            </div></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="center"></div></td>
        </tr>
        <tr>
          <td>
            <div align="center"></div></td>
        </tr>
        <tr>
          <td height="44" valign="middle">
		    <font size="2">
		    <?php
		if ($_POST['Recuperar'])
		{
		
		require ("conexao.php");
		
		$EmailRecuperar = $_POST['EmailRecuperar'];
		
		
		$query = "SELECT * FROM cadastro_cursos WHERE Email = '$EmailRecuperar'";
		$sql = mysql_query($query);

		$linha=mysql_fetch_array($sql);
		
		$NomeCompleto = $linha['NomeCompleto'];
		$Usuario = $linha['Usuario'];
		$Email = $linha['Email'];
		$Senha = $linha['Senha'];

		if (!$linha['Email']){
		$encontrou = "Não";
		}else
		{
		require ("conexao.php");
		$query = "INSERT INTO recuperarsenha (EnderecoEmail) VALUES ('$EmailRecuperar')";
		$sql=mysql_query($query) or die('ERRO!' . mysql_error());
		$encontrou = "Sim";
		}
		
		echo "<p>&nbsp;</p>";

  if ($encontrou == "Não"){
  echo "<table width='100%'>
    	<tr>
      	<td width='3%'><img src='images/atencao.gif' width='18' height='17' /></td>
      	<td width='97%'> Nenhum cadastro foi encontrado com o e-mail informado. </td>
    	</tr>
  		</table>";
		}else{
		echo "<table width='100%'>
    	<tr>
      	<td width='3%'><img src='images/confirmacao.gif' width='18' height='17' /></td>
      	<td width='97%'> A Senha foi enviada para o E-mail informado. </td>
    	</tr>
  		</table>";
		}
		

if($encontrou == "Sim"){
		// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("phpmailer/class.phpmailer.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "mail.escoladobrasilvip.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'recuperar-senha@escoladobrasilvip.com.br'; // Usuário do servidor SMTP
$mail->Password = 'recuperarsenhaedbvip'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "recuperar-senha@escoladobrasilvip.com.br"; // Seu e-mail
$mail->FromName = "Escola do Brasil VIP"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress($EmailRecuperar, $NomeCompleto);
//$mail->AddAddress('ciclano@site.net');
$mail->AddBCC('nucleojunio@hotmail.com', 'Contato Via Site'); // Copia
$mail->AddBCC('nucleocelio@hotmail.com', 'Contato Via Site'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Email de Recuperação de Senha (não responder)"; // Assunto da mensagem

$array_nomes = array('{Usuario}', '{Email}', '{Senha}');

$array_valores = array($Usuario, $Email, $Senha);

$template = file_get_contents("templates/recuperasenha.tpl");

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
echo "A CONFIRMAÇÃO DA SENHA FOI ENVIADA PARA: $Email";
} else {
echo "O REGISTRO NO SITE FOI EFETUADO, NO ENTANTO HOUVE UMA FALHA AO ENVIAR A NOTIFICAÇÃO PARA: $Email<br /><br />";
//echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
}
}
}
?></font></td>
        </tr>
      </table>
    </form>    </td>
  </tr>
</table>
    </td>
  </tr>
</table>

</body>
</html>