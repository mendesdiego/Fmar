<?php /*Template Name: Home*/ ?>

<?php get_header() ?>

    <?
       $wpCarouselHome = new WP_Query(array(
         'post_type' => 'carousel-home',
         'posts_per_page' => 10,
         'orderby' => 'menu_order date',
         'order'   => 'ASC',
       ));

     ?>


    <section id="section-carousel-home">
      <div id="carousel-home" class="carousel slide" data-ride="carousel" data-interval="5000">
        <!-- Indicators
        <ol class="carousel-indicators">
          <? for ($j = 0; $j < $wpCarouselHome->post_count; $j++) { ?>
            <li data-target="#carousel-home" data-slide-to="<?=$j?>" class="<?echo ($j == 0 ? 'active' : null)?>"><?=$j+1?></li>
          <? } ?>
        </ol>-->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        <? $i = 0 ?>
        <? while ( $wpCarouselHome->have_posts() ) { ?>
          <?  $wpCarouselHome->the_post(); ?>

          <?
          $imgCelular = get_field( "imagem_celulares" ) ;
          $imgTablets = get_field( "imagem_tablets" ) ;
          $imgDesktops = get_field( "imagem_desktop" ) ;

          $calToAction = get_field( "call_to_action" ) ;

          ?>


          <div class="item <?=($i == 0) ? 'active' : null ?>" data-img-celular="<?=$imgCelular['url']?>" data-img-tablet="<?=$imgTablets['url']?>" data-img-desktop="<?=$imgDesktops['url']?>">
            <? if($calToAction) { ?>
              <a class="fill-link" href="<?=$calToAction?>" target="<?=( get_field('abrir_em_nova_aba') ) ? '_BLANK' : null?>"></a>
            <? } ?>
          </div>
          <? $i++ ?>
        <? } ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span></span>
        </a>
        <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section class="sobre">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="titulo-section">Sobre<br> a Empresa</h2>
            <?php query_posts('page_id=8' );
  				  	if (have_posts()) : while (have_posts()) : the_post(); ?>
  				  		<p class="texto-sobre">
  				  		  A Faculdade FAMART, credenciada pela Portaria nº 186 de 05 de abril de 2016, faz parte do Grupo Andrade Martins,
                  tendo seu limite territorial de atuação circunscrito ao município de Itaúna, no Estado de Minas Gerais, sendo
                  um estabelecimento privado de ensino superior, particular em sentido estrito, mantido pela Faculdade e
                  Instituto Martins Ltda, quando de fato iniciou sua atuação no ensino superior passando a ser credenciada a
                  ofertar do curso de Licenciatura em Pedagogia.
  				  		</p>
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
          Conheça as diversas modalidades de cursos presenciais e a distância da Faculdade Famart e escolha a melhor opção para você.<br> Para saber mais, escolha o curso de seu interesse:
        </p>

        <div class="row">
          <div class="col-md-3">
            <img src="<?php echo get_template_directory_uri() ?>/images/banner-destaque.jpg" alt="" class="img-responsive banner-lateral visible-xs visible-lg">
            <img src="<?php echo get_template_directory_uri() ?>/images/banner-lateral-mobile.jpg" alt="" class="img-responsive banner-lateral-mobile hidden-xs visible-sm hidden-lg">
          </div>
          <div class="col-md-9">
            <?php
              //consulta
              $args = array(
                'post_type' => 'cursos',
                'order' => 'asc',
                'posts_per_page' => '6',
                'meta_key' =>  'destacar_home',
                'meta_value'  => 1
              );

              //Chama a consulta realizada
              $the_query = new WP_Query( $args );
            ?>

            <?php if( $the_query->have_posts() ): ?>
            	<div class="row">
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
            	  <div class="col-md-4 col-sm-4">
                  <div class="box-curso">
                    <?php if(has_post_thumbnail()) { ?>
                      <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                      </a>
                    <?php } ?>
                    <h3 class="titulo-curso"><?php the_title() ?></h3>
                    <p class="nome-categoria"><?php
                     $taxonomiasDoSingle = wp_get_post_terms( get_the_ID(), 'categoria-curso');
                     echo $taxonomiasDoSingle [0]->name
                    ?></p>

                    <!--<p class="desc-curso">
                      <?php the_excerpt_limit(9) ?>
                    </p>-->
                    <p align="center"><a class="btn btn-curso-home btn-block" href="<?php the_permalink() ?>" role="button">Saiba Mais</a></p>
                  </div>
            	  </div>
                <?php endwhile; ?>
            	</div>
          	 <?php endif; ?>
             <?php wp_reset_query(); ?>
        </div>
        <p align="center"><a class="btn btn-section" href="<?php echo esc_url(home_url('todos-os-cursos') ) ?>" role="button">Ver todos os cursos</a></p>
      </div>
    </section>

    <section class="blog-home">
      <div class="container">
        <h2 class="titulo-section">Últimas Notícias</h2>
        <p class="texto-sobre">
          Acompanhe as últimas novidades e fique por dentro das notícias mais importantes da Faculdade Famart.
        </p>

        <div class="row">
          <?php
            $argPost = array(
              'post_type' => 'post',
              'posts_per_page' => 4
            );
            $postHome = new WP_Query($argPost);
            if ($postHome->have_posts()) {
              while ($postHome->have_posts()) {?>
                <?php $postHome->the_post() ?>
                 <div class="col-md-3">
                   <div class="box-noticia">
                     <?php if (has_post_thumbnail()) {?>
                       <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('high', array('class' => 'img-responsive' ) ); ?></a>
                     <?php } ?>
                     <h3 class="titulo-noticia-home"><?php the_title() ?></h3>
                     <span class="info-add-home"><?php the_time('j F') ?></span>
                     <p class="desc-curso">
                       <?php the_excerpt_limit(15) ?>
                     </p>
                   </div>
                 </div>
              <?php
              }
            }
           wp_reset_query();
          ?>
        </div>
        <p align="center"><a class="btn btn-noticia-home" href="http://famart.edu.br/blog/" role="button">Ver todas</a></p>
      </div>
    </section>

    <section class="mapa">
      <img src="<?php echo get_template_directory_uri() ?>/images/map.jpg" alt="" class="img-responsive">
    </section>

    <?php get_footer() ?>

  </body>
</html>
