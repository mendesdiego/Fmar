<?php get_header() ?>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-not">
          <?php
            if (have_posts()):
            while (have_posts()): the_post();
          ?>
          <article class="bloco-noticia">
            <?php if (has_post_thumbnail() ) { ?>
              <div class="img-noticia">
                <a href="<?php the_permalink() ?>"> <?php the_post_thumbnail('high', array('class' => 'img-responsive') ); ?> </a>
              </div>
            <?php } ?>
            <div class="noticia-geral">
              <h2 class="titulo-noticia"><?php the_title() ?></h2>
              <p class="info-noticia">
                <i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j \d\e F \d\e Y') ?> | <strong>Categoria:</strong> <?php the_category(',') ?>
              </p>
              <p>
                <?php the_excerpt_limit(30) ?>
              </p>
              <div class="saiba">
                <a href="<?php the_permalink() ?>" class="btn btn-notica">Saiba Mais </a>
              </div>
            </div>            
          </article>
          <?php
          endwhile;
          endif;
          ?>
        </div>
        <div class="col-md-4">
          <?php get_sidebar() ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer() ?>
