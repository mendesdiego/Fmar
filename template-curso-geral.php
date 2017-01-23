<?php /*Template Name: Todos os Cursos*/ ?>
<?php  get_header();?>
<main>
  <div class="container">
    <?php
      $wpcurso = new WP_Query ( array(
        $paged = (get_query_var('paged') ) ? get_query_var('paged'): 1,
        'post_type' => 'cursos' ,
        'orderby'   => 'title',
        'order'     => 'ASC',
        'posts_per_page' => 8,
        'paged' => $paged
        )
      );
     ?>

  <?php
    if ($wpcurso->have_posts() ): ?>
      <div class="row">
        <?php $i=1 ?>
        <?php while ($wpcurso->have_posts() ): ?>
          <?php $wpcurso-> the_post(); ?>
        <div class="col-md-3">
          <div class="box-interno-curso">
            <?php if (has_post_thumbnail() ): ?>
              <a href="<?php echo get_permalink() ?>">
                <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array('class' => 'img-responsive')) ?>
              </a>
              <?php endif; ?>
              <h3 class="titulo-curso-interno"><?php echo get_the_title() ?></h3>
              <p class="duracao-curso"><?php echo get_field('duracao') ?></p>
              <div class="previa-curso">
                <?php the_excerpt_limit(12)?>
              </div>
              <p class="investimento">Investimento:
                <span class="valor-matricula">R$ <?php echo get_field('valor_matricula') ?></span>
              </p>
          </div>
          <div class="botoes-curso">
            <a class="btn btn-curso-interno" href="<?php echo get_permalink() ?>" role="button">Saiba Mais</a><a class="btn btn-matricule" href="<?php echo get_permalink() ?>?pre-matricula=sim" role="button">Inscreva-se</a>
          </div>
        </div>
        <?php
          if ($i % 4 == 0) {?>
            <div class="clearfix"></div>
          <?php }
         ?>
        <?php $i++ ?>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
    <?php endif; ?>
    <div class="row prev-next-posts">
      <div class="next-posts-link col-sm-6 col-xs-6 text-left">
        <?php echo get_previous_posts_link( 'Anterior' ); // display newer posts link ?>
      </div>
      <div class="prev-posts-link col-sm-6 col-xs-6 text-right">
        <? echo get_next_posts_link( 'Próximo', $wpcurso->max_num_pages ); // display older posts link ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer() ?>
