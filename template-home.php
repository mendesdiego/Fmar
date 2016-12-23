<?php /*Template Name: Home*/ ?>

<?php get_header() ?>

    <section class="banner">
      <img src="<?php echo get_template_directory_uri() ?>/images/banner-completo.jpg" alt="" class="img-responsive">
    </section>

    <section class="sobre">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="titulo-section">Sobre<br> a Empresa</h2>
            <?php query_posts('page_id=8' );
  				  	if (have_posts()) : while (have_posts()) : the_post(); ?>
  				  		<p class="texto-sobre"><?php the_excerpt_limit(60); ?></p>
  				  <?php endwhile; endif; wp_reset_query(); ?>
          </div>
          <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri() ?>/images/home-farmat.jpg" alt="" class="img-responsive center-block">
          </div>
          <p align="center"><a class="btn btn-section" href="<?php echo esc_url(home_url('instituicao') ); ?>" role="button">Conheça nossa faculdade</a></p>
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
            <img src="<?php echo get_template_directory_uri() ?>/images/banner-destaque.jpg" alt="" class="img-responsive banner-lateral">
          </div>
          <div class="col-md-9">
            <div class="row">
              <?php
                //consulta
                $args = array(
                  'post_type' => 'cursos',
                  'order' => 'asc',
                  'posts_per_page' => '6',
                  'meta_key' =>  'destaque_home',
                  'meta_value'  => 1
                );

                //Chama a consulta realizada
                $the_query = new WP_Query( $args );
              ?>

              <?php if( $the_query->have_posts() ): ?>
              	<div class="row">
                  <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
              	  <div class="col-md-4">
                    <div class="box-curso">
                      <?php if(has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink() ?>">
                          <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                        </a>
                      <?php } ?>
                      <h3 class="titulo-curso"><?php the_title() ?></h3>
                      <p class="desc-curso">
                        <?php the_excerpt_limit(15) ?>
                      </p>
                      <p align="center"><a class="btn btn-curso-home" href="<?php the_permalink() ?>" role="button">Saiba Mais</a></p>
                    </div>
              	  </div>
                  <?php endwhile; ?>
              	</div>
            	 <?php endif; ?>
               <?php wp_reset_query(); ?>
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
              <img src="<?php echo get_template_directory_uri() ?>/images/d.jpg" alt="" class="img-responsive">
              <h3 class="titulo-noticia-home">Titulo Notícia</h3>
              <span class="info-add-home">06 <small>Dez</small></span>
              <p class="desc-curso">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box-noticia">
              <img src="<?php echo get_template_directory_uri() ?>/images/c.jpg" alt="" class="img-responsive">
              <h3 class="titulo-noticia-home">Titulo Notícia</h3>
              <span class="info-add-home">06 <small>Dez</small></span>
              <p class="desc-curso">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box-noticia">
              <img src="<?php echo get_template_directory_uri() ?>/images/b.jpg" alt="" class="img-responsive">
              <h3 class="titulo-noticia-home">Titulo Notícia</h3>
              <span class="info-add-home">06 <small>Dez</small></span>
              <p class="desc-curso">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box-noticia">
              <img src="<?php echo get_template_directory_uri() ?>/images/a.jpg" alt="" class="img-responsive">
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
      <img src="<?php echo get_template_directory_uri() ?>/images/map.jpg" alt="" class="img-responsive">
    </section>

    <?php get_footer() ?>

  </body>
</html>
