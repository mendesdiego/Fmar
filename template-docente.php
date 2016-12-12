<?php /*Template Name: Docentes*/ ?>

<?php get_header() ?>
<main>
  <div class="container">
    <?php
      $wpdocente = new WP_Query ( array(
        'post_type' => 'docente' ,
        'posts_per_page' => -1,
        'orderby'   => 'title',
        'order'     => 'ASC',
        )
      );
     ?>
  <?php
    if ($wpdocente->have_posts() ): ?>
      <div class="row">
        <?php while ($wpdocente->have_posts() ): ?>
          <?php $wpdocente-> the_post(); ?>
        <div class="col-md-3">
          <div class="box-docente">
            <?php if (has_post_thumbnail() ): ?>
              <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array('class' => 'img-responsive')) ?>
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
