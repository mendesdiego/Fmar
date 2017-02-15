  <?php 
  if (array_key_exists('inscricaoonline', $_POST)){
    include('conexao.class.php');


    $nome               =isset($_POST['nome'])?$_POST['nome']:null;
    $email              =isset($_POST['email'])?$_POST['email']:null;
    $email2             =isset($_POST['email2'])?$_POST['email2']:null;
    $telfixo            =isset($_POST['telefone'])?$_POST['telefone']:null;
    $cel                =isset($_POST['celular'])?$_POST['celular']:null;
    $cpf                =isset($_POST['cpf'])?$_POST['cpf']:null;
    $endereco           =isset($_POST['endereco'])?$_POST['endereco']:null;
    $bairro             =isset($_POST['bairro'])?$_POST['bairro']:null;
    $numero             =isset($_POST['numero'])?$_POST['numero']:null;
    $estado             =isset($_POST['estado'])?$_POST['estado']:null;
    $complemento        =isset($_POST['complemento'])?$_POST['complemento']:null;
    $cep                =isset($_POST['cep'])?$_POST['cep']:null;
    $cidade             =isset($_POST['cidade'])?$_POST['cidade']:null;
    $nascimento         =isset($_POST['nascimento'])?$_POST['nascimento']:null;
    $horario_contato    =isset($_POST['horario_contato'])?$_POST['horario_contato']:null;
    $comochegou         =isset($_POST['comochegou'])?$_POST['comochegou']:null;




    $sql = "INSERT INTO cadastro_template
    (
    nome,
    email,
    email2,
    telfixo,
    cel,
    cpf,
    endereco,
    bairro,
    numero,
    estado,
    complemento,
    cep,
    cidade,
    horario_contato,
    comochegou,
    nascimento
    )

    VALUES (

    '$nome',
    '$email',
    '$email2',
    '$telfixo',
    '$cel',
    '$cpf', 
    '$endereco',
    '$bairro',
    '$numero',
    '$estado',
    '$complemento',
    '$cep',
    '$cidade',
    '$nascimento',
    '$horario_contato',
    '$comochegou'
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
    $mail->From = "biblioteca@famart.edu.br"; // Seu e-mail
    $mail->FromName = "FAMART – Faculdade Martins"; // Seu nome
    // Define os destinatário(s)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->AddAddress($email, $nome);
//$mail->AddAddress("suporte@grupoandrademartins.com.br", "Contato Online FAMART");


    $mail->AddCC("mktdigital@grupoandrademartins.com.br", "FAMART – Faculdade Martins");
    $mail->AddCC("diget@grupoandrademartins.com.br", "FAMART – Faculdade Martins");
    $mail->AddCC("corporativo@grupoandrademartins.com.br", "FAMART – Faculdade Martins");
    $mail->AddCC("consultor@grupoandrademartins.com.br", "FAMART – Faculdade Martins");
    $mail->AddCC("web01@grupoandrademartins.com.br", "FAMART – Faculdade Martins");
    $mail->AddCC("web01@grupoandrademartins.com.br", "FAMART – Faculdade Martins");
    $mail->AddCC("secretariaacademica@famart.edu.br", "FAMART – Faculdade Martins");
    $mail->AddCC("direcaoacademica@famart.edu.br", "FAMART – Faculdade Martins");

    /*$mail->AddCC("passini3d@gmail.com", "Faculdade Alfa");*/

   /*$mail->AddAddress("b2b@grupoandrademartins.com.br", "Inscrição Online Graduarte");
   $mail->AddAddress("corporativo01@grupoandrademartins.com.br", "Inscrição Online Graduarte");*/


    //$mail->AddAddress('ciclano@site.net');

    //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
    // Define os dados técnicos da Mensagem
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
    $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
    // Define a mensagem (Texto e Assunto)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->Subject = "Confirmação de inscrição – FAMART 2017"; // Assunto da mensagem
    $array_nomes = array(

     '{nome}',
     '{email}',
     '{email2}',
     '{telfixo}',
     '{cel}',
     '{cpf}',
     '{endereco}',
     '{bairro}',
     '{numero}',
     '{estado}',
     '{complemento}',
     '{cep}',
     '{cidade}',
     '{comochegou}',
     '{horario_contato}',
     '{nascimento}'

     );
    $array_valores = array(

      $nome,
      $email,
      $email2,
      $telfixo,
      $cel,
      $cpf,
      $endereco,
      $numero,
      $bairro,
      $estado,
      $complemento,
      $cep,
      $cidade,
      $comochegou,
      $horario_contato,
      $nascimento


      );
    $template = file_get_contents("templates/inscricao_online.tpl");
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

  <head>
    <title>Obrigado!</title>
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="min/plugin-min.js"></script>
    <script src="js/init.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  </head>

  <body style="background-image: url(img/fundo-rosto.jpg);">
    <div class="container">
      <div class="row">
        <center><h4 class="header text_b" style=" border: 0; color: #fff;">Sua inscrição foi feita com sucesso!<br>
          Confirme o recebimento do comprovante por e-mail, imprima-o e apresente no dia da prova.</h4></center>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <center><h5 class="header-c text_b" style="color: #fff; font-size: 4em; font-weight: bold;">Boa sorte!</h5></center>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <center><a href="http://famart.edu.br/" class="botao-incs col s12 m12 l12 waves-effect waves-light btn-large">Voltar para o site</a></center>
        </div>
      </div>
    </body>