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
              <a class="btn btn-increva" href="<?php echo get_permalink() ?>?pre-matricula=sim" role="button">Inscreva-se agora mesmo</a>
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
                  <?php $i = 1 ?>
                  <?php foreach(range(1,10) AS $number) { ?>

                  <?php if(get_field('titulo_aba'.$number)) { ?>
                    <li role="presentation" class="<?=($i == 1) ? 'active' : null; ?>">
                      <a href="#<?php echo 'titulo_aba'.$number ?>" aria-controls="<?php echo get_field('titulo_aba'.$number) ?>" role="tab" data-toggle="tab">
                        <?php echo get_field('titulo_aba'.$number) ?>
                      </a>
                    </li>
                    <?php $i++ ?>
                  <?php } ?>

                  <?php } ?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <?php $i = 1 ?>
                  <?php foreach(range(1,10) AS $number) { ?>
                    <?php if(get_field('conteudo_aba'.$number)) { ?>
                    <? $conteudo = get_field('conteudo_aba'.$number) ?>
                    <div role="tabpanel" class="tab-pane <?=($i == 1) ? 'active' : null; ?> " id="<?php echo 'titulo_aba'.$number ?>">
                      <? echo $conteudo?>
                    </div>
                    <?php } ?>
                    <?php $i++ ?>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>
