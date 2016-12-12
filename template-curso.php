<?php /*Template Name: Cursos*/ ?>
<?php  get_header(); ?>
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
        			'terms' => 'graduacao'
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
          <div class="box-docente">
            <?php if (has_post_thumbnail() ): ?>
              <a href="<?php echo get_permalink() ?>">
                <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array('class' => 'img-responsive')) ?>
              </a>
              <?php endif; ?>
              <h3 class="titulo-interno"><?php echo get_the_title() ?></h3>
              <p><?php the_content() ?></p>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</main>
<?php get_footer() ?>
