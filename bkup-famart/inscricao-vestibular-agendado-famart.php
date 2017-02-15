<!DOCTYPE html>
<html lang = "en">
<head>
    <link rel="shortcut icon" href="img/favicon.png " />
    <!--<link rel = "stylesheet" href = "css/style.css">-->
    <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
    <link rel = "stylesheet" href = "http://famart.com.br/css/formulario-matricula.css">


    <title>Formulário de Inscrição</title>

    <!-- Mostra Regulamento -->
    <script type="text/javascript">
        var isOpen = false;
        function showDiv()
        {
            if(isOpen)
            {
                document.getElementById('Mostra').style.display = 'none';
            }
            else
            {
                document.getElementById('Mostra').style.display = 'block';
            }
            isOpen = !isOpen;
        }
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
    <!--################ FIM - SCRIPT PARA MOSTRAR  A PERGUNTA #################-->


    <!--################ CEP #################-->
    <!--<script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="js/gmaps.js" type="text/javascript"></script>
    <script src="js/cep.js" type="text/javascript"></script>
    
    <script>
        $(function(){
            wscep({map: 'map1',auto:true});
        })
    </script>

    <!--################ FIM - CEP #################-->

    <!--#################### MÁSCARAS DOS CAMPOS ###########-->
    <script src="http://famart.com.br/js/jquery.js" type="text/javascript"></script>
    <script src="http://famart.com.br/js/jquery.maskedinput.js" type="text/javascript"></script>

    <script type="text/javascript">
        jQuery(function($){


           $("#nascimento").mask("99/99/9999",{placeholder:" "});
           $("#telcel").mask("(99) 99999-9999");
           $("#telfixo").mask("(99) 9999-9999");
           $("#cep").mask("99999-999");
           $("#cpf").mask("999.999.999-99");

       });

    </script>
    <!--#################### FIM MÁSCARAS DOS CAMPOS ###########-->

    <style type="text/css">
        .hr {
            display: block;
            height: 1px;
            margin: 1em 0;
            padding: 0;
            border: 0;
            border-top: 1px solid #ccc;
        }

        .titulo-inscricao {
            font-size: 25px;
            color: #3C3C3C;
        }

        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 200px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 150%;
            left: -200%;
            margin-left: -60px;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: black transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }
    </style>

</style>

<script type="text/javascript">

    function id(el) {

        return document.getElementById(el);

    }


    function mostra() {

        id('form1').style.display = 'block';

    }


    function esconde() {

        id('form1').style.display = 'none';

    }


</script>


<script type="text/javascript">

    function id(el) {

        return document.getElementById(el);

    }


    function mostra_enem() {

        id('form-enem').style.display = 'block';

    }


    function esconde_enem() {

        id('form-enem').style.display = 'none';

    }


</script>

</head>

<?php
$Data = date("d/m/Y");
?>


<body>
    <?php include_once 'topo.html' ?>

    <div id = "containner" class = "box800 centraliza">

        <div class="espacamento_padrao box-100 f-left">
            <h1 class="titulo-inscricao">Formulário de Inscrição</h1>
            <div class="hr"></div>
        </div>

        <div class="box-100">
            <div class="espacamento_padrao texto-descricao">
                <p>Preencha o formulário abaixo para fazer sua inscrição, confirme seus dados e clique em <strong>enviar</strong> para ser direcionado a página de pagamento.</p>
                <p style="margin-top: 13px;">O <strong>taxa da inscrição</strong> é de R$ 50,00 e deve ser paga para efetivar sua incrição.</p>
                <p style="margin-top: 13px;">Não se esqueça de escolher o <strong>dia</strong> e a <strong>hora</strong> para realizar sua prova. </p>
                <p style="margin-top: 13px;">Após recebermos seus dados, entraremos em contato para confirmar sua inscrição.</p>
            </div>
        </div>

        <form name="formulario-inscricao" method="POST" id="formulario-inscricao" action="confirmacao-e-pagamento/">

            <div class="box-40 f-left">
                <fieldset class="espacamento_padrao">
                    <div class="box-100 f-left font-field">
                        Campus:
                    </div>
                </fieldset>

                <fieldset class="espacamento_padrao box-60">
                    <select class="campos-select" name="unidade" id="unidade" required>
                        <option value="Itaúna MG" >Itaúna MG</option>
                    </select>
                </fieldset>
            </div>

            <div class="box-60 f-left">
                <fieldset class="espacamento_padrao">
                    <div class="box-100 f-left font-field">
                        Curso:
                    </div>
                </fieldset>

                <fieldset class="espacamento_padrao box-100">
                    <select class="campos-select" name="curso" id="curso" required>
                        <option value="Pedagogia" >Pedagogia</option>
                    </select>
                </fieldset>
            </div>

            <fieldset class="espacamento-preco-novo box-100">
                <div class="linha box-100"></div>
            </fieldset>

            <div class="box-60 f-left">
                <fieldset class="espacamento_padrao">
                    <div class="box-100 f-left font-field">
                        Dia da Prova:
                    </div>
                </fieldset>

                <fieldset class="espacamento_padrao box-97">
                    <select class="campos-select" name="dia" id="dia" required>
                        <option value="" disabled selected>Selecione um dia...</option>
                        <option value="Terça-feira, 26 de julho de 2016" >Terça-feira, 26 de julho de 2016</option>
                        <option value="Quarta-feira, 27 de julho de 2016" >Quarta-feira, 27 de julho de 2016</option>
                        <option value="Quinta-feira, 28 de julho de 2016" >Quinta-feira, 28 de julho de 2016</option>
                        <option value="Sexta-feira, 29 de julho de 2016" >Sexta-feira, 29 de julho de 2016</option>
                    </select>
                </fieldset>
            </div>

            <div class="box-40 f-left">
                <fieldset class="espacamento_padrao">
                    <div class="box-100 f-left font-field">
                        Horário da Prova:
                    </div>
                </fieldset>

                <fieldset class="espacamento_padrao box-100">
                <select class="campos-select" name="horario" id="horario" required>
                        <option value="" disabled selected>Selecione um horário...</option>
                        <option value="9:00" >9:00</option>
                        <option value="10:00" >10:00</option>
                        <option value="11:00" >11:00</option>
                        <option value="13:00" >13:00</option>
                        <option value="14:00" >14:00</option>
                        <option value="15:00" >15:00</option>
                        <option value="16:00" >16:00</option>
                        <option value="17:00" >17:00</option>
                        <option value="18:00" >18:00</option>
                    </select>
                </fieldset>
            </div>

            
            <fieldset class="espacamento-preco-novo box-100">
                <div class="linha box-100"></div>
            </fieldset>

            <div class="box-45-form f-left">
                <fieldset class="espacamento_padrao">
                    <div class="box-100 f-left">
                        Nome Completo:*
                    </div>
                </fieldset>

                <fieldset class="espacamento_padrao box-97-form">
                    <input class="campos" type="text" name="nome" id="nome" required>
                </fieldset>
            </div>

            <div class="box-35-form f-left">
                <fieldset class="espacamento_padrao">
                    <div class="box-100 f-left">
                        Identidade (RG):*
                    </div>
                </fieldset>

                <fieldset class="espacamento_padrao box-95-form">
                    <input class="campos" type="text" name="rg" id="rg" required>
                </fieldset>
            </div>

            <div class="box-20-form f-left">
                <fieldset class="espacamento_padrao">
                    <div class="box-100 f-left">
                        Orgão Expedidor:*
                    </div>
                </fieldset>

                <fieldset class="espacamento_padrao box-95-form">
                    <input class="campos" type="text" name="orgao" id="orgao" required>
                </fieldset>
            </div>

            <div class="box-25-form f-left">
                <fieldset class="espacamento_padrao">
                    <div class="box-100 f-left">
                        CPF (Somente Números):*
                    </div>
                </fieldset>

                <fieldset class="espacamento_padrao box-95-form">
                    <input class="campos" type="text" name="cpf" id="cpf" required>
                </fieldset>
            </div>

            <div class="box-25-form f-left">
                <fieldset class="espacamento_padrao">
                    <div class="box-100 f-left">
                     Nascimento:*
                 </div>
             </fieldset>

             <fieldset class="espacamento_padrao box-95-form">
                <input class="campos" type="text" name="nascimento" id="nascimento" style="font-size:20px;" required>
            </fieldset>
        </div>

        <div class="box-25-form f-left">
         <fieldset class="espacamento_padrao">
            <div class="box-100 f-left">
                Sexo:*
            </div>
        </fieldset>

        <fieldset class="espacamento_padrao box-95-form">
            <select class="campos-select" name="sexo" required>
                <option value="" disabled selected>Selecione uma opção</option>
                <option value="Feminino">Feminino</option>
                <option value="Masculino">Masculino</option>
            </select>
        </fieldset>
    </div>

    <div class="box-25-form f-left">
        <fieldset class="espacamento_padrao">
            <div class="box-100 f-left">
                Escolaridade:*
            </div>
        </fieldset>

        <fieldset class="espacamento_padrao box-95-form">
            <select class="campos-select" name="escolaridade" required>
                <option value="" disabled selected>Selecione uma opção</option>
                <option value="Feminino">ENSINO FUNDAMENTAL</option>
                <option value="Masculino">ENSINO MÉDIO</option>
                <option value="Masculino">ENSINO SUPERIOR</option>
                <option value="Masculino">PÓS-GRADUAÇÃO</option>
                <option value="Masculino">MESTRADO</option>
                <option value="Masculino">DOUTORADO</option>
            </select>
        </fieldset>
    </div>

    <div class="box-50-form f-left">
        <fieldset class="espacamento_padrao">
            <div class="box-100 f-left">
                E-mail:*
            </div>
        </fieldset>

        <fieldset class="espacamento_padrao box-97-form">
         <input class="campos" type="email" name="email" id="email" required>
     </fieldset>
 </div>

 <div class="box-50-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            E-mail Alternativo:
        </div>
    </fieldset>

    <fieldset class="espacamento_padrao box-97-form">
     <input class="campos" type="email" name="emailalternativo" id="emailalternativo">
 </fieldset>
</div>

<div class="box-20-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            CEP:*
        </div>
    </fieldset>

    <fieldset class="espacamento_padrao box-92-form">
     <input class="campos" type="text" name="cep" id="cep" required>
 </fieldset>
</div>

<div class="box-50-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            Rua/Avenida:*
        </div>
    </fieldset>

    <fieldset class="espacamento_padrao box-97-form">
     <input class="campos" type="text" name="endereco" id="endereco" required>
 </fieldset>
</div>

<div class="box-10-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            Número:*
        </div>
    </fieldset>

    <fieldset class="espacamento_padrao box-83-form">
     <input class="campos" type="text" name="numero" id="numero" required>
 </fieldset>
</div>

<div class="box-20-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            Bairro:*
        </div>
    </fieldset>

    <fieldset class="espacamento_padrao box-94-form">
     <input class="campos" type="text" name="bairro" id="bairro" required>
 </fieldset>
</div>

<div class="box-50-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            Cidade:*
        </div>
    </fieldset>

    <fieldset class="espacamento_padrao box-97-form">
     <input class="campos" type="text" name="local" id="local" required>
 </fieldset>
</div>

<div class="box-10-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            Estado:*
        </div>
    </fieldset>

    <fieldset class="espacamento_padrao box-83-form">
     <input class="campos" type="text" name="estado" id="estado" required>
 </fieldset>
</div>

<div class="box-40-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            Complemento:*
        </div>
    </fieldset>

    <fieldset class="espacamento_padrao box-97-form">
     <input class="campos" type="text" name="complemento" id="complemento">
 </fieldset>
</div>

<div class="box-50-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            Telefone Fixo:*
        </div>
    </fieldset>

    <fieldset class="espacamento_padrao box-97-form">
     <input class="campos" type="text" name="telfixo" id="telfixo" required>
 </fieldset>
</div>

<div class="box-50-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            Telefone Celular:*
        </div>
    </fieldset>

    <fieldset class="espacamento_padrao box-97-form">
     <input class="campos" type="text" name="telcel" id="telcel" required>
 </fieldset>
</div>


<!-- ### CAMPO FILIAÇÃO OCULTO ###
<div class="box-50-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            Filiação:*
        </div>
    </fieldset>

    <fieldset class="espacamento_padrao box-97-form">
     <input class="campos" type="text" name="mae" id="mae" placeholder="Nome da Mãe" required>
 </fieldset>
</div>

<div class="box-50-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            &nbsp;
        </div>
    </fieldset>

    <fieldset class="espacamento_padrao box-97-form">
     <input class="campos" type="text" name="pai" id="pai" placeholder="Nome do Pai" required>
 </fieldset>
</div>

-->

<div class="box-50-form f-left">
    <!--fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            Possui necessidades especiais?
            <input type="radio" id="necessidades" name="necessidades" value="Sim" onclick="javascript:mostra();" required/>
            Sim
            <input type="radio" id="necessidades" name="necessidades" value="Não" onclick="javascript:esconde();" required/>
            Não
        </div>
    </fieldset>

    <fieldset class="espacamento_padrao box-97-form">
      <div class="espacamento">
          <div id="form1" style="display:none;">
            <div class = "campo">
                <div id="form1" style="display:none;">
                </div>
                <div class = "inputCampo">
                    <input class="campos" type="text" name="descricao" id="descricao" placeholder="Especifique..." style="width:100%" />
                </div>
            </div>
        </div>
    </div>
    <br />
</fieldset>
</div>


<div class="box-50-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
            Deseja utilizar sua nota do enem? 
            <div class="tooltip">
                <img src="images/icon-interrogacao.png">
                <span class="tooltiptext">
                    Selecionando esta opção você utilizará sua nota do ENEM para ingressar em nossa instituição, 
                    não sendo necessária a realização do vestibular.
                </span>
            </span>
        </div>
        <input type="radio" id="enem" name="enem" value="Sim" onclick="javascript:mostra_enem();" required/>
        Sim
        <input type="radio" id="enem" name="enem" value="Não" onclick="javascript:esconde_enem();" required/>
        Não
    </div>
</fieldset-->

<fieldset class="espacamento_padrao box-97-form">
  <div class="espacamento">
      <div id="form-enem" style="display:none;">
        <div class = "campo">
            <div id="form-enem" style="display:none;">
            </div>
            <div class = "inputCampo box-50-form f-left">
                <div class = "box-95-form f-left">
                    <input class="campos" name="ano_de_realizacao" id="ano_de_realizacao" placeholder="Ano de Realização" type = "text" style="width:100%" />
                </div>
            </div>
            <div class = "inputCampo box-50-form f-left">
                <div class = "box-97-form f-left">
                    <input class="campos" name="num_enem" id="num_enem" placeholder="Nº de inscrição do Enem" type = "text" style="width:100%" />
                </div>
            </div>
        </div>
    </div>
</div>
<br />
</fieldset>
</div>

<fieldset class="espacamento-preco-novo box-100">
    <div class="linha box-100"></div>
</fieldset>

<div class="box-10-form f-left">
    <fieldset class="espacamento_padrao box-35-form">
      <span class="titulo-h3">
        Como nos conheceu?
    </span>
</fieldset>
</div>

<div class="box-50-form f-left">
    <fieldset class="espacamento_padrao box-97-form">
      <select class="campos-select" name="como_conheceu" id="como_conheceu" required>
        <option value="" disabled selected>Selecione uma opção</option>
        
        <option value="Cartaz/Panfleto">Cartaz/Panfleto</option>
        <option value="Facebook">Facebook</option>
        <option value="Instagram">Instagram</option>
        <option value="Google">Google</option>
        <option value="Indicação">Indicação</option>
        <option value="Email">Email</option>
        <option value="SMS">SMS</option>
        <option value="Faixa">Faixa</option>
        <option value="Pesquisa">Pesquisa</option>
        
    </select>
</fieldset>
</div>

<!--div class="box-35-form f-left">
    <fieldset class="espacamento_padrao box-95-form" style="font-size: 0.8em;">
      <input type="checkbox" name="receber" id="receber" value="Gostaria de receber novidades promoções 
      do portal por e-mail" checked />Gostaria de receber novidades promoções 
      do portal por e-mail.
  </fieldset>
</div-->

<fieldset class="espacamento-preco-novo box-100">
    <div class="linha box-100"></div>
</fieldset>

<!--- Regulamento - Início -->

<!--div class="box-25-form f-left">
    <fieldset class="espacamento_padrao">
        <div class="box-100 f-left">
          &nbsp;
      </div>
  </fieldset>

  <fieldset class="espacamento_padrao box-95-form">
    <div class="box-100 f-left">
     <span class="font-regulamento"><a href="javascript:void(window.open('http://www.famart.com.br/documentos-pdf/edital-do-vestibular-2016.pdf','','width=600,height=800,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))" class="a"><i style="font-size: 1.3em;">Leia o Edital</i></a></span>
 </div>
</fieldset>

<!--
  <fieldset class="espacamento_padrao box-95-form">
    <div class="box-100 f-left">
     <span class="font-regulamento"><a href="javascript:showDiv()" class="a"><i style="font-size: 1.3em;">Leia o Regulamento</i></a></span>
 </div>
</fieldset>-->

<!--/div>

    <!--- Regulamento - Fim -->

    <div class="box-25-form f-right">
        <fieldset class="espacamento_padrao box-95-form">
            <div class="box-100 f-right">
                <input type="submit" class="botao-cadastro" name="inscricaoonline"  value="ENVIAR"/>
            </div>
        </fieldset>
    </div>

    <P>Não se esqueça de verificar sua <strong>Caixa de Spam</strong>. Caso não receba o e-mail de confirmação, entre em contato com a gente.</P>


    <div class="espacamento_padrao">
        <div id="Mostra" style=" width:640px; display:none; padding:50px; overflow: auto; position: relative; height: 220px; margin-left: 95px; margin-bottom: 45px; margin-top: 5px; background: #f8f8f8; border: 4px solid #c4d5dc; border-radius: 5px;" >
            <?php include("regulamento.htm"); ?> 
        </div>
    </div>




</form>

</div>

<?php include 'rodape.php'; ?>
</body>
</html> 