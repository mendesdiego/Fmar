<link rel = "shortcut icon" href = "img/favicon.png " />
<html>


<head>
  <link rel = "stylesheet" href = "css/informacoes.css">
  <link rel='stylesheet' id='Bootstrap-css'  href='http://faculdadealfa.edu.br/wp-content/themes/alfa/css/bootstrap.css?ver=3.3.6' type='text/css' media='screen' />
  <link rel='stylesheet' id='Font Awesome-css'  href='http://faculdadealfa.edu.br/wp-content/themes/alfa/css/font-awesome.css?ver=4.5.0' type='text/css' media='screen' />
  <link rel='stylesheet' id='effects-css'  href='http://faculdadealfa.edu.br/wp-content/themes/alfa/css/effects.css?ver=1.0.0' type='text/css' media='screen' />
  <link rel='stylesheet' id='bwg_font-awesome-css'  href='http://faculdadealfa.edu.br/wp-content/plugins/photo-gallery/css/font-awesome/font-awesome.css?ver=4.6.3' type='text/css' media='all' />

  <title> Cursos Graduação </title>
  <!-- CSS PERSONALIZADO -->
  <!--########## MODAL ########## -->
  <style type="text/css">
    #mask {
      position:absolute;
      left:0;
      top:0;
      z-index:9000;
      background-color:#000;
      display:none;
    }
    #boxes .window {
      position:absolute;
      left:0;
      top:0;
      width:440px;
      height:200px;
      display:none;
      z-index:9999;
      padding:20px;
    }
    #boxes #dialog {
      width: 385px;
      height: 203px;
      color: #fff;
      padding: 10px;
      text-align: center;
      font-size: 2.5em;
      /*background-color:#ffffff;*/
    }
    #boxes #dialog1 {
      width:375px;
      height:203px;
    }
    #dialog1 .d-header {
      background:url(login-header.png) no-repeat 0 0 transparent;
      width:375px;
      height:150px;
    }
    #dialog1 .d-header input {
      position:relative;
      top:60px;
      left:100px;
      border:3px solid #cccccc;
      height:22px;
      width:200px;
      font-size:15px;
      padding:5px;
      margin-top:4px;
    }
    #dialog1 .d-blank {
      float:left;
      background:url(login-blank.png) no-repeat 0 0 transparent;
      width:267px;
      height:53px;
    }
    #dialog1 .d-login {
      float:left;
      width:108px;
      height:53px;
    }
    #boxes #dialog2 {
      background:url(notice.png) no-repeat 0 0 transparent;
      width:326px;
      height:229px;
      padding:50px 0 20px 25px;
    }
    .close{display:block; text-align:right;}
    .depoimento_box{
      background: url(images/depoimento-linha.jpg) center bottom no-repeat;
      height: 100%!important ;
    }

    #noticias > h1{
     font-size: 25px;
     padding-left: 18px;
     color: #3C3C3C;
   }

   .box950 {
    width: 67%!important;
    height: auto;
  }

  .col-md-6 {
    width: 62%!important;
  }



</style>
</head>

<body>
  <?php
  include_once 'topo.html';
  ?>

  <div id="conteudo">
    <div id="box950" class="box950 centraliza">
      <div class = "infocontato" style="margin-top: 4%">
       <section class="conteudo">
         <div id="noticias">
           <h1> Curso de Graduação </h1>
           <hr>
         </div>
         <div class="texto-interno">
           <p>
             A Faculdade FAMART oferece a graduação em Licenciatura em Pedagogia, na modalidade presencial.<br>
             O curso tem duração de 04 (quatro) anos (8 períodos) e habilitam os profissionais para a carreira acadêmica.<br><br>

             <strong>Veja abaixo detalhes do curso:</strong>
           </p>
         </div>
         <div class="col-md-9">
          <div class="col-md-6 cursos-graduacao-interno">
            <div class="hover ehover4">
              <img width="394" height="247" src="http://faculdadealfa.edu.br/wp-content/uploads/2016/05/graduacao-interno03.jpg" class="img-responsive wp-post-image" alt="graduacao-interno03" srcset="http://faculdadealfa.edu.br/wp-content/uploads/2016/05/graduacao-interno03.jpg 394w, http://faculdadealfa.edu.br/wp-content/uploads/2016/05/graduacao-interno03-300x188.jpg 300w" sizes="(max-width: 394px) 100vw, 394px" />
              <div class="overlay">
                <h2>Pedagogia</h2>
                <button class="info" onclick="location.href='http://famart.edu.br/informacoes.php?IdCurso=1'">Saiba mais</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
  </div>
</div>


<?php include('rodape.php') ?>
</body>
</html>