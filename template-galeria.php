<?php /*Template Name: Galeria*/ ?>
<?php  get_header();?>
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php
          $id = get_the_id();
          $titulo_corrente = get_the_title();
          $pagina_anterior = get_post_ancestors($id);

          if(!empty($pagina_anterior)){
            $idPagina = $pagina_anterior[0];
          } else {
            $idPagina = $id;
          }
          $arg = array(
            'post_type'       => 'page',
            'posts_per_page'  => 20,
            'orderby'         => 'title',
            'order'           => 'ASC',
            'post_parent'     => $idPagina
          );

          /*echo "<h3 class='titulo-menu-interno'>". get_post_field('post_title', $idPagina) . "</h3>";*/

          $menu_lateral = new wp_query($arg);
          if($menu_lateral->have_posts()):
            echo "<ul class='menu-lateral'>";
              while($menu_lateral->have_posts()): $menu_lateral->the_post();
                $titulo_menu = get_the_title();
                if ($titulo_corrente == $titulo_menu) {
                  $activate = "activate";
                } else {
                  $activate = "";
                }
                echo "<li class='$activate'>";
                ?>
                  <a href="<?php the_permalink() ?>" class="hvr-sweep-to-right"><?php the_title(); ?></a>
                <?php
                echo "</li>";
              endwhile;
            echo "</ul>";
          else:
            echo "Nenhuma pagina encontrada";
          endif;
          ?>
      </div>
      <div class="col-md-9">
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
            <div class="col-md-4">
              <?php if (has_post_thumbnail() ): ?>
                <a href="<?php echo get_permalink() ?>">
                  <?php echo get_the_post_thumbnail( get_the_ID(), 'large', array('class' => 'img-responsive')) ?>
                </a>
                <p class="titulo-galeria"><?php the_title() ?></h3>
              <?php endif; ?>
            </div>
            <?php
              if ($i % 3 == 0) {?>
                <div class="clearfix"></div>
              <?php }
             ?>
            <?php $i++ ?>
            <?php endwhile; ?>

            <?php wp_reset_query(); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer() ?>
