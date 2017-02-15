<? get_header() ?>

<main class="main-page-curso-form-pre-matricula">
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
    <?php
    $taxonomiasDoSingle = wp_get_post_terms( get_the_ID(), 'categoria-curso', array('parent' => 0));
    foreach($taxonomiasDoSingle AS $item) {
      $catCategoryParent = $item->name  ;
    }
    ?>

    <div class="container" id="page-<?=basename(get_permalink()); ?>">
      <h1 class="page-title"><?=get_the_title()?> </h1>

      <div class="informacoes-gerais-pre-matricula row row-eq-height-from-sm">

        <div class="box-preco col-sm-6 col-md-3">
          <? if(get_the_ID() == 158) {?>
            <h3>MENSALIDADES À PARTIR DE</h3>
          <? } else {?>
            <h3>PRÉ-MATRÍCULA</h3>
          <? } ?>

          <div class="pseudo-body">
            <h4 class="preco">
              <?php
                $valor_de = get_field('valor_matricula');
                $valor_por = get_field('valor_matricula_promocional');
                $preco_porSemPontos = str_replace('.', '', $valor_por); // remove pontos
                $preco_por_float = floatval(str_replace(',', '.', $preco_porSemPontos)); // parsing para

                 if ($preco_por_float > 0) { ?>
                   R$ <?php echo $valor_de ?>
                   R$ <?php echo $valor_por ?>
                 <?php } else { ?>
                   R$ <?php echo $valor_de ?>
                 <?php } ?>
            </h4>
            <p>O inscrito estará garantindo a matrícula nesse valor</p>
          </div>
        </div>


        <!-- exibir somente para desktops -->
        <div class="box-info col-md-5 hidden-xs hidden-sm">
          <p class="font-montserrat-bold">Este é o valor pago referente apenas à matrícula.</p>
          <p>
          As demais mensalidades serão emitidas no valor real estabelecido pela instituição. O valor do curso poderá ser ajustado de acordo com desconto* por pagamento em dia.
          </p>
          <p>
          *Consulte regulamento no colégio.
          </p>
        </div>


        <div class="box-img col-sm-6 col-md-4" data-background-img="<? (has_post_thumbnail()) ? the_post_thumbnail_url('full') : null ?>">
          <? if(has_post_thumbnail()) { ?>

            <? the_post_thumbnail( 'full', array( 'class' => 'img-responsive visible-xs-block' ) ); ?>

          <? } ?>
        </div>

      </div>



      <!-- não exibir para desktops -->
      <div class="row hidden-md hidden-lg">

        <div class="box-info col-xs-12">
          <p class="font-montserrat-bold">Este é o valor pago referente apenas à matrícula.</p>
          <p>
          As demais mensalidades serão emitidas no valor real estabelecido pela instituição. O valor do curso poderá ser ajustado de acordo com desconto* por pagamento em dia.
          </p>
          <p>
          *Consulte regulamento no colégio.
          </p>

        </div>

      </div>

      <!-- ini: formas-de-parcelamento -->
      <?php
      if( have_rows('forma_de_parcelamento') ): ?>
      <div class="formas-de-parcelamento">
        <div class="row">
          <div class="col-xs-12">
            <p>Escolha abaixo a melhor forma de pagamento. Em seguida, você receberá os boletos referentes às mensalidades.</p>
          </div>
        </div>


          <div class="row row-itens">
          <? $i = 1 ?>
          <? while ( have_rows('forma_de_parcelamento') ) : the_row(); ?>

            <?
            $preco_de = get_sub_field('preco_de');
            $preco_por = get_sub_field('preco_por');

            $parcelas = intval(get_sub_field('parcelas'));
            $desconto_ocasional = get_sub_field('desconto_ocasional');

            if($desconto_ocasional) {
              $preco_por = getDescontoPrecoParcela($preco_por, $desconto_ocasional) ; // sobrescreve o preço por
            }
            ?>

             <div class="item col-sm-3 col-md-2">
                <? if($preco_de) { ?>
                  <div class="wrap-all-preco-de">
                    <span class="prefixo">De:</span> <strike><?=$parcelas?> x R$ <?=$preco_de?></strike>
                  </div>
                <? } ?>
                <? if($preco_de) { ?>
                  <div class="wrap-all-preco-por">
                    <span class="prefixo">Por:</span> <?=$parcelas?> x R$ <?=$preco_por?>
                  </div>
                <? } ?>
                <div class="wrap-radio-option">
                  <input type="radio" name="forma-de-pagamento" class="forma-de-pagamento" value="<?=$parcelas .'x  de R$ ' .$preco_por?>" <?=($i == 1 ? 'checked="checked"' : null)?>>
                </div>
             </div>

            <? $i++ ?>
          <? endwhile; ?>
          </div>

      </div>
      <? endif; ?>
      <!-- end: formas-de-parcelamento -->


        <!-- ini: campos para pegar via js e setar no form -->
        <input type="hidden" id="hidden-nome-do-curso" value="<?=get_the_title()?>">
        <input type="hidden" id="hidden-modalidade-curso" value="<?=$catCategoryParent?>">
        <input type="hidden" id="hidden-id-curso" value="<?=get_the_ID()?>">
        <input type="hidden" id="hidden-link-do-edital" value="<?=(get_field('edital') ? get_field('edital') : null)?>">




        <!-- ver: http://contactform7.com/special-mail-tags/ -->
        <!-- end: campos para pegar via js e setar no form -->


      <div class="wrap-content-form-pre-matricula">
        <? echo str_replace(array('<p>','</p>', '<p></p>'), array('','',''), wpautop(do_shortcode('[contact-form-7 id="397" title="Form-prematricula"]'))) ;  ?>

      </div> <!-- wrap-content-form-pre-matricula -->

      <div class="row row-meios-de-pagamento">
        <div>
          <img class="img-responsive"  src="<?php bloginfo('template_url') ?>/images/bar-operadores-meio-de-pagamento.jpg" />
        </div>
      </div>
    </div> <!-- end container -->

    <!-- ini: modal regulamento curso -->
    <? require_once 'modal-regulamento-curso.php'; ?>
    <!-- end: modal regulamento curso -->

    <!-- ini: modal pagamento matrícula -->
    <? require_once 'modal-pagamento-matricula.php'; ?>
    <!-- end: modal pagamento matrícula -->
  <?php endwhile; ?>
  <?php endif; ?>
</main>
<? get_footer() ?>
