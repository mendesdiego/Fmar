<link rel = "shortcut icon" href = "img/favicon.png " />
<html>
<head>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-61163900-14', 'auto');
      ga('send', 'pageview');

  </script> 


  <title>Trabalhe Conosco - Faculdade Martins</title>
  <link href = "css/bootstrap.css" rel = "stylesheet">
  <meta charset = "UTF-8" />
  <style type = "text/css">
    body {
        padding-top: 60px;
        padding-bottom: 40px;
    }
</style>
<link href = "css/bootstrap-responsive.css" rel = "stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src = "http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->

    <link rel = "apple-touch-icon-precomposed" sizes = "144x144" href = "ico/apple-touch-icon-144-precomposed.png">
    <link rel = "apple-touch-icon-precomposed" sizes = "114x114" href = "ico/apple-touch-icon-114-precomposed.png">
    <link rel = "apple-touch-icon-precomposed" sizes = "72x72" href = "ico/apple-touch-icon-72-precomposed.png">
    <link rel = "apple-touch-icon-precomposed" href = "ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
    <?php
    include 'topo.html';
    ?>

    <div class = "container">
        <div class = "row">
            <section class = "span6">
                <p>A Ouvidoria tem como objetivo disponibilizar mais um serviço para estreitar a relação da Faculdade
                 Martinscom seus discentes, funcionários, colaboradores e comunidade em geral para que possam sugerir,
                 criticar ou elogiar ações da Faculdade. Mediante a atuação da Ouvidoria, a FAMART pode buscar cada ve​z
                 m​ais, c​om transpa​rência, fortalecer a qualidade dos seus serviços. A Ouvidoria da Instituição tem o
                 compromisso de valorizar, sobretudo o respeito ao ser humano.</p>
                 <br />

                 <form action = "envia-ouvidoria.php" method = "POST">
                    <div class = "control-group">
                        <label class = "control-label" for = "inputEmail"><i class = "icon-user"></i> Nome </label>

                        <div class = "controls controls-row">
                            <input name = "fullname" type = "text" class = "input-xxlarge" id = "inputEmail"
                            placeholder = "Seu Nome">
                        </div>
                    </div>
                    <div class = "control-group">
                        <label class = "control-label" for = "inputEmail"><i class = "icon-envelope"></i> Email</label>

                        <div class = "controls">
                            <input name = "emailid" type = "text" class = "input-xxlarge" id = "inputEmail"
                            placeholder = "email@email.com">
                        </div>
                    </div>
                    <input style = "display:none" type = "text" name = "data" value = "<?php
                    $data = '22.02.13';
                    echo date('d-m-y', strtotime($data));
                    ?>">

                    <div class = "control-group">
                        <label class = "control-label" for = "inputEmail"><i class = "icon-envelope"></i> Telefone</label>

                        <div class = "controls">
                            <input name = "phone" type = "text" class = "input-xxlarge" id = "inputEmail"
                            placeholder = "Telefone">
                        </div>
                    </div>
                    <div class = "control-group">
                        <label class = "control-label" for = "inputEmail"><i class = "icon-question-sign"></i> Currículo
                         Lattes</label>

                         <div class = "controls">
                            <input type = "text" name = "subject" class = "input-xxlarge" id = "inputSubject"
                            placeholder = "Deixe seu Currículo">
                        </div>
                    </div>

                    <div class = "control-group">
                        <label class = "control-label" for = "inputEmail"><i class = "icon-pencil"></i> Mensagem</label>

                        <div class = "controls">
                            <textarea rows = "6" name = "comments" class = "input-xxlarge"
                            placeholder = "Deixe sua Mensagem"></textarea>
                        </div>
                    </div>

                    <div class = "control-group">
                        <div class = "controls">
                            <button type = "submit" name = "Enviar" class = "btn btn-success">Enviar Mensagem</button>
                        </div>

                    </form>
                    <br class = "clear">


                </section>
                <!-- end left -->

                <section class = "span6">
                    <div class = "well">
                        <img src = "img/endereco.png" alt = "" />

                        <p><br /> Rua Osório Santos, 207 - Nogueira Machado, Itaúna <br />MG, 35680-229 <br />(37) 3241-4212</p>
                    </div>
                    <!--end well -->
                </section>
                <!--end right -->
            </div>
            <!--end row -->

            <hr>


        </div>
        <!-- /container -->

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src = "js/jquery.js"></script>
    <script src = "js/bootstrap.min.js"></script>

    <script type = "text/javascript">
        $('.carousel').carousel()
    </script>








    <?php
    include 'rodape.php';
    ?>

</body>




