<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--CSS-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <!--JS-->
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>


    <title>Famart</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <header>
      <section class="bar-top">
        <div class="container">
          <div>
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="contato-top">
                <ul class="list-unstyled list-inline">
                  <li class="item-contato-top"><img src="images/phone.png" alt="" class="img-contato-top"> 3333-3333</li>
                  <li><img src="images/mail.png" alt="" class="img-contato-top">famart@famart.com.br</li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="social-top">
                <ul class="list-unstyled list-inline">
                  <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                  <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                  <li><a href="#"><img src="images/instagram.png" alt="" class="icon-social"></a></li>
                  <li><a class="btn btn-area" href="#" role="button"><i class="fa fa-lock cadeado-area" aria-hidden="true"></i> Área do Aluno</a></li>
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
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#">Home</a></li>
              <li><a href="#">Instituição</a></li>
              <li><a href="#">Graduação</a></li>
              <li><a href="#">Cursos Livres</a></li>
              <li><a href="#">Cursos de Extensão</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contato</a></li>
            </ul>
            <a class="btn btn-agendado" href="#" role="button">Vestibulares Agendados</a>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-->
      </nav>
    </header>

    <section class="banner">
      <img src="images/banner-completo.jpg" alt="" class="img-responsive">
    </section>

    <section class="sobre">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="titulo-section">Sobre<br> a Empresa</h2>
            <p class="texto-sobre">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-6">
            <img src="images/img.jpg" alt="" class="img-responsive center-block">
          </div>
          <p align="center"><a class="btn btn-section" href="#" role="button">Conheça nossa faculdade</a></p>
        </div>
      </div>
    </section>

    <section class="curso-home">
      <div class="container">
        <h2 class="titulo-section">Cursos<br> em destaque</h2>
        <p class="texto-sobre">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam
        </p>

        <div class="row">
          <div class="col-md-3">
            <img src="images/banner-destaque.jpg" alt="" class="img-responsive banner-lateral">
          </div>
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-4">
                <div class="box-curso">
                  <img src="images/07.jpg" alt="" class="img-responsive">
                  <h3 class="titulo-curso">Titulo Curso</h3>
                  <p class="desc-curso">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                  <p align="center"><a class="btn btn-curso-home" href="#" role="button">Saiba Mais</a></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-curso">
                  <img src="images/06.jpg" alt="" class="img-responsive">
                  <h3 class="titulo-curso">Titulo Curso</h3>
                  <p class="desc-curso">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                  <p align="center"><a class="btn btn-curso-home" href="#" role="button">Saiba Mais</a></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-curso">
                  <img src="images/05.jpg" alt="" class="img-responsive">
                  <h3 class="titulo-curso">Titulo Curso</h3>
                  <p class="desc-curso">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                  <p align="center"><a class="btn btn-curso-home" href="#" role="button">Saiba Mais</a></p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="box-curso">
                  <img src="images/07.jpg" alt="" class="img-responsive">
                  <h3 class="titulo-curso">Titulo Curso</h3>
                  <p class="desc-curso">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                  <p align="center"><a class="btn btn-curso-home" href="#" role="button">Saiba Mais</a></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-curso">
                  <img src="images/06.jpg" alt="" class="img-responsive">
                  <h3 class="titulo-curso">Titulo Curso</h3>
                  <p class="desc-curso">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                  <p align="center"><a class="btn btn-curso-home" href="#" role="button">Saiba Mais</a></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-curso">
                  <img src="images/05.jpg" alt="" class="img-responsive">
                  <h3 class="titulo-curso">Titulo Curso</h3>
                  <p class="desc-curso">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                  <p align="center"><a class="btn btn-curso-home" href="#" role="button">Saiba Mais</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p align="center"><a class="btn btn-section" href="#" role="button">Ver todos os cursos</a></p>
      </div>
    </section>

    <section class="blog-home">
      <div class="container">
        <h2 class="titulo-section">Últimas Notícias</h2>
        <p class="texto-sobre">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam
        </p>

        <div class="row">
          <div class="col-md-3">
            <div class="box-noticia">
              <img src="images/d.jpg" alt="" class="img-responsive">
              <h3 class="titulo-noticia-home">Titulo Notícia</h3>
              <span class="info-add-home">06 <small>Dez</small></span>
              <p class="desc-curso">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box-noticia">
              <img src="images/c.jpg" alt="" class="img-responsive">
              <h3 class="titulo-noticia-home">Titulo Notícia</h3>
              <span class="info-add-home">06 <small>Dez</small></span>
              <p class="desc-curso">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box-noticia">
              <img src="images/b.jpg" alt="" class="img-responsive">
              <h3 class="titulo-noticia-home">Titulo Notícia</h3>
              <span class="info-add-home">06 <small>Dez</small></span>
              <p class="desc-curso">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box-noticia">
              <img src="images/a.jpg" alt="" class="img-responsive">
              <h3 class="titulo-noticia-home">Titulo Notícia</h3>
              <span class="info-add-home">06 <small>Dez</small></span>
              <p class="desc-curso">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
          </div>
        </div>
        <p align="center"><a class="btn btn-noticia-home" href="#" role="button">Ver todas</a></p>
      </div>
    </section>

    <section class="mapa">
      <img src="images/map.jpg" alt="" class="img-responsive">
    </section>

    <footer>
      <div class="container">
        <div class="col-md-4">
          <img src="images/logo-baixo.png" alt="" class="img-responsive">
          <div class="social-footer">
            <ul class="list-unstyled list-inline">
              <li><a href="#"><img src="images/facebook-baixo.png" alt=""></a></li>
              <li><a href="#"><img src="images/twitter-baixo.png" alt=""></a></li>
              <li><a href="#"><img src="images/instagram-logo.png" alt=""></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <h3 class="titulo-footer">Menu</h3>
          <ul class="list-unstyled menu-footer">
            <li><img src="images/setinha.png" alt="" class="icon-menu-footer"> <a href="#" class="link-menu-footer">Lorem ipsum dolor sit amet.</a></li>
            <li><img src="images/setinha.png" alt="" class="icon-menu-footer"> <a href="#" class="link-menu-footer">Lorem ipsum dolor sit amet.</a></li>
            <li><img src="images/setinha.png" alt="" class="icon-menu-footer"> <a href="#" class="link-menu-footer">Lorem ipsum dolor sit amet.</a></li>
            <li><img src="images/setinha.png" alt="" class="icon-menu-footer"> <a href="#" class="link-menu-footer">Lorem ipsum dolor sit amet.</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3 class="titulo-footer">Menu</h3>
          <ul class="list-unstyled menu-footer">
            <li><img src="images/setinha.png" alt="" class="icon-menu-footer"> <a href="#" class="link-menu-footer">Lorem ipsum dolor sit amet.</a></li>
            <li><img src="images/setinha.png" alt="" class="icon-menu-footer"> <a href="#" class="link-menu-footer">Lorem ipsum dolor sit amet.</a></li>
            <li><img src="images/setinha.png" alt="" class="icon-menu-footer"> <a href="#" class="link-menu-footer">Lorem ipsum dolor sit amet.</a></li>
            <li><img src="images/setinha.png" alt="" class="icon-menu-footer"> <a href="#" class="link-menu-footer">Lorem ipsum dolor sit amet.</a></li>
          </ul>
        </div>
      </div>
    </footer>

  </body>
</html>
