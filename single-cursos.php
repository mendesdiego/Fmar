<?php get_header() ?>
<?php
  $preMatricula = ($_GET["pre-matricula"] == 'sim' ? true : false ) ;
  if($preMatricula) {
    get_template_part( 'parts/content', 'form-pre-matricula');
  } else {
    get_template_part( 'parts/content', 'mais-informacoes-curso');
  }

 ?>

<?php get_footer() ?>
