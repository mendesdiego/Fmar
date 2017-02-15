<!DOCTYPE html>
<html lang = "en">
<head>
	<link rel="shortcut icon" href="img/favicon.png " />
	<meta name = "viewport" id = "viewport"
	content = "width=device-width,minimum-scale=1.0,maximum-scale=3.0,initial-scale=1.0" />
	<script src = "js/min/jquery-v1.10.2.min.js" type = "text/javascript"></script>
	<link rel = "stylesheet" href = "http://famart.com.br/css/style.css">
	<link rel = "stylesheet" href = "http://famart.com.br/css/paginas.css">
	<meta charset = "UTF-8">
	<title>Inscrição e Pagamento</title>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1644988275758976');
fbq('track', "PageView");
// CompleteRegistration
// Track when a registration form is completed (ex. complete subscription, sign up for a service)
fbq('track', 'CompleteRegistration');

</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1644988275758976&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->






	
  <style type="text/css">
    .botao-pag-seg {
      width: 100%!important;
    }

    .texto-abaixo {
      width: 100%;
      float: left;
      margin-bottom: 4%;
    }
  </style>

</head>


<body>


  <?php 
  if (array_key_exists('inscricaoonline', $_POST)){
   include('classes/conexao.class.php');


    // foreach ($_POST as $key => $value) {
    //   echo $key." -> ".$value."<br>";
    // }

    // exit();
   $nome               =isset($_POST['nome'])?$_POST['nome']:null;
   $dia                =isset($_POST['dia'])?$_POST['dia']:null;
   $horario            =isset($_POST['horario'])?$_POST['horario']:null;
   $escolaridade       =isset($_POST['escolaridade'])?$_POST['escolaridade']:null;
   $como_conheceu      =isset($_POST['como_conheceu'])?$_POST['como_conheceu']:null;
   $sexo               =isset($_POST['sexo'])?$_POST['sexo']:null;
   $curso              =isset($_POST['curso'])?$_POST['curso']:null;
   $unidade            =isset($_POST['unidade'])?$_POST['unidade']:null;
   $rg                 =isset($_POST['rg'])?$_POST['rg']:null;
   $orgao              =isset($_POST['orgao'])?$_POST['orgao']:null;
   $cpf                =isset($_POST['cpf'])?$_POST['cpf']:null;
   $nascimento         =isset($_POST['nascimento'])?$_POST['nascimento']:null;
   $nacionalidade      =isset($_POST['nacionalidade'])?$_POST['nacionalidade']:null;
   $naturalidade       =isset($_POST['naturalidade'])?$_POST['naturalidade']:null;
   $email              =isset($_POST['email'])?$_POST['email']:null;
   $emailalternativo   =isset($_POST['emailalternativo'])?$_POST['emailalternativo']:null;
   $estadocivil        =isset($_POST['estadocivil'])?$_POST['estadocivil']:null;
   $cep                =isset($_POST['cep'])?$_POST['cep']:null;
   $endereco           =isset($_POST['endereco'])?$_POST['endereco']:null;
   $numero             =isset($_POST['numero'])?$_POST['numero']:null;
   $bairro             =isset($_POST['bairro'])?$_POST['bairro']:null;
   $local             =isset($_POST['local'])?$_POST['local']:null;
   $estado             =isset($_POST['estado'])?$_POST['estado']:null;
   $complemento        =isset($_POST['complemento'])?$_POST['complemento']:null;
   $telfixo            =isset($_POST['telfixo'])?$_POST['telfixo']:null;
   $telcel             =isset($_POST['telcel'])?$_POST['telcel']:null;
   $necessidades       =isset($_POST['necessidades'])?$_POST['necessidades']:null;
   $descricao       	=isset($_POST['descricao'])?$_POST['descricao']:null;
   $enem          		=isset($_POST['enem'])?$_POST['enem']:null;
   $num_enem          	=isset($_POST['num_enem'])?$_POST['num_enem']:null;
   $ano_de_realizacao  =isset($_POST['ano_de_realizacao'])?$_POST['ano_de_realizacao']:null;
   $receber            =isset($_POST['receber'])?$_POST['receber']:null;
   $pagamento          =isset($_POST['FormaPagamento'])?$_POST['FormaPagamento']:null;
   $datamatricula      =date("d.m.y - H:i:s ");
   $emailPagSeguro     ="auditoria@grupoandrademartins.com.br";
   $email_unidade      ="";
   $telefone_unidade   ="";





   $sql = "INSERT INTO inscricao_vestibular
   (
    nome,
    dia,
    horario,
    escolaridade,
    unidade,
    como_conheceu,
    curso,
    sexo,
    rg,
    orgao,
    cpf,
    nascimento,
    nacionalidade,
    naturalidade,
    email,
    emailalternativo,
    estadocivil,
    cep,
    endereco,
    numero,
    bairro,
    local,
    estado,
    complemento,
    telfixo,
    telcel,
    mae,
    pai,
    necessidades,
    descricao,
    enem,
    num_enem,
    ano_de_realizacao,
    receber,
    datamatricula
    )
VALUES (
	'$nome',
  '$dia',
  '$horario',
  '$escolaridade',
  '$unidade',
  '$como_conheceu',
  '$curso',
  '$sexo',
  '$rg',
  '$orgao',
  '$cpf',
  '$nascimento',
  '$nacionalidade',
  '$naturalidade',
  '$email',
  '$emailalternativo',
  '$estadocivil',
  '$cep',
  '$endereco',
  '$numero',
  '$bairro',
  '$local',
  '$estado',
  '$complemento',
  '$telfixo',
  '$telcel',
  '$mae',
  '$pai',
  '$necessidades',
  '$descricao',
  '$enem',
  '$num_enem',
  '$ano_de_realizacao',
  '$receber',
  '$datamatricula'
  )

";
$query = mysqli_query($con,$sql);

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
    $mail->FromName = "FAMART"; // Seu nome
    // Define os destinatário(s)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

    $mail->AddAddress("suporte03@grupoandrademartins.com.br", "Inscrição -  Vestibular Famart");
    $mail->AddAddress("mktdigital@grupoandrademartins.com.br", "Inscrição -  Vestibular Famart");
    $mail->AddAddress("corporativo@grupoandrademartins.com.br", "Inscrição -  Vestibular Famart");


    //$mail->AddAddress('ciclano@site.net');

    //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
    // Define os dados técnicos da Mensagem
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
    $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
    // Define a mensagem (Texto e Assunto)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->Subject = "Inscrição do Vestibular Agendado"; // Assunto da mensagem
    $array_nomes = array(

    	'{nome}',
      '{dia}',
      '{horario}',
      '{escolaridade}',
      '{unidade}',
      '{como_conheceu}',
      '{curso}',
      '{sexo}',
      '{rg}',
      '{orgao}',
      '{cpf}',
      '{nascimento}',
      '{nacionalidade}',
      '{naturalidade}',
      '{email}',
      '{emailalternativo}',
      '{estadocivil}',
      '{cep}',
      '{endereco}',
      '{numero}',
      '{bairro}',
      '{local}',
      '{estado}',
      '{complemento}',
      '{telfixo}',
      '{telcel}',
      '{necessidades}',
      '{descricao}',
      '{enem}',
      '{num_enem}',
      '{ano_de_realizacao}',
      '{receber}',
      '{pagamento}',
      '{datamatricula}',
      '{email_unidade}',
      '{telefone_unidade}'

      );
    $array_valores = array(

    	$nome,
      $dia,
      $horario,
      $escolaridade,
      $unidade,
      $como_conheceu,
      $curso,
      $sexo,
      $rg,
      $orgao,
      $cpf,
      $nascimento,
      $nacionalidade,
      $naturalidade,
      $email,
      $emailalternativo,
      $estadocivil,
      $cep,
      $endereco,
      $numero,
      $bairro,
      $local,
      $estado,
      $complemento,
      $telfixo,
      $telcel,
      $necessidades,
      $descricao,
      $enem,
      $num_enem,
      $ano_de_realizacao,
      $receber,
      $pagamento,
      $datamatricula,
      $email_unidade,
      $telefone_unidade



      );
    $template = file_get_contents("templates/inscricao_vestibular_famart_grupo.tpl");
    $mensagem = str_replace($array_nomes, $array_valores, $template);
    $mail->Body = $mensagem;
    //$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n <IMG class=wp-smiley alt=:) src="http://blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif" nodeIndex="2"> ";
    // Define os anexos (opcional)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
    // Envia o e-mail


    $enviado = $mail->Send();  
    #####################################################################################

    // Limpa os destinatários e os anexos
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();
    // Exibe uma mensagem de resultado

    #####################################################################################


    //EMAIL GRUPO EMAIL GRUPO EMAIL GRUPO EMAIL GRUPO EMAIL GRUPO EMAIL GRUPO 


    $mail->AddAddress($email, $nome);

    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
    $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
    // Define a mensagem (Texto e Assunto)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->Subject = "Famart - Inscrição Processo Seletivo FAMART"; // Assunto da mensagem
    $array_nomes = array(

    	'{nome}',
      '{dia}',
      '{horario}',
      '{escolaridade}',
      '{unidade}',
      '{como_conheceu}',
      '{curso}',
      '{sexo}',
      '{rg}',
      '{orgao}',
      '{cpf}',
      '{nascimento}',
      '{nacionalidade}',
      '{naturalidade}',
      '{email}',
      '{emailalternativo}',
      '{estadocivil}',
      '{cep}',
      '{endereco}',
      '{numero}',
      '{bairro}',
      '{local}',
      '{estado}',
      '{complemento}',
      '{telfixo}',
      '{telcel}',
      '{necessidades}',
      '{descricao}',
      '{enem}',
      '{num_enem}',
      '{ano_de_realizacao}',
      '{receber}',
      '{pagamento}',
      '{datamatricula}',
      '{email_unidade}',
      '{telefone_unidade}'

      );
    $array_valores = array(

    	$nome,
      $dia,
      $horario,
      $escolaridade,
      $unidade,
      $como_conheceu,
      $curso,
      $sexo,
      $rg,
      $orgao,
      $cpf,
      $nascimento,
      $nacionalidade,
      $naturalidade,
      $email,
      $emailalternativo,
      $estadocivil,
      $cep,
      $endereco,
      $numero,
      $bairro,
      $local,
      $estado,
      $complemento,
      $telfixo,
      $telcel,
      $necessidades,
      $descricao,
      $enem,
      $num_enem,
      $ano_de_realizacao,
      $receber,
      $pagamento,
      $datamatricula,
      $email_unidade,
      $telefone_unidade



      );
    $template = file_get_contents("templates/inscricao_vestibular_famart.tpl");
    $mensagem = str_replace($array_nomes, $array_valores, $template);
    $mail->Body = $mensagem;
    //$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n <IMG class=wp-smiley alt=:) src="http://blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif" nodeIndex="2"> ";
    // Define os anexos (opcional)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
    // Envia o e-mail


    $enviado = $mail->Send();  
    #####################################################################################

    // Limpa os destinatários e os anexos
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();
    // Exibe uma mensagem de resultado

  }
  ?>



  <?php
  $nome = $_POST['nome'];
  ?>


  <div id = "containner" class = "containner100">

    <!-- ###################################################### -->

    <?php include("topo.html") ?>


    <!-- ###################################################### -->
    <div id = "conteudo">

      <div id = "box950" class = "box950 centraliza  ">

        <div class = "infocontato">

          <div id = "topo-descricao">
            <h1>Confirmação dos Dados de Inscrição</h1>
            <hr>
            <p style="font-size: 1.4em;">
              - Este documento <strong>NÃO</strong> é válido como comprovante de inscrição -
            </p><br>

            <p style="font-size: 1.4em;">
              <strong>→ Dados da Inscrição:</strong><br><br>

              <strong>Nome completo:</strong> <?php echo htmlspecialchars($_POST['nome']); ?>  <br>
              <strong>Identidade:</strong> <?php echo htmlspecialchars($_POST['rg']); ?>  <br>
              <strong>CPF:</strong> <?php echo htmlspecialchars($_POST['cpf']); ?>  <br>
              <strong>Nascimento:</strong> <?php echo htmlspecialchars($_POST['nascimento']); ?>  <br>
              <strong>Sexo:</strong> <?php echo htmlspecialchars($_POST['sexo']); ?>  <br>
              <strong>E-mail:</strong> <?php echo htmlspecialchars($_POST['email']); ?>  <br>
              <strong>E-mail alternativo:</strong> <?php echo htmlspecialchars($_POST['emailalternativo']); ?> <br>
              <strong>CEP:</strong> <?php echo htmlspecialchars($_POST['cep']); ?>  <br>
              <strong>Cidade:</strong> <?php echo htmlspecialchars($_POST['local']); ?>  <br>
              <strong>Estado:</strong> <?php echo htmlspecialchars($_POST['estado']); ?>  <br>
              <strong>Rua/Avenida:</strong> <?php echo htmlspecialchars($_POST['endereco']); ?>  <br>
              <strong>Número:</strong> <?php echo htmlspecialchars($_POST['numero']); ?>  <br>
              <strong>Bairro:</strong> <?php echo htmlspecialchars($_POST['bairro']); ?>  <br>
              <strong>Complemento:</strong> <?php echo htmlspecialchars($_POST['complemento']); ?>  <br>
              <strong>Tel Fixo:</strong> <?php echo htmlspecialchars($_POST['telfixo']); ?>  <br>
              <strong>Tel Cel:</strong> <?php echo htmlspecialchars($_POST['telcel']); ?>  <br>
            </p><br>

            <p style="font-size: 1.4em;">
              <strong>→ Dados da Prova:</strong><br><br>

              <strong>Local:</strong> FAMART – Faculdade Martins | Campus Itaúna<br>
              <strong>Endereço:</strong> Rua Osório Santos, 207 Nogueira Machado, Itaúna/MG 35680-229<br>
              <strong>Data:</strong> <?php echo htmlspecialchars($_POST['dia']); ?>  <br>
              <strong>Horário:</strong> <?php echo htmlspecialchars($_POST['horario']); ?>  <br>
              <strong>Referência:</strong> Atrás do SENAI<br>
            </p><br>


            <p style="font-size: 1.4em;">
              Caso tenha encontrado algum erro, entre em contato com nossa instituição.
            </p><br>

            <p style="font-size: 1.4em;">
              Clique no botão abaixo para selecionar a <strong>forma de pagamento</strong>.
            </p><br>

            <p style="font-size: 1.4em;">
              Após a confirmação do pagamento da taxa, entraremos em contato para confirmar sua inscrição.
            </p><br>



            <div class="botao-imprimir">
              <div  class="botao-pagseguro box-95" >
                <a href="http://famart.com.br/relatorio.php<?php echo ("?nome=$nome&horario=$horario&dia=$dia&como_conheceu=$como_conheceu&sexo=$sexo&curso=$curso&pagamento=$pagamento&unidade=$unidade&area=$area&rg=$rg&orgao=$orgao&cpf=$cpf&nascimento=$nascimento&nacionalidade=$nacionalidade&naturalidade=$naturalidade&email=$email&estadocivil=$estadocivil&cep=$cep&endereco=$endereco&numero=$numero&bairro=$bairro&local=$local&estado=$estado&complemento=$complemento&telfixo=$telfixo&telcel=$telcel&graduacao=$graduacao&conclusao=$conclusao&receber=$receber&datamatricula=$datamatricula&emailPagSeguro=$emailPagSeguro")?>" target="blank">
                  <img src="http://famart.com.br/images/impressora.png">
                </a>
              </div>
            </div>

          </div>
          <div class="infocontato centraliza-div-interna">
            <!-- Declaração do formulário -->  
            <form method="post" target="pagseguro"  
            action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
            <input type="hidden" name="encoding" value="UTF-8">
            <!-- Campos obrigatórios -->  
            <input name="receiverEmail" type="hidden" value="<?php echo $emailPagSeguro ?>">  
            <input name="currency" type="hidden" value="BRL">  

            <!-- Itens do pagamento (ao menos um item é obrigatório) -->  
            <input name="itemId1" type="hidden" value="0001">  
            <input name="itemDescription1" type="hidden" value="<?php echo isset($_POST['curso'])?$_POST['curso']." - Vestibular Famart":NULL ?>">  
            <input name="itemAmount1" type="hidden" value="50.00">  
            <input name="itemQuantity1" type="hidden" value="1">  



            <!-- Código de referência do pagamento no seu sistema (opcional) -->  
            <input name="reference" type="hidden" value="REF1234">  


            <!-- Dados do comprador (opcionais) -->  
            <input name="senderName" type="hidden" value="<?php echo isset($_POST['nome'])?$_POST['nome']:NULL ?>">  
            <input name="shippingAddressPostalCode" type="hidden" value="<?php echo isset($_POST['cep'])?$_POST['cep']:NULL ?>">  
            <input name="shippingAddressNumber" type="hidden" value="<?php echo isset($_POST['numero'])?$_POST['numero']:NULL ?>">  

            <input name="senderPhone" type="hidden" value="<?php echo isset($_POST['telcel'])?$_POST['telcel']:NULL ?>">  
            <input name="senderEmail" type="hidden" value="<?php echo isset($_POST['email'])?$_POST['email']:NULL ?>">  

            <!-- submit do form (obrigatório) -->  

            <div class="botao-geral">
              <div class="botao-pag-seg" style="margin-bottom: 12%;">
                <button input="submit" class="botao-pagseguro box-95 aparecer" style="border: 0;margin: 0;padding: 0;">
                  <img src="/img/botao-pag.png">
                </button>
              </div>
            </div>

          </form>  
        </div>
      </div>
      <div class="texto-abaixo">
        <p style="font-size: 1.4em;">
          Agradecemos a sua participação e desejamos <strong>BOA SORTE</strong>!
        </p>
      </div>
    </div>

  </div>
</div>


<?php include('rodape.php') ?>
</div>

<!-- ###################################################### -->

</body>


</html>
