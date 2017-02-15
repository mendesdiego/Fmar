<!DOCTYPE html>
<html lang="en">
<head>

  <script type="text/javascript">
    var $JQuery = jQuery.noConflict()
  </script>

  <meta charset="UTF-8">
  <title>Instituto Graduarte</title>
  <meta name="description" content="O Instituto Graduarte é uma instituição de educação que oferece cursos de pós-graduação, complementação pedagógica e segunda graduação a distância.">
  <meta name="keywords" content="instituto graduarte, pós-graduação, complementação pedagógica, segunda graduação, pós-graduação a distância, cursos a distância">

  <?php include 'css_js.php'; ?>


  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

   ga('create', 'UA-61163900-3', 'auto');
   ga('send', 'pageview');

 </script>



 <!-- #######MODAL#########  -->

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> 
 <script type="text/javascript">


  function open_modal( id ){
   /*var maskHeight = $(document).height();
   var maskWidth = $(window).width();

   $('#mask').css({'width':maskWidth,'height':maskHeight});*/

   $('#mask').fadeIn(1000);  
   $('#mask').fadeTo("slow",0.8);  

  //Get the window height and width
 /* var winH = $(window).height();
  var winW = $(window).width();

  $(id).css('top',  winH/2-$(id).height()/2);
  $(id).css('left', winW/2-$(id).width()/1.9);*/
  $(id).fadeIn(2000); 
};
$(document).ready(function() {  

	$('a[name=modal]').click(function(e) {
		e.preventDefault();
		open_modal( $(this).attr('href') ); 
	});

  open_modal( '#dialog' );//abrindo o div#modal ao carregar a página
  
  $('.window .close').click(function (e) {
  	e.preventDefault();

  	$('#mask').hide();
  	$('.window').hide();
  });   
  
  $('#mask').click(function () {
  	$(this).hide();
  	$('.window').hide();
  });
});

</script>



<!-- #######FIM-MODAL#########  -->



</head>
<body>
	<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	?>

	<!-- #######MODAL######### -->

	<!-- #dialog é o id do DIV definido como mostrado a seguir  -->
  <a href="#dialog" name="modal"></a>

  <div class="tamanho">
    <div id="boxes">
      <!-- #personalize sua janela modal aqui -->
      <div class="meio-meio">
        <span>
            <div id="dialog" class="window" style="top: 10%; display: block;">
              <div style="text-align: center;">
               <a href="#" class="close float-right" style="margin-right: 7px;">
                <img src="http://graduarte.com.br/img/fechar.png" alt="" />
              </a> 
            </div>
            <a href="http://graduarte.com.br/pos-graduacao/educacao">
              <img src="img/fundo-transparente.png" class="img-modal">
            </a>
        </span>
      </a>
      <!-- Não remova o div#mask, pois ele é necessário para preencher toda a janela -->
      <div id="mask" class="tamanho-mascara-modal"></div>
    </div>
  </div>

</div>

<!-- #######FIM-MODAL#########  -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div id="conteinner_tudo" class="box-100">
  <!-- ################## TOPO ########################### -->
  <?php include('topo.php'); ?>
  <!-- ############################################### -->
  <!-- ############### banner ######################## -->
  <?php include('banner-novo.html'); ?>
  <!-- ############################################### -->
  <!-- ################  Conteudo ###################### -->
  <div id="containner_conteudo" class="box-100 font-padrao" >
   <div id="conteudo" class="centraliza box-72 margin-15 relative">
    <div class="box-50 f-left">
     <div id="tabs-index">
      <ul>

       <li><a class="link_tab tab_ativo" href="#a1">PÓS-GRADUAÇÃO</a></li>
       <li><a class="link_tab" href="#a2">OBTENÇÃO DE NOVO TÍTULO</a></li>
       <!--<li><a class="link_tab" href="#a3">2ª GRADUAÇÃO</a></li>-->
       <div class="c_tabs_content f-left">
        <div id="a1" class=" tabs_content ">
         <div id="containner_titulo_tab">

          <?php 
          require_once 'classes/conexao.class.php';
          $sql ="SELECT * FROM area_curso_index ORDER BY nome  LIMIT 7";
          $query=mysqli_query($con,$sql);
          while ($linha = mysqli_fetch_array($query)) {

           ?>



           <a href="<?php echo ($linha["link"]) ?>">
            <div class=' texto_tab '>
             <div class='titulo_tab_curso'><p><?php echo ($linha['nome']) ?></p>	</div>   
             <!--<div class=' icone_tab_curso'><p>TESTE</p> </div>-->
           </div>
         </a>

         <?php
       }


       ?>

     </div>
   </div> <!--  FIM a1 -->
   <div id="a2" class="tabs_content d_none">
     <?php 

     $sql ="SELECT * FROM cursos WHERE categoria = 'Obtenção De Novo Título' LIMIT 7";
     $query=mysqli_query($con,$sql);
     while ($linha = mysqli_fetch_array($query)) {
      $oque = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );
      $para = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-' );
      $area = str_replace($oque,$para, $linha['area']);
      $area = strtolower(trim($area));
      $categoria = str_replace($oque,$para, $linha['categoria']);
      $categoria = strtolower(trim($categoria));
      ?>

      <a href="<?php echo ("$categoria/{$linha['link']}/detalhes") ?>">
       <div class=' texto_tab '>
        <div class='titulo_tab_curso'><p><?php echo ($linha['nome']) ?></p>	</div>   
        <!--<div class=' icone_tab_curso'><p>TESTE</p> </div>-->
      </div>
    </a>

    <?php
  }


  ?>
</div><!--  FIM a2 -->
<div id="a3" class="tabs_content d_none">
 <?php 

 $sql ="SELECT * FROM cursos WHERE categoria = 'Segunda Graduação' LIMIT 7";
 $query=mysqli_query($con,$sql);
 while ($linha = mysqli_fetch_array($query)) {
  $oque = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );
  $para = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-' );
  $area = str_replace($oque,$para, $linha['area']);
  $area = strtolower(trim($area));
  $categoria = str_replace($oque,$para, $linha['categoria']);
  $categoria = strtolower(trim($categoria));
  ?>

  <a href="<?php echo ("$categoria/{$linha['link']}/detalhes") ?>">
   <div class=' texto_tab '>
    <div class='titulo_tab_curso'><p><?php echo ($linha['nome']) ?></p>	</div>   
    <!--<div class=' icone_tab_curso'><p>TESTE</p> </div>-->
  </div>
</a>

<?php
}


?>
</div> <!--  FIM a3 -->
</div>
</ul>
</div>	
</div>
<div id="box_seja_unidade"class="box-20 f-left">
 <div id="moca-index">
  <img src="img/moca-graduarte-pos-graduacao.png" height="500px" alt="">
</div>
<div id="seja_unidade" class=" ">
  <a href="/blog"><input class="botao font-padrao" name="seja_unidade" value="NOTÍCIAS DO BLOG" type="submit"></a>
  <a href="/blog">
   <?php 

   $con = mysqli_connect('mysql.grupoandrademartins.com.br','graduarte','rR5BxnKTazGd6Wm5','graduarte_blog');
   mysqli_set_charset($con, "utf8");
   $sql= "SELECT post_title FROM wp_posts ORDER BY id DESC LIMIT 1";
   $query = mysqli_query($con,$sql);
   while ($linha = mysqli_fetch_array($query)) {   ?>


   <p class="espacamento-interno-bloco texto_quadro">
    <?php echo $linha['post_title']; ?>
  </p>

  <?php }

  ?>



</a>
<div class="espacamento-padrao">
 <div class="fb-page" data-href="https://www.facebook.com/institutograduarte?fref=ts" 
 data-width="357" data-height="500" data-small-header="false" data-adapt-container-width="true" 
 data-hide-cover="false" data-show-facepile="false" data-show-posts="false">
 <div class="fb-xfbml-parse-ignore">
								<!--<blockquote cite="https://www.facebook.com/institutograduarte?fref=ts">
									<a href="https://www.facebook.com/institutograduarte?fref=ts">Instituto Graduarte
									</a>
								</blockquote>-->
							</div>
						</div>
					</div>


				</div>

			</div>
		</div>
	</div> <!-- Fim containner conteudo -->


	<!--########## BOX CHAT ##########-->	
	<!--<?php /*include ('box-chat.html'); */?>-->

</div>  <!-- Fim containner tudo -->
<!-- ############################################### -->
<?php include('rodape.php'); ?>

</body>
</html>