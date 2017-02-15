<meta name = "viewport" content = "width=device-width">
<link rel="shortcut icon" href="img/favicon.png " />
<link rel = "shortcut icon" type = "image/ico" href = "images/favicon.gif" />
<link rel = "stylesheet" href = "css/screen.css" type = "text/css" media = "screen" />
<link rel = "stylesheet" href = "css/lightbox.css" type = "text/css" media = "screen" />
<link href = 'http://fonts.googleapis.com/css?family=Fredoka+One|Open+Sans:400,700' rel = 'stylesheet'
type = 'text/css'>

<style type="text/css">
    .botao-fotos{
        text-align: center;
        background: #160959;
        color: #fff;
        padding: 2%;
        width: 40%;
        margin: 0 auto;
        font-size: 1.2em;
        font-weight: bold;
    }

    .nome-album{
        text-align: center;
        font-weight: bold;
        font-size: 1.1em;
    }

</style>
<div id = "content">
    <div /*class = "section"*/ id = "example">
        <div class = "imageRow">
            <div class = "set">
                <div class = "single">
                    <a href = "album-estrutura.php" title = "Estrutura">
                        <img src = "/img/estrutura/full_6.jpg"  />
                    </a>
                    <div class="nome-album">Estrutura</div>
                </div>

                <div class = "single">
                    <a href = "album-estoria-seriada.php" title = "Estória Seriada - 26/08/16">
                        <img src = "/img/estoria-seriada/00.jpg"  />
                    </a>
                    <div class="nome-album">Estória Seriada - 26/08/16</div>
                </div>

                <div class = "single">
                    <a href = "album-contacao-de-estorias-fantoches.php" title = "Contação de Estórias - Fantoches 21/10/16">
                        <img src = "/img/contacao-de-estorias-fantoches/7.jpg"  />
                    </a>
                    <div class="nome-album">Contação de Estórias - Fantoches 21/10/16</div>
                </div>

                 <div class = "single">
                    <a href = "album-atividades-recreativas.php" title = "Atividades Recreativas - 19/11/2016">
                        <img src = "/img/atividades-recreativas/1.jpg"  />
                    </a>
                    <div class="nome-album">Atividades Recreativas - 19/11/2016</div>
                </div>
            </div>
        </div>

    <!--
    <a href="http://famart.edu.br/instalacoes.php" target="blank">
        <div class="botao-fotos">
            VER MAIS FOTOS
        </div>
    </a>
-->

</div>


</div><!-- end #content -->

<script src = "js/jquery-1.7.2.min.js"></script>
<script src = "js/jquery-ui-1.8.18.custom.min.js"></script>
<script src = "js/jquery.smooth-scroll.min.js"></script>
<script src = "js/lightbox.js"></script>

<script>
    jQuery(document).ready(function ($) {
        $('a').smoothScroll({
            speed: 1000,
            easing: 'easeInOutCubic'
        });

        $('.showOlderChanges').on('click', function (e) {
            $('.changelog .old').slideDown('slow');
            $(this).fadeOut();
            e.preventDefault();
        })
    });

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-2196019-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>