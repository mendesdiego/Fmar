<?php  get_header() ?>

<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>

    <main>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3 class="titulo-curso-saiba"><?php the_title(); ?></h3>
              <div class="previa-curso-interno">
                <?php the_content(); ?>
              </div>

              <?php
                if (get_the_ID() == 158) {
                  $valor_de = get_field('valor_matricula');
                  $valor_por = get_field('valor_matricula_promocional');
                   if ($valor_por) { ?>
                     <p>
                       <span class="valor_matricula_de_pedagogia">De: R$ <?php echo $valor_de ?></span>
                       <span class="valor_promocional_pedagogia">Por: R$ <?php echo $valor_por ?></span>
                     </p>
                <?php } else { ?>
                  <span class="valor-matricula">R$ <?php echo $valor_de ?></span>
                <?php } ?>
              <? } ?>

              <a class="btn btn-increva" href="<?php echo get_permalink() ?>?pre-matricula=sim" role="button">Inscreva-se agora mesmo</a>
              <?php
              $edital = get_field('edital');
               if ($edital) { ?>
                <a class="btn btn-increva" href="<?php echo $edital; ?>" target="_blank" role="button">Baixe o edital</a>
              <?php } ?>

            </div>
            <div class="col-md-6">
              <div class="box-info-add">
                <p class="titulo-info-add">Informações Gerais</p>
                <div class="item-info">
                  <label>Duração</label>
                  <p><?php echo get_field('duracao'); ?></p>
                  <hr>

                  <label>Titulação</label>
                  <p><?php echo get_field('tipo_de_formacao'); ?></p>
                  <hr>

                  <label>Período</label>
                  <p><?php echo get_field('periodo'); ?></p>
                  <hr>

                  <label>Modalidade</label>
                  <p><?php echo get_field('modalidade'); ?></p>
                  <hr>

                  <label>Regime de Matrícula</label>
                  <p><?php echo get_field('regime_de_matricula'); ?></p>
                  <hr>

                  <p><?php echo get_field('outras_informacoes'); ?></p>
                </div>
              </div>
            </div>
          </div>



          <div class="informacoes">
             <div class="informacoes-panels visible-xs-block visible-sm-block">

               <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                 <?php $i = 1 ?>
                 <? foreach(range(1,10) AS $number) { ?>

                   <?php if(get_field('titulo_aba'.$number)) { ?>

                         <div class="panel panel-default">
                           <div class="panel-heading">
                             <h4 class="panel-title">
                               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?='titulo_aba_'.$number ?>">
                                 <?php echo get_field('titulo_aba'.$number) ?>
                               </a>
                             </h4>
                           </div>
                           <div id="collapse_<?='titulo_aba_'.$number ?>" class="panel-collapse collapse">
                             <div class="panel-body">
                               <?php echo get_field('conteudo_aba'.$number) ?>
                             </div>
                           </div>
                         </div> <!-- .panel -->

                     <?php $i++ ?>

                     <?php } ?>
                   <?php } ?>


                   <?
                   if( have_rows('tabela_de_grade_curricular') ) { ?>
                   <!-- Inicio Tabela Grade do Curso Mobile-->
                   <div class="panel panel-default">
                     <div class="panel-heading">
                       <h4 class="panel-title">
                         <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse_grade">
                           PROGRAMA DO CURSO
                         </a>
                       </h4>
                     </div>
                     <div id="collapse_gra">
                       <div class="panel-body">

                           <? get_template_part( 'parts/grade', 'curricular' ); ?>

                       </div>
                     </div>
                   </div> <!-- .panel -->
                   <? }?>



               </div>
             </div>
             <!--Fim tabela Grade do Curso-->


             <div class="informacoes-tabs hidden-xs hidden-sm">
               <!-- Nav tabs -->
               <ul class="nav nav-tabs" role="tablist">
                 <?php $i = 1 ?>
                 <? foreach(range(1,10) AS $number) { ?>

                 <?php if(get_field('titulo_aba'.$number)) { ?>
                 <li role="presentation" class="<?=($i == 1) ? 'active' : null; ?> ">
                   <a href="#<?php echo 'titulo_aba'.$number ?>" aria-controls="<?php echo get_field('titulo_aba'.$number) ?>" role="tab" data-toggle="tab" class="<?=(strlen(get_field('titulo_aba'.$number)) > 20 ? 'diminuir-font' : null) ?>">
                     <?php echo get_field('titulo_aba'.$number) ?>
                   </a>
                 </li>
                 <?php $i++ ?>
                 <?php } ?>

                 <?php } ?>
                 <? if( have_rows('tabela_de_grade_curricular') ) { ?>
                 <li role="presentation" class="<?=($i == 1) ? 'active' : null; ?> ">
                   <a href="#aba_grade" aria-controls="aba_grade" role="tab" data-toggle="tab" class="">
                     PROGRAMA DO CURSO
                   </a>
                 </li>
                 <? } ?>
               </ul>

               <!-- Tab panes -->
               <div class="tab-content">
                 <?php $i = 1 ?>
                 <? foreach(range(1,10) AS $number) { ?>
                 <?php if(get_field('conteudo_aba'.$number)) { ?>
                 <? $conteudo = get_field('conteudo_aba'.$number) ?>
                 <div role="tabpanel" class="tab-pane <?=($i == 1) ? 'active' : null; ?> <?=(strlen($conteudo) > 600 && 'titulo_aba'.$number != 'titulo_aba5') ? 'duas-colunas-automaticamente' : null; ?>" id="<?php echo 'titulo_aba'.$number ?>">
                   <? echo $conteudo?>
                 </div>
                 <?php $i++ ?>
                 <?php } ?>

                 <?php } ?>

                 <? if( have_rows('tabela_de_grade_curricular') ) { ?>
                 <div role="tabpanel" class="tab-pane <?=($i == 1) ? 'active' : null; ?>" id="aba_grade">
                    <? get_template_part( 'parts/grade', 'curricular' ); ?>
                 </div>
                 <? }?>
               </div>
             </div>
           </div>
        </div>
      </section>
    </main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>
