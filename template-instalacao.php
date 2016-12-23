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
              <div class="conteudo-curso">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-instalacao" role="tablist">
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
                    <? $conteudo = get_field('conteudo_aba'.$number) ?>
                    <?php if($conteudo) { ?>
                      <div role="tabpanel" class="tab-pane <?=($i == 1) ? 'active' : null; ?>" id="<?php echo 'titulo_aba'.$number ?>">
                        <div class="row">
                        <?php foreach ($conteudo as $image) {?>
                          <div class="col-md-3">
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-responsive">
                          </div>
                        <?php } ?>
                        </div>
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
