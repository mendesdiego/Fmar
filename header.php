<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <title>
      <?php
	      if ( is_single() ) {
	        bloginfo('name'); echo " | "; single_post_title();
	      }elseif ( is_home() || is_front_page() ) {
	        bloginfo('name'); echo ' | ';
	        bloginfo('description');
	      }elseif ( is_page() ) {
	        single_post_title('');
	      }elseif ( is_search() ) {
	        bloginfo('name');
	        echo ' | Search results for ' . wp_specialchars($s);
	      }elseif ( is_404() ) {
	        bloginfo('name');
	        print ' | Not Found';
	      }else {
	        bloginfo('name');
	        wp_title('|');
	      }
      	?>
    </title>
    <?php wp_head() ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--Codigo Analytics-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-61163900-14', 'auto');
      ga('send', 'pageview');
    </script>

  </head>
  <body>
    <header>
      <section class="bar-top">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <a class="navbar-brand" href="<?php echo esc_url(home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt=""></a>
            </div>
            <div class="col-md-6">
              <div class="contato-top">
                <span class="matricule-top">Matricule-se</span>
                <ul class="list-unstyled list-inline">
                  <li class="item-contato-top"><img src="<?php echo get_template_directory_uri() ?>/images/phone.png" alt="" class="img-contato-top"> 0800 037 4212</li>
                  <li><img src="<?php echo get_template_directory_uri() ?>/images/mail.png" alt="" class="img-contato-top">atendimento@famart.edu.br</li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="social-top">
                <ul class="list-unstyled list-inline">
                  <li><a href="https://www.facebook.com/faculdadefamart/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/facebook.png" alt=""></a></li>
                  <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/twitter.png" alt=""></a></li>
                  <li><a href="https://www.instagram.com/famartfaculdademartins/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/instagram.png" alt="" class="icon-social"></a></li>
                  <li><a class="btn btn-area" href="http://ava.famart.edu.br/login/index.php" role="button" target="_blank"><i class="fa fa-lock cadeado-area" aria-hidden="true"></i> Área do Aluno</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>


      <nav class="navbar navbar-famart">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <p class="menu-mobile visible-xs-block visible-sm-block">MENU</p>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <?php
                $args = array(
                  'menu' => 'principal',
                  'menu_class' => 'nav navbar-nav',
                  'walker' => new wp_bootstrap_navwalker()
                );
                wp_nav_menu($args);
               ?>
            </ul>
            <a class="btn btn-agendado" href="http://famart.edu.br/vestibular-2017" target="_blank" role="button">Vestibulares Agendados</a>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-->
      </nav>
    </header>
