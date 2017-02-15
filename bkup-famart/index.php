<!DOCTYPE html>
<html lang="en">
<head>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61163900-14', 'auto');
  ga('send', 'pageview');

</script>


  <link rel="shortcut icon" href="img/favicon.png" />

  <link href="css/responsivo.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">


  <meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=3.0,initial-scale=1.0" />
  <style>
    .titulo-inscricao
    {
      font-size: 25px;
      color: #3C3C3C;
    }

    .hr {
      display: block;
      height: 1px;
      margin: 1em 0;
      padding: 0;
      border: 0;
      border-top: 1px solid #ccc;
    }
  </style>
  <meta charset="UTF-8">

  <script>
    (function() {
      var cx = '016639109585083983000:hvgdr6jddre';
      var gcse = document.createElement('script');
      gcse.type = 'text/javascript';
      gcse.async = true;
      gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
      '//www.google.com/cse/cse.js?cx=' + cx;
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(gcse, s);
    })();
  </script>

  <title>FAMART - Faculdade Martins</title>




  <!-- #######MODAL#########

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
  <script type="text/javascript">


    function open_modal( id ){
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
};
$(document).ready(function() {

  $('a[name=modal]').click(function(e) {
    e.preventDefault();
    open_modal( $(this).attr('href') );
  });

  open_modal( '#dialog' );//abrindo o div#modal ao carregar a página

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
<style type="text/css">
  body {
    font-family:verdana;
    font-size:15px;
  }

  a {color:#333; text-decoration:none}
  a:hover {color:#ccc; text-decoration:none}

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
    top: -2.5px;
    width:600px;
    height:600px;
    display:none;
    z-index:9999;
    padding:20px;
  }

  #boxes #dialog {
    width:600px;
    height:600px;
    padding:10px;
  }

  .close{display:block; text-align:right;}

  .img-modal{
    width: 100%;
  }

  .centraliza-mapa{
    width: 100%
  }

</style>


<!-- #######FIM-MODAL#########  -->


<script type="text/javascript">
  function funcao() {
   var r = confirm('Quer mesmo sair?');;

   if (r == true) {
    window.location.assign("http://www.globo.com") /* ou o seu sair.php */
  }
  else {
    alert('Nao funcionou');
  }
  return false;
}
</script>


<link href="css/responsivo.css" rel="stylesheet" type="text/css">

</head>

<body onunload="funcao();">

  <!-- #######MODAL#########

  <div id="boxes">

    <div id="dialog" class="window" style="left: 35% !important;">
      <a href="#" class="close" style="margin-bottom: -10px;">
        <img src="images/fechar.png">
      </a><br />

      <a href="http://famart.edu.br/vestibular/">
        <img src="img/vestibular-famart-2017-1-modal.png" class="img-modal">
      </a>
    </div>

    <!-- Máscara para cobrir a tela
    <div id="mask"></div>

    <!-- #######FIM-MODAL#########  -->


    <div id="containner" class="containner100">
     <!-- ###################################################### -->
     <?php include("topo.html") ?>
     <!-- ###################################################### -->
     <div id="banner" class="containner100">
      <?php include("banner.html") ?>
    </div>
    <!-- ###################################################### -->
    <div id="conteudo" >
      <div class="modal1" id="modal-one" aria-hidden="true">
        <div class="modal-dialog1">
          <div class="modal-header1">
            <h2>Em Breve!</h2>
            <a href="#close1" class="btn-close1" aria-hidden="true">×</a> <!--CHANGED TO "#close"-->
          </div>
        </div>
      </div>
      <div id="box950" class="box950 centraliza  "  >
        <div id="dentro-conteudo" class="centraliza cinza">

          <section id="tale">
            <a href="http://famart.edu.br/famart-nota-5-no-mec.php/">
              <article id="educacaodistancia" class="last_article">
                <figure>
                  <img src="img/5star_3.png">
                  <figcaption>
                    <center><h3>MEC - <span style="background: #36b15c; color: #fff; padding: 1.5%; border-radius: 5px;">Nota Máxima</h3></center>
                  </figcaption>
                </figure>
              </article>
            </a>
            <a href="http://famart.edu.br/informacoes.php?IdCurso=1">
              <article id="graduacao">
                <figure>
                  <img src="img/graduacao.png">
                  <figcaption>
                    <center><h3>Graduação</h3></center>
                  </figcaption>
                </figure>
              </article>
            </a>
            <a href="http://hipatia.famart.com.br/cgi-bin/wxis.exe?IsisScript=phl83.xis&cipar=phl83.cip&lang=por" target="_blank">
              <article id="posgraduacao">
                <figure>
                  <img src="img/biblioteca.png">
                  <figcaption>
                    <center><h3>Biblioteca</h3></center>
                  </figcaption>
                </figure>
              </article>
            </a>
            <a href="http://famart.edu.br/album-estrutura.php">
              <article id="extensao">
                <figure>
                  <img src="img/estrutura.png">
                  <figcaption>
                    <center><h3>Estrutura</h3></center>
                  </figcaption>
                </figure>
              </article>
            </a>
            <div class="clear">
            </div>
          </section>

              <!-- Calendário Acadêmico

              <div class="bloco">
                <div id="encontreCurso">
                  <h1>Pesquise no Site</h1>
                  <gcse:search></gcse:search>
                </div>
                <a href="pdf/calendario-academico-famart-2-semetre-2016.pdf" target="_blank"><div id="pesquisa">
                  <h1>Calendario Acadêmico</h1>
                </div></a>
              </div>

            -->

            <!-- ############################# -->
            <div id="noticias" class="bloco">
              <h1>Localização</h1>
              <hr>
              <div class="centraliza-noticia">
               <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d1575.4863125225882!2d-44.57710148522646!3d-20.085636518435965!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0xa732cd3208b7b7%3A0xd45ff30283fe42d8!2sGrupo+Andrade+Martins+-+Rua+Os%C3%B3rio+Santos%2C+207+-+Nogueira+Machado%2C+Ita%C3%BAna+-+MG%2C+35680-229%2C+Brasil!3m2!1d-20.0853255!2d-44.5766862!5e0!3m2!1spt-BR!2sbr!4v1462455612833"
               width="100%" height="260" frameborder="0" style="border:0" allowfullscreen></iframe>
             </div>
           </div>

            <!--
            <div id="box950" class="box950 centraliza">
                <div id="dentro-conteudo" class="centraliza cinza" style="margin-left: 8px;">
                  <h1 class="titulo-inscricao">Localização</h1>
                  <div class="hr"></div>
                  <div class="centraliza-mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d1575.4863125225882!2d-44.57710148522646!3d-20.085636518435965!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0xa732cd3208b7b7%3A0xd45ff30283fe42d8!2sGrupo+Andrade+Martins+-+Rua+Os%C3%B3rio+Santos%2C+207+-+Nogueira+Machado%2C+Ita%C3%BAna+-+MG%2C+35680-229%2C+Brasil!3m2!1d-20.0853255!2d-44.5766862!5e0!3m2!1spt-BR!2sbr!4v1462455612833"
                    width="100%" height="260" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            -->

          </div>
        </div>
        <?php include ('rodape.php') ?>
      </div>
      <!-- ###################################################### -->
    </body>
    </html>
