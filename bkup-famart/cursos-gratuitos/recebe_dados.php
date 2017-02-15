<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
<?php

date_default_timezone_set('America/Sao_Paulo');
require 'conexao.php';


if (array_key_exists('enviar', $_POST)) {


    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $profissao = isset($_POST['profissao']) ? $_POST['profissao'] : null;
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
    $estado = isset($_POST['estado']) ? $_POST['estado'] : null;
    $possui_r2 = isset($_POST['possui_r2']) ? $_POST['possui_r2'] : null;
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
    $rg = isset($_POST['rg']) ? $_POST['rg'] : null;
    $celular = isset($_POST['celular']) ? $_POST['celular'] : null;
    $formacao = isset($_POST['formacao']) ? $_POST['formacao'] : null;
    $possui_graduacao = isset($_POST['possui_graduacao']) ? $_POST['possui_graduacao'] : null;
    $curso_interesse_pos = isset($_POST['curso_interesse_pos']) ? $_POST['curso_interesse_pos'] : null;
    $pretende_fazer_pos = isset($_POST['pretende_fazer_pos']) ? $_POST['pretende_fazer_pos'] : null;
    $pretende_especializacao = isset($_POST['pretende_especializacao']) ? $_POST['pretende_especializacao'] : null;
    $curso_escolhido = isset($_POST['curso_escolhido']) ? $_POST['curso_escolhido'] : null;
    $graduacao = isset($_POST['graduacao']) ? $_POST['graduacao'] : null;
    $como_conheceu = isset($_POST['como_conheceu']) ? $_POST['como_conheceu'] : null;
    $sindicato = isset($_POST['sindicato']) ? $_POST['sindicato'] : null;
    $possui_sindicato = isset($_POST['possui_sindicato']) ? $_POST['possui_sindicato'] : null;
    $data = date('d/m/y - H:m:s');
    $ip = $_SERVER['REMOTE_ADDR'];


    $sql = "INSERT INTO cadastro_moodle(nome,cpf,email,profissao,cidade,estado,possui_r2,telefone,rg,celular,formacao,possui_graduacao,curso_interesse_pos,pretende_fazer_pos,pretende_especializacao,curso_escolhido,ip,graduacao,como_conheceu,sindicato,possui_sindicato)

VALUES ('$nome','$cpf','$email','$profissao','$cidade','$estado','$possui_r2','$telefone','$rg','$celular','$formacao','$possui_graduacao','$curso_interesse_pos','$pretende_fazer_pos','$pretende_especializacao','$curso_escolhido','$ip','$graduacao','$como_conheceu','$sindicato','$possui_sindicato')";

mysql_query($sql,$con) or die(mysql_error());


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
    //$mail->From = "atendimento@grupoandrademartins.com.br"; // Seu e-mail
    $mail->FromName = "Famart"; // Seu nome
    // Define os destinatário(s)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->AddAddress($email, $nome);

    // $mail->AddAddress('ciclano@site.net');
    // $mail->AddBCC('suporte@grupoandrademartins.com.br', 'Contato Via Site'); // Copia
    // $mail->AddBCC('diti@grupoandrademartins.com.br', 'Contato Via Site'); // Copia
    // $mail->AddBCC('julio@futuratec.net', 'Contato Via Site'); // Copia
    // $mail->AddBCC('comercial@grupoandrademartins.com.br', 'Contato Via Site'); // Copia
    // $mail->AddBCC('juridicomais@grupoandrademartins.com.br', 'Contato Via Site'); // Copia
    $mail->AddBCC('marketing@grupoandrademartins.com.br', 'Contato Via Site'); // Copia
    $mail->AddBCC('suporte03@grupoandrademartins.com.br', 'Contato Via Site'); // Copia
    //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta


    // Define os dados técnicos da Mensagem
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
    $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
    // Define a mensagem (Texto e Assunto)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->Subject = "Cadastro Cursos Livres"; // Assunto da mensagem
    $array_nomes = array(
        '{Nome}',
        '{CPF}',
        '{Email}',
        '{Profissao}',
        '{Cidade}',
        '{Estado}',
        '{PossuiR2}',
        '{Telefone}',
        '{RG}',
        '{Celular}',
        '{Formacao}',
        '{PossuiGraduacao}',
        '{CursoInteressePos}',
        '{PretendeFazerPos}',
        '{PretendeFazerEspecializacao}',
        '{CursoEscolhido}',
        '{Graduacao}',
        '{ComoConheceu}',
        '{Sindicato}',
        '{PossuiSindicato}'
    );
    $array_valores = array(
        $nome,
        $cpf,
        $email,
        $profissao,
        $cidade,
        $estado,
        $possui_r2,
        $telefone,
        $rg,
        $celular,
        $formacao,
        $possui_graduacao,
        $curso_interesse_pos,
        $pretende_fazer_pos,
        $pretende_especializacao,
        $curso_escolhido,
        $graduacao,
        $como_conheceu,
        $sindicato,
        $possui_sindicato
    );
    $template = file_get_contents("templates/matricula-gratuita.tpl");
    $mensagem = str_replace($array_nomes, $array_valores, $template);
    $mail->Body = $mensagem;
    //$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n <IMG class=wp-smiley alt=:) src="http://blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif" nodeIndex="2"> ";
    // Define os anexos (opcional)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
    // Envia o e-mail
    //
    //
    $enviado = $mail->Send();

    // Limpa os destinatários e os anexos
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();
    // Exibe uma mensagem de resultado
    if ($enviado) {
        echo "<script language= 'JavaScript'>
        location.href='http://www.famart.com.br/cursos-gratuitos/resposta.php'
         </script>    ";

    } else {
        echo "O comentário foi registrado em nosso sistema, no entanto, houve uma falha ao enviar a notificação para: $email<br /><br />";
        echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
    }


// ########################################################################
// ################### FIM EMAIL ##########################################
// ########################################################################


}




