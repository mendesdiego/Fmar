<?php /*Template Name: Cursos*/ ?>
<?php  get_header();?>
<main>
  <div class="container">
    <?php
      $wpcurso = new WP_Query ( array(
        'post_type' => 'cursos' ,
        'orderby'   => 'title',
        'order'     => 'ASC',
        'tax_query' => array(
        		array(
        			'taxonomy' => 'categoria-curso',
        			'field' => 'slug',
        			'terms' => get_current_slug()
        		)
        	)
        )
      );
     ?>

  <?php
    if ($wpcurso->have_posts() ): ?>
      <div class="row">
        <?php while ($wpcurso->have_posts() ): ?>
          <?php $wpcurso-> the_post(); ?>
        <div class="col-md-3">
          <div class="box-curso-interno">
            <?php if (has_post_thumbnail() ): ?>
              <a href="<?php echo get_permalink() ?>">
                <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array('class' => 'img-responsive')) ?>
              </a>
              <?php endif; ?>
              <h3 class="titulo-curso-interno"><?php echo get_the_title() ?></h3>
              <p class="duracao-curso"><?php echo get_field('duracao') ?></p>
              <div class="previa-curso">
                <?php the_excerpt_limit(15)?>
              </div>
              <p class="investimento">Investimento:
                <span class="valor-matricula">R$ <?php echo get_field('valor_matricula') ?></span>
              </p>
              <a class="btn btn-saiba-curso" href="<?php echo get_permalink() ?>" role="button">Saiba Mais</a><a class="btn btn-matricule" href="<?php echo get_permalink() ?>?pre-matricula=sim" role="button">Inscreva-se</a>
          </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
    <?php endif; ?>
  </div>
</main>
<?php get_footer() ?>
