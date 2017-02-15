<?php
require 'conexao.php';
if (isset($_POST['Enviar'])) {
    $Curso = $_POST['Curso'];
    $CPF = $_POST['CPF'];
    $RG = $_POST['RG'];
    $NomeCompleto = $_POST['NomeCompleto'];
    $DDDFixo = isset($_POST['DDDFixo']) ? $_POST['DDDFixo'] : null;
    $TelFixo = $_POST['TelFixo'];
    $DDDCel = isset($_POST['DDDCel']);
    $TelCel = $_POST['TelCel'];
    $Email = $_POST['Email'];
    $Formacao = $_POST['Formacao'];
    $AnoConclusao = $_POST['AnoConclusao'];
    $DNascimento = $_POST['DNascimento'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $Bairro = $_POST['Bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $DataMatricula = $_POST['DataMatricula'];
    $FormaPagamento = isset($_POST['FormaPagamento']) ? $_POST['FormaPagamento'] : null;
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : null;
    $HorarioParaEntrarmosEmContato = $_POST['HorarioParaEntrarmosEmContato'];


    $sql = "INSERT INTO matricula_online(Curso,CPF,RG,NomeCompleto,TelFixo,TelCel,Email,Formacao,AnoConclusao,DNascimento,cep,Endereco,Numero,Bairro,cidade,estado,DataMatricula,HorarioParaEntrarmosEmContato,FormaPagamento,Sexo)
    VALUES ('$Curso','$CPF','$RG','$NomeCompleto','$TelFixo','$TelCel','$Email','$Formacao','$AnoConclusao','$DNascimento','$cep','$endereco','$numero ','$Bairro','$cidade','$estado','$DataMatricula','$HorarioParaEntrarmosEmContato','$FormaPagamento','$sexo')";
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
    $mail->AddAddress($Email, $NomeCompleto);
    //$mail->AddAddress("suporte@grupoandrademartins.com.br", "Contato Online FAMART");
    $mail->AddAddress("web01@grupoandrademartins.com.br", "Contato Online FAMART");
    /*$mail->AddCC("secretariaacademica@famart.edu.br", "FAMART – Faculdade Martins");
    $mail->AddCC("direcaoacademica@famart.edu.br", "FAMART – Faculdade Martins");*/
    //$mail->AddAddress('ciclano@site.net');
    //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
    // Define os dados técnicos da Mensagem
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
    $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
    // Define a mensagem (Texto e Assunto)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->Subject = "Famart - Fale Conosco (não responder)"; // Assunto da mensagem
    $array_nomes = array('{Manifestacao}', '{NomeCompleto}', '{Telefone}', '{Email}', '{DataContato}', '{HorarioParaEntrarmosEmContato}', '{cidade}', '{CPF}');
    $array_valores = array($Curso, $NomeCompleto, $TelFixo, $Email, $DataMatricula, $HorarioParaEntrarmosEmContato, $cidade, $CPF);


    $template = file_get_contents("templates/curso_livre.tpl");
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
    if ($enviado) {
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
?>