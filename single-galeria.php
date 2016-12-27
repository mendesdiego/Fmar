<? get_header() ?>

<main>
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

      <div id="single-galeria">


        <section class="lista">
          <div class="container">
              <? $i = 1 ?>
                <?
                $images = get_field('galeria');
                if( !empty($images) ){ ?>

                  <?php foreach ($images as $image) {?>
                    <div class="item col-sm-6 col-md-3 col-lg-3" data-image-id="" data-toggle="modal" data-title="" data-caption="" data-image="<?php echo $image[sizes][large]; ?>" data-target="#image-gallery">
                      <div class="img-galeria">
                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"  class="img-responsive"/>
                      </div>
                    </div>
                    <? if($i % 4 == 0) { ?>
                      <div class="clearfix visible-md-block visible-lg-block"></div>
                    <? } ?>
                    <? $i++ ?>
                    <? } ?>
                  <?php } ?>
            </div><!-- row -->
          </div>
        </section>

      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</main>



<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

             <!--<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>-->
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-xs-6 col-btn-left">
                    <button type="button" class="btn btn-left" id="show-previous-image"><span class="glyphicon glyphicon-chevron-left"></span></button>
                </div>

                <div class="col-xs-6 col-btn-right">
                    <button type="button" id="show-next-image" class="btn"><span class="glyphicon glyphicon-chevron-right"></span></button>
                </div>
                <!--
                <div class="col-xs-12 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div> -->
            </div>
        </div>
    </div>
</div>

<? get_footer() ?>
