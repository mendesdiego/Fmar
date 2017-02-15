<?php
require("conexao.php");
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <meta http-equiv = "Content-Type" content = "text/html; charset=UTF-8">
    <link rel = "stylesheet" href = "css/pre-index.css">
    <script src = "js/jquery-v1.10.2.js"></script>


    <!--###############  JQUERY PARA VALIDAÇÃO  ########################-->


    <script src = "js/mascaraDOformulario/jquery.min.js" type = "text/javascript"></script>
    <script src = "js/mascaraDOformulario/jquery.validate.js" type = "text/javascript"></script>
    <!-- <script src = "js/mascaraDOformulario/jquery.mask.js" type = "text/javascript"></script>-->
    <script src = "js/mascaraDOformulario/mascara.js" type = "text/javascript"></script>
    <link href = "css/validate.css" type = "text/css" media = "screen" rel = "stylesheet" />
    <!--[if lte IE 7]>
    <link href = "css/validate_ie7.css" type = "text/css" media = "screen" rel = "stylesheet" />
    <![endif]-->


    <!--###############################################################-->

    <title>Cursos Gratuitos | Famart</title>

    <!--###############################################################-->


    <script type ="text/javascript">

        $(document).ready(function(){



            $('select#selectCursos option').eq(1).css('backgroundColor', '#A1C8E5') ;
            $('select#selectCursos option').eq(9).css('backgroundColor', '#A1C8E5') ;

        });

    </script>
    <!--###############################################################-->

    <script type="text/javascript">
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else { 
                if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            var xmlhttp = new XMLHttpRequest();

        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getuser.php?q="+str,false);
        xmlhttp.send();
        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;

    }
}

/* Quando usar o SELECT CURSOS selectCursos vai atribuir o valor ao botao submit
    que por sua vez vai ter  a funçao de chamar a funçao showUser
    */
    function atribuiValorAoBotao(valor){
     a= $("#selectCursos option:selected").text();
     $(dialog).hide('fast');
     $("#submitSelecionarCurso").attr("name",valor);
     $("#submitSelecionarCurso").attr("value"," Veja grade do curso  "+a);
     $("#curso_escolhido").attr("value",""+a)
 }


</script>

<!--###############################################################-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
 $(function() {
   width = $(window).width();  
   resultado_width = width - (width * 0.2);
   height = $(window).height();  
   resultado_height = height - (height * 0.2);
   $( "#dialog" ).dialog({
    resizable: false,
    autoOpen: false,
    width: resultado_width,
    height: resultado_height,
    modal: true,
    buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
      }
  }
});
});
</script>
<style>
    .ui-widget-overlay {
      background: #0B0A0A url("images/ui-bg_flat_0_aaaaaa_40x100.png") 50% 50% repeat-x;
      opacity: .9;
      filter: Alpha(Opacity=30);
      support: IE8;
  }
</style>


<!-- Facebook Conversion Code for Cadastros - cursos Famart -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6031372086916', {'value':'0.00','currency':'BRL'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6031372086916&amp;cd[value]=0.00&amp;cd[currency]=BRL&amp;noscript=1" /></noscript>


</head>

<body>
    <div id = "containner">
        <div id = "escolha">
            <img id="logo" src = "http://www.famart.com.br/img/banner_famart_tpl.jpg" alt = ""  />
            <ul class = "centraliza">
                <div id = "titulo"><h3>Acesse seu curso</h3></div>
            </ul>
        </div>
        <!--###########################################################################-->
        <div id = "escolha-login">
            <div id = "escolha-login-Educacao">
                <div class = "segmento-Login">
                    <p>Login para Segmento Educação</p>
                </div>
                <div id = "login1">
                    <form action = "">
                        <input type = "text" placeholder = "Login" />
                        <input type = "text" placeholder = "Senha" />
                        <input class = "submitLogin" type = "submit" />
                    </form>
                </div>
            </div>
            <!--######################################################################-->
            <div id = "escolha-login-Demais">
                <div class = "segmento-Login">
                    <p>Login para Demais Segmentos</p>
                </div>
                <div id = "login2">
                    <form action = "">
                        <input type = "text" placeholder = "Login" />
                        <input type = "text" placeholder = "Senha" />
                        <input class = "submitLogin" type = "submit" />
                    </form>
                </div>
            </div>
            <!--#############################################################################-->
            <div id = "cadastro" class = "centraliza">
                <div id="resposta">
                    <form id = "f" class = "validate" action = "index.php" method = "POST">
                        <!-- ################################################-->
                        <div id = "box950" class = "centraliza-texto">
                            <div id="icon-check"><img src="images/check.png"></div>  <strong style="font-size: 16px; color:#3a3a3a;">Inscrição realizada com sucesso.</strong><br /><br /> 
                            Um e-mail foi enviado confirmando sua inscrição. Em breve você receberá seu login e senha de acesso também por e-mail. Obrigado!
                            <br />
                        </div>
                        <!-- ################################################-->
                        <!-- ################################################-->
                        <style>
                            #grade{
                                display: none;
                                width: 100%;
                            }
                        </style>
                        <script type="text/javascript">
                         $("#selectCursos").click(function(){
                            $('#grade').hide('fast');
                        });
                         $('#submitSelecionarCurso').click(function(){
                            $('#grade').toggle('fast');
                            $( "#dialog" ).dialog( "open" );
                        });
                     </script>
                     <input id = "realizar-outro-cadastro" name = "resposta"  value="Fazer outro cadastro" type = "submit" />
                 </form>
             </div>
         </div>
         <!-- ################################################-->
         <!-- ################################################-->
         <!-- ################################################-->
         <!-- ################################################-->
         <!-- ################################################-->
         <!-- ################################################-->
         <!-- ################################################-->
         <!-- ################################################-->
         <!-- ################################################-->
         <!-- ################################################-->
         <!-- ################################################-->
         <!-- ################################################-->
         <!-- ################################################-->
         <div id = "logo">
            <img src = "img/pre-logo.fw.png"  alt = "">
        </div>
    </div>
</div>
</body>
</html>
