<? get_header() ?>

<main class="main-page-curso-form-pre-matricula">
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>


    <div class="container" id="page-<?=basename(get_permalink()); ?>">
      <h1 class="page-title">Vestibular</h1>

      <div class="row">
        <div class="col-sm-8">
          <h4 class="font-montserrat-bold margin-top-zero margin-bottom-30 ">Detalhamento</h4>
          <p>Faça sua pré-inscrição, preenchendo o formulário abaixo! Você garantirá a matrícula no valor promocional (R$120,00). Contudo, este é o preço referente apenas à matrícula. As demais mensalidades serão emitidas no valor real estabelecido pela instituição. O valor do curso poderá ser ajustado de acordo com desconto* por pagamento em dia. *Consulte regulamento no colégio.</p>

        </div>
        <div class="col-sm-4">
          <?php if(has_post_thumbnail()) { ?>
          <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
          <?php } ?>
        </div>
      </div>

      <div class="wrap-content-form-pre-matricula">
        <?php echo do_shortcode('[contact-form-7 id="397" title="Form-prematricula"]'); ?>

        <div class="row row-meios-de-pagamento">
          <div>
            <img class="img-responsive"  src="<?php bloginfo('template_url') ?>/images/bar-operadores-meio-de-pagamento.jpg" />
          </div>
        </div>
      </div>
    </div>

    <!-- ini: modal regulamento curso -->
    <?php get_template_part( 'parts/content', 'modal-regulamento-curso'); ?>
    <!-- end: modal regulamento curso -->

    <!-- ini: modal pagamento matrícula -->
    <?php get_template_part( 'parts/content', 'modal-pagamento-matricula'); ?>
    <!-- end: modal pagamento matrícula -->

  <?php endwhile; ?>
  <?php endif; ?>
</main>
<? get_footer() ?>
