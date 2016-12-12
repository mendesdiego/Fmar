<?php get_header() ?>

<main>
  <div class="container">
    <h3 class="titulo-interno"><?php the_title() ?></h3>

    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>
<?php get_footer() ?>
