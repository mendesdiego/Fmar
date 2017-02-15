
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name = "viewport" content = "user-scalable=no, width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>Flexisel - A responsive jQuery Carousel</title>
<link href="css/stylescroller.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.flexisel.js"></script>





<ul id="flexiselDemo3">
    <?php
    //Sua pasta
    $files = glob("img/patrocinadores/*.*");
    for ($i = 0; $i < count($files); $i++) {
        $num = $files[$i];
        echo("<li><img src=' {$num} ' /><li>");
    } ?>
</ul>



<script type="text/javascript">

$(window).load(function() {
    $("#flexiselDemo1").flexisel();
    $("#flexiselDemo2").flexisel({
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint:480,
                visibleItems: 1
            },
            landscape: {
                changePoint:640,
                visibleItems: 2
            },
            tablet: {
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo3").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: false,
        responsiveBreakpoints: {
            portrait: {
                changePoint:640,
                visibleItems: 1
            },
            landscape: {
                changePoint:640,
                visibleItems: 2
            },
            tablet: {
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo4").flexisel({
        clone:false
    });

});
</script>


</body>
</html>