<?php /*Template Name: Todos os Cursos*/ ?>
<?php  get_header();?>
<main>
  <div class="container">
    <?php
      $categoriasCurso = get_terms('categoria-curso', array(
        'hide_empty' => false,
        'parent' => 0,
        'orderby' => 'name',
        'order' => 'asc'
      ) );
    ?>

    <? foreach($categoriasCurso AS $categoria) { ?>
      <h1><?=$categoria->name?></h1>
      <?php
        $wpcurso = new WP_Query ( array(
          'post_type' => 'cursos' ,
          'orderby'   => 'title',
          'order'     => 'ASC',
          'posts_per_page' => -1,
          'tax_query' => array(
          		array(
          			'taxonomy' => 'categoria-curso',
          			'field' => 'slug',
          			'terms' => $categoria->slug
          		)
          	)
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
               <div class="box-curso-interno">
                 <?php if (has_post_thumbnail() ): ?>
                   <a href="<?php echo get_permalink() ?>">
                     <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array('class' => 'img-responsive')) ?>
                   </a>
                   <?php endif; ?>
                   <h3 class="titulo-interno-curso"><?php echo get_the_title() ?></h3>
                   <p class="duracao-curso"><?php echo get_field('duracao') ?></p>

                   <div class="investimento">
                     <?php
                      $exibeValorCurso = get_field('exibir_valor_curso_ou_matricula');
                       if ($exibeValorCurso == 'Matrícula') { ?>
                         <p><?php echo $exibeValorCurso; ?></p>
                       <?php
                         }
                         else { ?>
                           <p><?php echo $exibeValorCurso?></p>
                       <?php } ?>

                     <?php
                       $valor_de = get_field('valor_matricula');
                       $valor_por = get_field('valor_matricula_promocional');
                       $preco_porSemPontos = str_replace('.', '', $valor_por); // remove pontos
                       $preco_por_float = floatval(str_replace(',', '.', $preco_porSemPontos)); // parsing para

                        if ($preco_por_float > 0) { ?>
                          <span class="valor_matricula_de">De: R$ <?php echo $valor_de ?></span>
                          <span class="valor-matricula">Por: R$ <?php echo $valor_por ?></span>
                     <?php } else { ?>
                       <span class="valor-matricula">R$ <?php echo $valor_de ?></span>
                     <?php } ?>
                   </div>                   
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
      <? } ?>
  </div>
</main>
<?php get_footer() ?>
