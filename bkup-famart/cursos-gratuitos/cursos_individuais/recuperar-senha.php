<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>: Acessar Área do Aluno :</title>
<link rel="stylesheet"  type="text/css" href="style.css" />
</head>
<?php
include("topo.php");
?>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="966" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <h1>RECUPERAR SENHA</h1>
<div>
  <form id="form1" name="form1" method="post" action="">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="6%">E-mail:</td>
        <td width="34%"><input name="EmailRecuperar" type="text" size="50" /></td>
        <td width="60%"><input  name="Recuperar" type="submit" value="ENVIAR" id="Recuperar" /></td>
      </tr>
    </table>
  </form>
    
    
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
?>
</div>
    </td>
  </tr>
</table>

</body>
</html>
