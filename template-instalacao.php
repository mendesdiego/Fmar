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
                  <?php
                    // check if the repeater field has rows of data
                    if( have_rows('abas_galeria') ):

                      // loop through the rows of data
                      $i=0;
                      while ( have_rows('abas_galeria') ) : the_row();?>
                          <li role="presentation" class="<?php echo ($i == 0) ? 'active' : null ?>"><a href="#<?php echo $i ?>" aria-controls="<?php echo $i ?>" role="tab" data-toggle="tab">
                            <?php the_sub_field('titulo_aba') ?></a></li>

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
                    if( have_rows('abas_galeria') ):

                      // loop through the rows of data
                      $i=0;
                      while ( have_rows('abas_galeria') ) : the_row();?>

                        <div role="tabpanel" class="tab-pane <?php echo ($i == 0) ? 'active' : null ?>" id="<?php echo $i ?>">
                          <div class="row">
                            <?php
                              $images = get_sub_field('conteudo_aba');
                              if ($images): ?>
                              <?php foreach ($images as $image): ?>
                            <div class="col-md-3">
                              <img src="<?php echo $image ['url']; ?>" alt="<?php echo $image ['alt']; ?>">
                              <?php echo $image ['caption']; ?>
                            </div>
                              <?php endforeach; ?>
                            <?php endif; ?>
                          </div>
                        </div>
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

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>
