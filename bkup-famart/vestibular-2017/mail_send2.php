<?php


$curso = $_POST['curso'] ;
$nome = $_POST['nome'] ;
$email = $_POST['email'] ;
$email_alternativo = $_POST['email_alternativo'] ;
$telfixo = $_POST['telfixo'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$assunto = "Confirmação de inscrição – FAMA – FACULDADE MACHADO DE ASSIS 2017" ;


 
// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("class/class.phpmailer.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer(true);
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
 
try {
     $mail->Host = 'smtp.sema.edu.br/'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
     $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     $mail->Port       = 587; //  Usar 587 porta SMTP
     $mail->Username = 'fama@faculdademachadodeassis.edu.br'; // Usuário do servidor SMTP (endereço de email)
     $mail->Password = 'F75641610'; // Senha do servidor SMTP (senha do email usado)
 
     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
     $mail->SetFrom('fama@faculdademachadodeassis.edu.br', 'Nome'); //Seu e-mail
     $mail->AddReplyTo('fama@faculdademachadodeassis.edu.br', 'Nome'); //Seu e-mail
     $mail->Subject = $assunto;//Assunto do e-mail
 
 
     //Define os destinatário(s)
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->AddAddress('fama@faculdademachadodeassis.edu.br', 'Teste Locaweb');
 
     //Campos abaixo são opcionais 
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
     $mail->AddBCC('renatoccve@gmail.com', 'Destinatario2`'); // Cópia Oculta
     //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
 
 
     //Define o corpo do email
     //$mail->MsgHTML('corpo do email'); 
 
     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
     $mail->MsgHTML(file_get_contents('arquivo.html'));
 
     $mail->Send();
     echo "Mensagem enviada com sucesso</p>\n";
 
    //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
      echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}
?>