<? while ( have_rows('tabela_de_grade_curricular') ) { ?>
  <? the_row() ?>
  <table class="tabela-grade-cursos table table-striped table-bordered table-hover table-responsive">
    <caption class="text-center"><? the_sub_field('nome_da_tabela'); ?></caption>


      <?
      if( have_rows('grade_curricular') ) { ?>
       <tbody>
        <? while ( have_rows('grade_curricular') ) { ?>
          <? the_row() ?>
          <?
          $coluna1 = get_sub_field('coluna_1');
          $coluna2 = get_sub_field('coluna_2');
          $coluna3 = get_sub_field('coluna_3');

          $negritarLinha = get_sub_field('negritar_linha');

          $colSpanCargaHoraria = 1 ;
          ?>


          <tr class=" <?=($negritarLinha == true ? 'negritar-linha' : null) ?>">
            <td><?=$coluna1?></td>
            <? if($coluna2) { ?>
              <td class="text-center"><?=$coluna2?></td>
            <? $colSpanCargaHoraria++ ?>
            <? } ?>
            <? if($coluna3) { ?>
              <td class="text-center"><?=$coluna3?></td>
              <? $colSpanCargaHoraria++ ?>
            <? } ?>
          </tr>
        <? } ?>
        </tbody>

        <thead>
          <tr>
            <? if($colSpanCargaHoraria > 1) { ?>
            <th>COMPONENTES CURRICULARES</th>
            <th class="text-center" colspan="<?=$colSpanCargaHoraria?>">CARGA HORÁRIA</th>
            <? } ?>

          </tr>
            <? if($colSpanCargaHoraria > 1) { ?>
          <tr>
            <th></th>
            <? if($coluna2) { ?>
              <th class="text-center">Carga horária (semanal) </th>
            <? } ?>
            <? if($coluna3) { ?>
              <th class="text-center">Carga horária (semestral)</th>
            <? } ?>

          </tr>
          <? } ?>
        </thead>
      <? }?>
  </table>
<? }?>
