<?php  get_header() ?>

<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>

    <main>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3 class="titulo-curso-saiba"><?php the_title(); ?></h3>
              <div class="previa-curso">
                <?php the_content(); ?>
              </div>
              <a class="btn btn-increva" href="#" role="button">Inscreva-se agora mesmo</a>
            </div>
            <div class="col-md-6">
              <div class="box-info-add">
                <p class="titulo-info-add">Informações Gerais</p>
                <div class="item-info">
                  <label>Duração</label>
                  <p><?php echo get_field('duracao'); ?></p>
                  <hr>

                  <label>Tipo de Formação</label>
                  <p><?php echo get_field('tipo_de_formacao'); ?></p>
                  <hr>

                  <label>Tipo de Curso</label>
                  <p><?php echo get_field('tipo_de_formacao'); ?></p>
                  <hr>

                  <p><?php echo get_field('outras_informacoes'); ?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="conteudo-curso">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <?php
                    // check if the repeater field has rows of data
                    if( have_rows('abas') ):

                      // loop through the rows of data
                      $i=0;
                      while ( have_rows('abas') ) : the_row();?>
                          <li role="presentation" class="<?php echo ($i == 0) ? 'active' : null ?>"><a href="#<?php echo $i ?>" aria-controls="<?php echo $i ?>" role="tab" data-toggle="tab">
                            <?php the_sub_field('nome_aba') ?></a></li>

                          <?php $i++ ?>
                        <?php
                      endwhile;
                    endif;
                  ?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <?php
                    // check if the repeater field has rows of data
                    if( have_rows('abas') ):

                      // loop through the rows of data
                      $i=0;
                      while ( have_rows('abas') ) : the_row();?>
                        <div role="tabpanel" class="tab-pane <?php echo ($i == 0) ? 'active' : null ?>" id="<?php echo $i ?>"><?php the_sub_field('conteudo_da_aba') ?></div>
                          <?php $i++ ?>
                        <?php
                      endwhile;
                    endif;
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

  <!--<div class="container" id="page-<?=basename(get_permalink()); ?>">
    <h1 class="page-title">
      <?=get_the_title(  ); ?>
    </h1>

    <?php if(has_post_thumbnail()) { ?>
    <div class="imagem-destacada">
      <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
    </div>
    <?php } ?>
    <div class="content">

      <? the_content() ;?>

    </div>

  </div>-->

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>
