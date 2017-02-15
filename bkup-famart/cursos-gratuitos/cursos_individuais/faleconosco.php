<?php
$Data = date("d/m/Y");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>: Fale Conosco :</title>
<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<?php
include("topo.php");
?>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="966" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <h1> FALE CONOSCO</h1>
<fieldset>
ESCOLHA UMA DAS OPÇÕES PARA CONTATO:
<table width="100%" border="0">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="17%"><div align="center">
    <!-- http://www.LiveZilla.net Chat Button Link Code -->
<a href="javascript:void(window.open('http://www.escoladobrasilvip.com.br/suporte/chat.php','','width=590,height=580,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))"><img src="images/suporte.jpg" width="128" height="128" border="0" /></a>
<!-- http://www.LiveZilla.net Chat Button Link Code -->
                      <!-- http://www.LiveZilla.net Tracking Code -->
                      </span></font>
                      <div id="livezilla_tracking" style="display:none"></div>
                      <span class="alaranja"><font size="2" face="Arial, Helvetica, sans-serif">
                      <script type="text/javascript">
<!-- DON'T PLACE IN HEAD ELEMENT -->
var script = document.createElement("script");script.type="text/javascript";var src = "http://www.escoladobrasilvip.com.br/suporte/server.php?request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);</script><!-- http://www.LiveZilla.net Tracking Code -->
    </td>
    <td colspan="2"><strong>
    <!-- http://www.LiveZilla.net Chat Button Link Code -->
<a href="javascript:void(window.open('http://www.escoladobrasilvip.com.br/suporte/chat.php','','width=590,height=580,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))" class="a">CHAT / SUPORTE ON-LINE</a>
<!-- http://www.LiveZilla.net Chat Button Link Code -->
                      <!-- http://www.LiveZilla.net Tracking Code -->
                      <div id="livezilla_tracking" style="display:none"></div>
                      <span class="alaranja"><font size="2" face="Arial, Helvetica, sans-serif">
                      <script type="text/javascript">
<!-- DON'T PLACE IN HEAD ELEMENT -->
var script = document.createElement("script");script.type="text/javascript";var src = "http://www.escoladobrasilvip.com.br/suporte/server.php?request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);</script><!-- http://www.LiveZilla.net Tracking Code --></strong>
      <div></div>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><a href="mailto:atendimento@escoladobrasilvip.com.br"><img src="images/email3.jpg" width="128" height="128" border="0" /></a></div></td>
    <td colspan="2"><strong><a href="mailto:atendimento@escoladobrasilvip.com.br" class="a">CONTATO POR E-MAIL</a>
      <br />
    </strong>
      <div> <a href="mailto:vendas@escoladobrasilvip.com.br" class="a">vendas@escoladobrasilvip.com.br</a></div>
    <div> <a href="mailto:duvidas@escoladobrasilvip.com.br" class="a">duvidas@escoladobrasilvip.com.br</a></div>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><img src="images/form.jpg" width="128" height="128" /></div></td>
    <td colspan="2"><strong>FORMULÁRIO DE CONTATO</strong>
    <div>Se preferir, preencha o formulário abaixo que entraremos em contato</div>
    </td>
  </tr>
</table>
<br />
<form id="captchaform" name="captchaform" method="post" action="faleconosco.php">
  <table width="100%" border="0">
    <tr>
      <td width="16%"><div align="right" class="label2">Assunto:</div></td>
      <td width="84%"><label>
        <select name="Assunto" class="select" id="Assunto">
          <option>Vendas</option>
          <option selected="selected">Certificado</option>
          <option>Dúvidas</option>
          <option>Críticas</option>
          <option>Sugestões</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="label2">Nome do Curso:</div></td>
      <td><label>
        <input name="NomeCurso" class="field" id="NomeCurso" size="60">
        </label></td>
    </tr>
    <tr>
      <td><div align="right" class="label2">Nome Completo:</div></td>
      <td><label>
        <input name="NomeCompleto" type="text" class="field" id="NomeCompleto" size="60" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="label2"><strong>Email de Contato:</strong></div></td>
      <td><input name="Email" type="text" class="field" id="Email" size="60" /></td>
    </tr>
    <tr>
      <td><div align="right" class="label2">Mensagem:</div></td>
      <td><textarea name="Mensagem" cols="52" rows="12" class="textarea" id="Mensagem">
</textarea></td>
    </tr>
<?php

require ("conexao.php");

$Assunto = $_POST["Assunto"];
$NomeCurso = $_POST["NomeCurso"];
$NomeCompleto = $_POST["NomeCompleto"];
$Email = $_POST["Email"];
$Mensagem = $_POST["Mensagem"];
$DataContato = invertedata($_POST["DataContato"]);
?>


    
    <tr>
      <td class="label2">Data do Contato:</td>
      <td><input name="DataContato" type="text" class="field" id="DataContato" value="<?php echo $Data; ?>" size="15" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><font color="#990000" size="2">
        <input type="submit" name="Enviar" id="Enviar" value="Enviar" />
        <?php
if($Enviar!="")
{

$query = "INSERT INTO faleconosco (Assunto, NomeCurso, NomeCompleto, Email, Mensagem, DataContato) VALUES ('$Assunto', '$NomeCurso', '$NomeCompleto', '$Email', '$Mensagem', '$DataContato')";

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
$mail->Username = 'fale-conosco@escoladobrasilvip.com.br'; // Usuário do servidor SMTP
$mail->Password = 'faleconoscoedbvip'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "fale-conosco@escoladobrasilvip.com.br"; // Seu e-mail
$mail->FromName = "Escola do Brasil VIP"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress($Email, $NomeCompleto);
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
$mail->Subject  = "Atendimento On-Line Fale-Conosco (não responder)"; // Assunto da mensagem

$array_nomes = array('{Assunto}', '{TipoCurso}', '{NomeCurso}', '{NomeCompleto}', '{Email}', '{Mensagem}', '{DataContato}');

$array_valores = array($_POST['Assunto'], $_POST['TipoCurso'], $_POST['NomeCurso'], $_POST['NomeCompleto'], $_POST['Email'], $_POST['Mensagem'], $_POST['DataContato']);

$template = file_get_contents("templates/fale-conosco.tpl");

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
echo "UM NOVO CHAMADO FOI ABERTO, AGUARDE QUE IREMOS RESPONDER! UM E-MAIL DE NOTIFICAÇÃO FOI ENVIADO PARA: $Email";
} else {
echo "O CHAMADO FOI REGISTRADO EM NOSSO SISTEMA, NO ENTANTO HOUVE UMA FALHA AO ENVIAR A NOTIFICAÇÃO PARA: $Email<br /><br />";
echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
}

}
?>
      </font></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
</form>
</fieldset>
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