<?php get_header() ?>
  <main>
    <div class="container">
      <div class="col-md-8">
        <?php if (have_posts() ) {
          while (have_posts() ) {
            the_post();
            ?>
            <article class="bloco-noticia">
              <div class="img-noticia">
                <?php if (has_post_thumbnail() ): ?>
                  <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail('high', array('class' => 'img-responsive') ); ?>
                  </a>
                <?php endif; ?>
              </div>
              <div class="noticia-geral">
                <h2 class="titulo-noticia"><?php the_title() ?></h2>
                <div class="info-noticia">
                  <div class="pull-left info-block calendario">
                    <i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j \d\e F \d\e Y') ?>
                    <i class="fa fa-comment-o"></i> <?php comments_number('Nenhum comentário', '1 comentário', '% comentários'); ?>
                  </div>
                  <div class="pull-right info-categoria">
                    <?php the_category('') ?>
                  </div>
                  <div class="clearfix"></div>
                  <div class="conteudo-noticia">
                    <?php the_content() ?>
                  </div>
                </div>
              </div>
            </article>
          <?php }
            }
          ?>
      </div>
      <div class="col-md-4">
        <?php get_sidebar() ?>
      </div>
    </div>
  </main>

<?php get_footer() ?>
