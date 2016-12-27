<?php /*Template Name: Galeria*/ ?>
<?php  get_header();?>
<main>
  <div class="container">
    <?php
      $wpgaleria = new WP_Query ( array(
        'post_type' => 'galeria' ,
        'orderby'   => 'title',
        'order'     => 'ASC',
        'posts_per_page' => 40,
        )
      );
     ?>

  <?php
    if ($wpgaleria->have_posts() ): ?>
      <div class="row">
        <?php $i=1 ?>
        <?php while ($wpgaleria->have_posts() ): ?>
          <?php $wpgaleria-> the_post(); ?>
        <div class="col-md-3">
          <?php if (has_post_thumbnail() ): ?>
            <a href="<?php echo get_permalink() ?>">
              <?php echo get_the_post_thumbnail( get_the_ID(), 'large', array('class' => 'img-responsive')) ?>
            </a>
            <p class="titulo-galeria"><?php the_title() ?></h3>
          <?php endif; ?>
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
  </div>
</main>
<?php get_footer() ?>
