<?php
require 'conexao.php';
if (isset($_POST['Enviar'])) {


	$data = isset($_POST['data']) ? $_POST['data'] : null;
	$nomecompleto = isset($_POST['fullname']) ? $_POST['fullname'] : null;
	$assunto = isset($_POST['subject']) ? $_POST['subject'] : null;
	$telfixo = isset($_POST['phone']) ? $_POST['phone'] : null;
	$email = isset($_POST['emailid']) ? $_POST['emailid'] : null;
	$comentario = isset($_POST['comments']) ? $_POST['comments'] : null;


	$sql = "INSERT INTO trabalheconosco(nomecompleto,assunto,telfixo,email,comentario,data)
	VALUES ('$nomecompleto','$assunto','$telfixo','$email','$comentario','$data')";
	$query = mysql_query($sql, $con) or die (mysql_error());


// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
	require("phpmailer/class.phpmailer.php");
	require("email_conf.php");
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
    $mail->From = "atendimento@grupoandrademartins.com.br"; // Seu e-mail
    $mail->FromName = "Faculdade Famart"; // Seu nome
    // Define os destinatário(s)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->AddAddress($email, $nomecompleto);
    //$mail->AddAddress("suporte@grupoandrademartins.com.br", "Contato Online FAMART");
    $mail->AddAddress("coordenacao@grupoandrademartins.com.br", "Contato Online FAMART");

    //$mail->AddAddress('ciclano@site.net');

    //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
    // Define os dados técnicos da Mensagem
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
    $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
    // Define a mensagem (Texto e Assunto)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->Subject = "Famart - Fale Conosco (não responder)"; // Assunto da mensagem
    $array_nomes = array('{Manifestacao}', '{NomeCompleto}', '{Telefone}', '{Email}', '{Mensagem}', '{DataContato}');
    $array_valores = array(
    	isset($_POST['subject']) ? $_POST['subject'] : null,
    	isset($_POST['fullname']) ? $_POST['fullname'] : null,
    	isset($_POST['phone']) ? $_POST['phone'] : null,
    	isset($_POST['emailid']) ? $_POST['emailid'] : null,
    	isset($_POST['comments']) ? $_POST['comments'] : null,
    	isset($_POST['data']) ? $_POST['data'] : null);
    $template = file_get_contents("templates/contato.tpl");
    $mensagem = str_replace($array_nomes, $array_valores, $template);
    $mail->Body = $mensagem;
    //$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n <IMG class=wp-smiley alt=:) src="http://blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif" nodeIndex="2"> ";
    // Define os anexos (opcional)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
    // Envia o e-mail


    $enviado = $mail->Send();  #########################################################
    #####################################################################################

    // Limpa os destinatários e os anexos
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();
    // Exibe uma mensagem de resultado
    if ($enviado) {o

    	echo "<script>
    	alert('Email enviado com sucesso!');
    </script>  ";
    echo "<script>
    history.back();
</script>  ";

} else {
	echo "O comentário foi registrado em nosso sistema, no entanto, houve uma falha ao enviar a notificação para: $Email<br /><br />";
	echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
}


}
