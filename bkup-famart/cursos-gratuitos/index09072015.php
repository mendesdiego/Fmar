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

    <title>Pre-Index Moodle</title>

    <!--###############################################################-->


    <script type ="text/javascript">

        $(document).ready(function(){



            $('select#selectCursos option').eq(1).css('backgroundColor', '#A1C8E5') ;
            $('select#selectCursos option').eq(9).css('backgroundColor', '#A1C8E5') ;
 
        });

    </script>


    <!--################ SCRIPT PARA MOSTRAR  A PERGUNTA #################-->
    <script type="text/javascript">
        function mostraperguntagraduacao(){

         if (document.getElementById("sim").checked == true){ 

            $("#mostrapergunta-graduacao").show('fast'); 
        }else{

            $("#mostrapergunta-graduacao").hide('fast'); 

        }

    }
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
            <select id="selectCursos" name = "curso_escolhido" onchange="atribuiValorAoBotao(this.value)">
                <option value="" disabled selected>Selecione seu Curso</option>

                <option name="cor" >
                    Segmento - Educação
                </option>

                <?php
                $sql = "SELECT * FROM cursos_moodle c WHERE c.IdCurso <8 ORDER BY NomeCurso ASC ";
                $query = mysql_query($sql, $con);

                while ($linha = mysql_fetch_array($query)) {
                    echo("<option  value=" . $linha['IdCurso'] . ">" . $linha['NomeCurso'] . "</option>");
                }
                ?>




                <option  >
                    Segmento - Variados
                </option>
                <?php
                $sql = "SELECT * FROM cursos_moodle c WHERE c.IdCurso >=8 ORDER BY NomeCurso ASC";
                $query = mysql_query($sql, $con);

                while ($linha = mysql_fetch_array($query)) {
                    echo("<option  value=" . $linha['IdCurso'] . ">" . $linha['NomeCurso'] . "</option>");
                }
                ?>


            </select>
            <div id="dialog" title="Basic dialog">
               <div id="grade">
                <div id="txtHint"><b>Person info will be listed here...</b></div>
            </div>
        </div>
        <!-- <input class="submitSelecionarCurso" id="opener" type="submit" value="Grade do curso">  -->
        <input  id="submitSelecionarCurso"  onclick='showUser(this.name)' class="submitSelecionarCurso"  type="submit" value="Grade do curso">  
    </div>
    <!--#############################################################################-->
    <div id = "cadastro" class = "centraliza">
        <form id = "f" class = "validate" action = "recebe_dados.php" method = "POST">
            <!-- ################################################-->
            <div id = "box950" class = "centraliza-texto">
                Cadastre-se
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
         <div id = "cadastro-esquerda">
            <div class = "campo">
                <div class = "nomeCampo">
                    <p>
                        - Nome:
                    </p>
                </div>
                <div class = "inputCampo">
                    <input name = 'nome' class = "required" type = "text" />
                    <span >Campo requerido, informe um nome válido</span>
                </div>
            </div>


            <!-- ################# FORM CURSO OCULTO ############-->

            <input id="curso_escolhido" name = "curso_escolhido" type = "hidden" value="" />

            <!-- ################################################-->





            <!-- ################################################-->
            <div class = "campo">
                <div class = "nomeCampo">
                    <p>
                        - CPF:
                    </p>
                </div>
                <div class = "inputCampo">
                    <input class = "cpf required" name = "cpf" type = "text" />
                    <span style = "display: none;">Campo requerido, informe um CPF válido</span>
                </div>
            </div>
            <!-- ################################################-->
            <div class = "campo">
                <div class = "nomeCampo">
                    <p>
                        - E-mail:
                    </p>
                </div>
                <div class = "inputCampo">
                    <input id = "email" name = "email" class = "required email" type = "text" />
                    <span >Campo requerido, informe um e-mail válido</span>
                </div>
            </div>
            <!-- ################################################-->
            <div class = "campo">
                <div class = "nomeCampo">
                    <p>
                        - Cargo/Profissão:
                    </p>
                </div>
                <div class = "inputCampo">
                    <input class = "required" name = "profissao" type = "text" />
                    <span>Informe sua Profissão</span>
                </div>
            </div>
            <!-- ################################################-->
            <div class = "campo">
                <div class = "nomeCampo">
                    <p>
                        - Cidade:
                    </p>
                </div>
                <div class = "inputCampo">
                    <input class = "required" name = "cidade" type = "text" />
                    <span>Informe sua cidade</span>
                </div>
            </div>
            <!-- ################################################-->

             <br/>
             <div class = "campo">
                 <div class = "nomeCampo">
                     <p>
                         - Como soube dos nossos cursos de extensão?<br />
                     </p>
                 </div>
                 <div class = "inputCampo">
                     <select name="como_conheceu" class="required" id="">
                         <option value="selecione"> Selecione uma opção</option>
                         <option value="Sindicato/Associação">Sindicato/Associação que faço parte</option>
                         <option value="Entidades governamentais">Entidades governamentais</option>
                         <option value="Facebook">Anúncio no Facebook</option>
                         <option value="Visita na escola que trabalho">Visita na escola que trabalho</option>
                         <option value="Busca na internet - Google">Busca na internet - Google</option>

                     </select>
                 </div>
             </div>




            <!-- ################################################-->

             <div class = "campo">
                 <div class = "nomeCampo">
                     <p>
                         - Já possui curso de R2?– (complementação pedagógica : pós com
                         equivalência de Graduação para tornar-se professor).<br /><br />
                     </p>
                 </div>
                 <div class = "inputCampo">
                     <input type = "radio" name = "possui_r2" value = "sim"
                         >Sim
                     <input type = "radio" name = "possui_r2" value = "não"
                         >Não <br />
                     <input type = "radio" name = "possui_r2" value = "não mas pretendo"
                         >Não mas pretendo <br />
                     <input type = "radio" name = "possui_r2" value = "não quero fazer"
                         >Não tenho interesse <br />
                     <input type = "radio" name = "possui_r2" value = "não sei oque é r2"
                         >Não sei oque é r2

                     <!-- ################################################-->




                 </div>
             </div>
        </div>
        <!-- ################################################-->
        <div id = "cadastro-direita">
            <div class = "campo">
                <div class = "nomeCampo">
                    <p>
                        - Telefone
                    </p>
                </div>
                <div class = "inputCampo">
                    <input class = "required fone " name = "telefone" type = "text" />
                    <span>Informe seu telefone com DDD</span>
                </div>
            </div>
            <!-- ################################################-->
            <div class = "campo">
                <div class = "nomeCampo">
                    <p>
                        - RG:
                    </p>
                </div>
                <div class = "inputCampo">
                    <input class = "required " name = "rg" type = "text" />
                    <span>Informe seu RG </span>
                </div>
            </div>
            <!-- ################################################-->
            <div class = "campo">
                <div class = "nomeCampo">
                    <p>
                        - Celular
                    </p>
                </div>
                <div class = "inputCampo">
                    <input class = "required fone" name = "celular" type = "text" />
                    <span>Informe seu telefone com DDD</span>
                </div>
            </div>
            <!-- ################################################-->
            <div class = "campo">
                <div class = "nomeCampo">
                    <p>
                        - Qual sua formação ?
                    </p>
                </div>
                <div class = "inputCampo">
                    <input name = "formacao" class = "required" type = "text" />
                    <span>Digite sua Formação</span>
                </div>
            </div>
            <!-- ################################################-->
            <div class = "campo">
                <div class = "nomeCampo">
                    <p>
                        - Já possui graduação?
                    </p>
                </div>
                <input id = "sim" type = "radio" name = "possui_graduacao" value = "sim"
                onclick = "mostraperguntagraduacao()">Sim
                <input type = "radio" name = "possui_graduacao" value = "não"
                onclick = "mostraperguntagraduacao()">Não <br />
            </div>
            <!-- ################################################-->
            <div id = "mostrapergunta-graduacao">
                <div class = "campo">
                    <div class = "nomeCampo">
                        <p>
                            - Informe a Graduação
                        </p>
                    </div>
                    <div class = "inputCampo">
                        <input name = "graduacao" type = "text" />
                        <span>Digite o curso de interesse</span>
                    </div>
                </div>
                <div class = "campo">
                    <div class = "nomeCampo">
                        <p>
                            - Qual o curso de Pós Graduação você tem interesse ?
                        </p>
                    </div>
                    <div class = "inputCampo">
                        <input name = "curso_interesse_pos" type = "text" />
                        <span>Digite o curso de interesse</span>
                    </div>
                </div>
            </div>
            <br />
            <div id = "mostrapergunta-graduacao-caso-nao">
                <!-- ################################################-->
                <div class = "campo">
                    <div class = "nomeCampo">
                        <p>
                            - Pretende fazer Pós Graduação ? Se sim qual?
                        </p>
                    </div>
                    <div class = "inputCampo">
                        <input class = "required" name = "pretende_fazer_pos" type = "text" />
                        <span>Digite o curso de interesse</span>
                    </div>
                </div>
            </div>
            <!-- ################################################-->
            <div class = "campo">
                <div class = "nomeCampo">
                    <p>
                        - Quando pretende fazer outros cursos de especialização?
                    </p>
                </div>
                <input id = "sim" type = "radio" name = "pretende_especializacao" value = " Este mês   "> Este mês<br />
                <input type = "radio" name = "pretende_especializacao" value = "Em até 6  meses ">
                Em até 6 meses <br />
                <input type = "radio" name = "pretende_especializacao" value = "não quero fazer"
                >Não tenho interesse<br />
            </div>
            <!-- ################################################-->
            <!-- ################################################-->
        </div>
        <input id = "envia-cadastro" name = "enviar" type = "submit" />
    </form>
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
