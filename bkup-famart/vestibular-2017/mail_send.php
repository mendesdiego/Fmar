<?php
//Variáveis

session_start();
$_SESSION['nome'] = $nome;


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



// Compo E-mail
 // $mailoculto = "web02@grupoandrademartins.com.br";
  $arquivo = "

    <html>
        <table width='100%' border='0' cellpadding='1' cellspacing='1' style='color:#1E9460; border-left: solid 1px #ccc; border-right: solid 1px #ccc; padding-left:25px; padding-right:25px;'>
            <tr>
              <td>
              <tr bgcolor='#1E9460'>
                 <td align='center' height=100'><img src='http://faculdademachadodeassis.edu.br/img/logo_nova.png' alt='FAMA - Faculdade Machado de Assis'></td>
                </tr>

                <tr>
               <td><h2>FAMA – Faculdade Machado de Assis / Inscri&ccedil;&atilde;o do site Vestibular 2017</h2></td>
              </tr>

                <tr>
                 <td><h2>Olá,".$nome."</h2></td>
                </tr>

                  <tr>
                 <td>Estamos muito felizes por você ter dado o primeiro passo em direção a um futuro de sucesso.Confirme seus dados abaixo, imprima este comprovante e apresente no dia da prova.</td>
                </tr>

                <tr>
                 <td><h2>DADOS DE INSCRIÇÃO</h2></td> 
                 
                </tr>

                  <tr>
                 <td><p><strong>Nome: </strong> ".$nome."</p></td>
                </tr>

                <tr>
                 <td><p><strong>Curso: </strong>".$curso."</p></td>
                </tr>

                  <tr>
                 <td><p><strong>E-mail: </strong>".$email."</p></td>
                </tr>

                <tr>
                 <td><p><strong>Email Alternativo: </strong>".$email_alternativo."</p></td>
                </tr>

                  <tr>
                 <td><p><strong>Telefone: </strong>".$telfixo."</p></td>
                </tr>

                <tr>
                 <td><p><strong>CPF: </strong>".$cpf."</p></td>
                </tr>

                  <tr>
                 <td><p><strong>CEP: </strong>".$cep."</p></td>
                </tr>

                <tr>
                 <td><p><strong>Endereço: </strong>".$endereco.", ".$numero.", ".$complemento.", </p></td>
                </tr>

                  <tr>
                 <td><p><strong>Cidade: </strong>".$cidade."</p></td>
                </tr>

                <tr>
                 <td><p><strong>Estado: </strong> ".$estado."</p></td>
                </tr>

                <tr>
                 <td><h2>DADOS DA PROVA</h2>
                    <p><strong>Local:</strong> FAMA – Faculdade Machado de Asssis</p>
                    <p><strong>Endereço:</strong> Rua Joaquim Nabuco, 968, Santa Cândida  - Curitiba-PR CEP 82620-060</p>
                    <p><strong>Data:</strong> 28/01/2017</p>
                    <p><strong>Horário:</strong> 14:00 às 18:00</p>
                    <p><strong>Referência:</strong> xxxxxxx</p>

                 </td>
                </tr>

                <tr>
                 <td>
                    <p>Caso tenha encontrado algum erro, entre em contato com a <strong>FAMA</strong>.<br/>Esperamos você no dia 28<br/>Boa sorte!</p>
                 </td>
                </tr>                 
            </td>
          </tr>
          <tr>
            <td>Este e-mail foi enviado do site http://faculdademachadodeassis.edu.br/ em <b>$data_envio</b> às <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
  ";


$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: ".$email."\n"; //E-mail do remetente
$headers .= "Return-Path: fama@faculdademachadodeassis.edu.br\n"; //E-mail do remetente
$header = "Bcc: $mailoculto\n";


mail("fama@faculdademachadodeassis.edu.br", $assunto , $arquivo, $headers, "-r". "web02@grupoandrademartins.com.br");
include 'email_resposta.php';

?>