<?php /*Template Name: Instalações*/ ?>

<?php  get_header() ?>

<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>
    <main>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <?php the_content() ?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <!-- Nav tabs -->
              <?php
              //Verifica se o campo repeater tem dados inseridos
              if( have_rows('abas_galeria') ) { ?>
                <ul class="nav nav-tabs nav-tabs-instalacao" role="tablist">

                    <!--loop para a exibição do contéudo do campo-->
                    <?php $i = 1 ?>
                    <?php while ( have_rows('abas_galeria') ) { ?>
                      <?php the_row(); ?>

                      <? $tituloAba = get_sub_field('titulo_aba') ; ?>
                      <!--Exibe o conteúdo dos subcampos do repeater-->

                      <li role="presentation" class="<?=($i == 1) ? 'active' : null; ?>">
                        <a href="#<?php echo 'titulo_aba_'.$i ?>" aria-controls="<?php echo 'titulo_aba_'.$i ?>" role="tab" data-toggle="tab">
                          <?php echo $tituloAba?>
                        </a>
                      </li>
                    <?php $i++ ?>
                    <?php } ?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <? $i = 1 ?>
                  <?php while ( have_rows('abas_galeria') ) { ?>
                    <?php the_row(); ?>
                    <div role="tabpanel" class="tab-pane <?=($i == 1) ? 'active' : null; ?>" id="titulo_aba_<?=$i?>">
                      <?php $images = get_sub_field('conteudo_aba'); ?>
                      <?php if (!empty($images) ) { ?>
                        <div class="row">
                          <? $j = 1 ?>
                          <?php foreach ($images as $image) { ?>
                            <div class="item col-sm-6 col-md-3 col-lg-3" data-image-id="" data-toggle="modal" data-title="" data-caption="" data-image="<?php echo $image[sizes][large]; ?>" data-target="#image-gallery">
                              <div class="img-galeria">
                                <a href="<?php echo $image['url']; ?>" rel="lightbox">
                                   <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"/>
                                </a>
                              </div>
                            </div>
                            <?php if ($j % 4 == 0) { ?>
                              <div class="clearfix visible-md-block visible-lg-block"></div>
                            <?php } ?>
                            <? $j++?>
                          <?php } ?>
                        </div>
                      <?php } ?>
                    </div>
                    <?php $i++ ?>
                  <?php } ?>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </section>
    </main>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>
