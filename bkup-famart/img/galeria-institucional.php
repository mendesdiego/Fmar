<meta name = "viewport" content = "width=device-width">
<link rel="shortcut icon" href="img/favicon.png " />
<link rel = "shortcut icon" type = "image/ico" href = "images/favicon.gif" />
<link rel = "stylesheet" href = "css/screen.css" type = "text/css" media = "screen" />
<link rel = "stylesheet" href = "css/lightbox.css" type = "text/css" media = "screen" />
<link href = 'http://fonts.googleapis.com/css?family=Fredoka+One|Open+Sans:400,700' rel = 'stylesheet'
      type = 'text/css'>
<div id = "content">
    <div /*class = "section"*/ id = "example">
        <div class = "imageRow">
            <div class = "set">


                <?php
                //Sua pasta
                $files = glob("img/full-institucional/*.*");

                $colCnt = 0;
                for ($i = 0;
                     $i < count($files);
                     $i++) {

                    $num = $files[$i];

                    echo "
                <div class = 'single'>
                    <a href = '{$num}' rel = 'lightbox[plants]'
                       title = 'O script carrega a próxima foto enquanto você observa essa.'>

                       <img src = '{$num}'  />
                            </a>
                             </div>";

                }
                ?>




            </div>
        </div>

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