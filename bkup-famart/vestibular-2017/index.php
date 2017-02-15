<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vestibular de graça - Faculdade Famart</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Aproveite a chance de fazer seu curso de graduação sem pagar nada. Participe do concurso de bolsas e faça sua inscrição até 25/01.">

      <meta name="author" content="Grupo Andrade Martins">
    
    

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Open+Sans+Condensed:300" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css" rel="stylesheet" type="text/css">

    <!-- =============  Scripts Js ================= -->
      <script type="text/javascript"	src="js/jquery-2.1.4.js"></script>
      <script type="text/javascript"	src="js/jquery.nicescroll.min.js"></script>
      <script type="text/javascript"	src="js/jquery.maskedinput.js" ></script>
      <script type="text/javascript" 	src="js/jquery.mask.js"></script>
      <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
      <script type="text/javascript" src="js/mascara.js"></script>
      <script type="text/javascript" src="js/cep.js"></script>
      <script type="text/javascript" src="js/mostra-pergunta.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <!-- ====================================  -->

    <!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <link href="css/pop.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!--    MODAL  POP -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
                    <script type="text/javascript">

                    $(document).ready(function() {

                    	$('a[name=modal]').click(function(e) {
                    		e.preventDefault();

                    		var id = $(this).attr('href');

                    		var maskHeight = $(document).height();
                    		var maskWidth = $(window).width();

                    		$('#mask').css({'width':maskWidth,'height':maskHeight});

                    		$('#mask').fadeIn(1000);
                    		$('#mask').fadeTo("slow",0.8);

                    		//Get the window height and width
                    		var winH = $(window).height();
                    		var winW = $(window).width();

                    		$(id).css('top',  winH/2-$(id).height()/2);
                    		$(id).css('left', winW/2-$(id).width()/2);

                    		$(id).fadeIn(2000);

                    	});

                    	$('.window .close').click(function (e) {
                    		e.preventDefault();

                    		$('#mask').hide();
                    		$('.window').hide();
                    	});

                    	$('#mask').click(function () {
                    		$(this).hide();
                    		$('.window').hide();
                    	});

                    });
</script>
    <!--    MODAL  POP -->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- Código do Google para tag de remarketing -->

<!--------------------------------------------------

As tags de remarketing não podem ser associadas a informações pessoais de identificação nem inseridas em páginas relacionadas a categorias de confidencialidade. Veja mais informações e instruções sobre como configurar a tag em: http://google.com/ads/remarketingsetup

--------------------------------------------------->

<script type="text/javascript">

/* <![CDATA[ */

var google_conversion_id = 863322061;

var google_custom_params = window.google_tag_params;

var google_remarketing_only = true;

/* ]]> */

</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">

</script>

<noscript>

<div style="display:inline;">

<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/863322061/?guid=ON&amp;script=0"/>

</div>
</noscript>


<?php include_once("analyticstracking.php") ?>

  <!-- Navigation
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
          <div class="navbar-header">

              <a class="" href="#page-top" >
                <img src="img/icon_famart.png" class="img-responsive">
              </a>
          </div>

          <div class="collapse navbar-collapse navbar-right navbar-main-collapse">

              <ul class="nav navbar-nav">

                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#about">ATÉ 100% DE DESCONTO</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#graduacao">GRADUAÇÕES</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#download">CONCURSO SOLIDÁRIO</a>
                  </li>
                <li>
                    <a href="#dialog" name="modal">INSCREVA-SE JÁ!</a>
                  </li>

              </ul>
          </div>

      </div>

  </nav>-->

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                     <br/><br/>
                     <p class="brand-heading"><img src="img/famart_txt.png" class="img-responsive"></p>

                   <!--  <p class="intro-text">Participe do <strong>Concurso de Bolsas</strong> da Faculdade Fama!</p>
                     <a href="#about" class="btn btn-circle page-scroll">
                         <i class="fa fa-angle-double-down animated"></i>
                     </a>
                     <br/>  <br/>
                     <h1 style="font-size:50px;">Informações: 0800 037 4212</h1>
                   -->
                   </div>
               </div>
           </div>
       </div>
   </header>
      <!--<a href="#" onclick="javascript: exibe('divformulario');"><div class="botaoflutuante">Inscreva-se já</div></a>
    <a href="#dialog" name="modal"><div class="botaoflutuante"> Inscreva-se já!</div></a>-->
    <!-- About Section -->
    <!-- Download Section -->
    <section id="about" class="content-section text-center">

            <div class="container">
              <div class="col-md-4">
                <center><br/>
                  <img src="img/famart_icon_estrela.png" class="img-responsive">
                  <br/>
                  <h4>Na Famart</h4>
                  <p>Você tem a chance de fazer seu Curso de Graduação sem pagar nada, participando do concurso de bolsas.</p>
              </center>
              </div>

              <div class="col-md-4">
                <center><br/>
                  <img src="img/famart_icon_ampulheta.png" class="img-responsive">
                  <br/>
                  <h4>Não perca tempo!</h4>
                  <p>Faça já sua inscrição e garanta seu futuro!</p>
              </center>
              </div>

              <div class="col-md-4">
                <center><br/>
                  <img src="img/famart_icon_caderno.png" class="img-responsive">
                  <br/>
                <h4>Conheça o curso de:</h4>
                  <p><a href="http://famart.edu.br/informacoes.php?IdCurso=1" target="_blank" style="color:#150958;">• Pedagogia (Licenciatura)</a></p>
              </center>
              </div>

    </section>

    <!-- inscrevase Section -->
    <section id="inscrevase" class="content-section text-center">
        <div class="inscrevase-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <center><br/><br/>
                    <!--<a href="#dialog" name="modal">  <img src="img/famart_bt_inscrevase.png" class="img-responsive"></a>-->
                      <br/>
                      <img src="img/famart_bt_prova.png" class="img-responsive">
                      <br/>
                      <a href="edital/EDITAL_03_VESTIBULAR_FAMART_2017(3).pdf" target="_blank"><img src="img/famart_bt_edital.png" class="img-responsive"></a>
                      <br/><br/>
                      
                    </center>
                </div>
            </div>
        </div>
    </section>
    <!-- about Section -->
    <section id="dowload" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                  <div class="dowload_box">
                    <h2>Inscreva-se já!</h2>
                    <h2>Vestibular Solidário!</h2>
                    <p>Para confirmar a sua inscrição basta doar um dos itens abaixo, que deverão ser entregues até o dia 25/01 na Faculdade Famart.
                      A não entrega ocasionará o cancelamento da mesma.</p>
                      <h6>- 1 Quilo de alimento (arroz, feijão, leite, café ou açúcar).</h6>
                      <h6>Ou</h6>
                      <h6>- 1 pacote de fralda geriátrica (tamanhos:M, G, EXG).</h6>
                      <h3>Os alimentos serão doados para a instituição Crasi.</h3>
                      <adress>Endereço: R. Osório Santos, 207 - Nogueira Machado, Itaúna - MG, 35680-229</adress>

                    <center><img src="img/famart_icon_crasi.jpg" class="img-responsive" width="80"></center>


                </div>
            </div>
        </div>
    </section>

    <!-- about Section -->
    <section id="fotos" class="content-section text-center">
        <div class="fotos-section">

              <div class="col-md-3">
                <center><br/>
                  <img src="img/famart_logo.png" class="img-responsive">
              </center>
              </div>

              <div class="col-md-3">
                <center><br/>
                  <img src="img/famart_foto1.jpg" class="img-responsive">
              </center>
              </div>

              <div class="col-md-3">
                <center><br/>
                  <img src="img/famart_foto2.jpg" class="img-responsive">
              </center>
              </div>

              <div class="col-md-3">
                <center><br/>
                  <img src="img/famart_foto3.jpg" class="img-responsive">
              </center>
              </div>

        </div>
    </section>


    <!-- parceiros Section -->
    <section id="parceiros" class="content-section text-center">
        <div class="parceiros-section">
            <img src="img/famart_logo_parceiros.jpg" class="img-responsive">
      </div>
    </section>


    <!-- About Section -->
    <section id="contato" class="">
        <div class="row">
            <div id="boxes">
              <div id="dialog" class="window">
                  <a href="#" class="close">Fechar [X]</a><br />
                    <?php include 'contato.php';?>
        </div>
<!-- Máscara para cobrir a tela -->
  <div id="mask"></div>
</div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container">
          <div class="row">
              <div class="col-sm-6">
                <ul style="padding-top:5px;">
                    <li>Acesse nosso site: <spam style="color:#FFD73F">www.famart.edu.br</spam></li>
                </ul>
              </div>
              <div class="col-sm-6">
                <center><ul>
                  <li>Faça parte de nossas redes:</li>
                  <li><a href="https://www.facebook.com/faculdadefamart" target="_blank"><img src="img/famart_icon_fb.png" class="img-responsive"></a></li>
                  <li><a href="https://www.instagram.com/famartfaculdademartins/" target="_blank"><img src="img/famart_icon_inst.png" class="img-responsive"></a></li>
                  <li><a href="https://www.linkedin.com/company/10868271?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10868271%2Cidx%3A2-4-5%2CtarId%3A1476466137903%2Ctas%3Afamart" target="_blank"><img src="img/famart_icon_linkedin.png" class="img-responsive"></a></li>
                  <li><a href="https://plus.google.com/101749569302547653908" target="_blank"><img src="img/famart_icon_google.png" class="img-responsive"></a></li>
                  <li><a href="https://www.youtube.com/channel/UC2pWQ6Dt0z_ulyBbPwTcE0Q" target="_blank"><img src="img/famart_icon_player.png" class="img-responsive"></a></li>
                </ul></center>


              </div>
          </div>
        </div>
    </footer>

    <!--formulario-->




    <!--formulario-->

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

</body>
</html>
