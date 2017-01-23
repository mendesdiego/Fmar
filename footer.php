<footer>
  <section class="mapa-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 logo-rodape">
          <a href="http://www.grupoandrademartins.com.br/" target="_blank">
            <img src="<?php echo get_template_directory_uri() ?>/images/logobaixo.png" alt=""  class="logo-footer" />
          </a>
        </div>
        <div class="col-md-3 menu-rodape">
          <span class="titulo-footer">Institucional</span>
          <div>
            <?php
            $args = array(
              'menu' => 'menu_footer',
              'menu_class' => 'lista-footer',
              'walker'	 => new BootstrapNavMenuWalker()
            );
            wp_nav_menu( $args ); ?>
          </div>
        </div>
        <div class="col-md-4 menu-rodape">
          <span class="titulo-footer">Endereço</span>
          <div class="end-footer">
            <p><i class="fa fa-phone" aria-hidden="true"></i> <span class="fone-footer">0800 037 4212</span>
                <br>
                <span class="fone-fixo-footer"><small>037 3241-4212</small></span>
            </p>
            <p><i class="fa fa-whatsapp itens-end" aria-hidden="true"></i> <span>037 98826-7505</span></p>
            <p><i class="fa fa-envelope-o itens-end" aria-hidden="true"></i> <span>atendimento@grupoandrademartins.com.br</span></p>
            <p><i class="fa fa-map-marker itens-end" aria-hidden="true"></i> <span>Rua Osório Santos, 207 Nogueira Machado<br>
              <span class="comp-end">Itaúna MG, 35680-229<span></span></p>
          </div>
        </div>
        <div class="col-md-2 menu-rodape">
          <div class="sociais-footer">
            <a href="https://www.linkedin.com/company/instituto-cotemar" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icone-linkedin.png" alt="" class="sociais"/></a>
            <a href="https://www.facebook.com/InstitutoCotemar" target="_blank"> <img src="<?php echo get_template_directory_uri() ?>/images/icone-facebook.png" alt="" class="sociais-col-direita"/></a><br>
            <a href="https://www.instagram.com/instituto_cotemar/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icone-instagram.png" alt="" class="sociais"/></i></a>
            <a href="https://plus.google.com/109714730035419030606/posts" target="_blank"> <img src="<?php echo get_template_directory_uri() ?>/images/icone-google.png" alt="" class="sociais-col-direita"/></a><br>
            <a href="https://twitter.com/instcotemar" target="_blank"> <img src="<?php echo get_template_directory_uri() ?>/images/icone-twitter.png" alt="" class="sociais"/></a>

            <!--<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/s3.png" alt="" class="sociais"/></a>-->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="copy">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <div>
            <p class="texto-copy">Copyright (c) 2016 Instituto INTERCLASSE. Todos os direitos reservados. Termos de uso e privacidade.</p>
          </div>
        </div>
        <div class="col-md-2">
          <a href="http://4media.com.br/" target="_blank" class="ass"><strong>4media</strong></a></p>
        </div>
      </div>
    </div>
  </section>
</footer>
<?php wp_footer() ?>



<!-- BEGIN JIVOSITE CODE CHAT
<script type='text/javascript'>
(function(){ var widget_id = 'iTSwzbNi9b';var d=document;var w=window;function l(){ var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- END JIVOSITE CODE -->

</body>
</html>
