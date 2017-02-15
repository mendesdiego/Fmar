<html>
<head>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61163900-14', 'auto');
  ga('send', 'pageview');

</script> 


    <link rel = "shortcut icon" href = "img/favicon.png " />
    <title>Faculdade Martins</title>
    <script src = "js/jquery-1.9.1.js"></script>
    <script type = "text/javascript" src = "js/jquery.freezeheader.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "css/grade.css">
    <meta http-equiv = "Content-Type" content = "text/html; charset=iso-8859-1">
    <script language = "javascript" type = "text/javascript">

        $(document).ready(function () {
            $("#table1").freezeHeader({'height': '300px'});
            $("#table2").freezeHeader();
            $("#tbex1").freezeHeader();
            $("#tbex2").freezeHeader();
            $("#tbex3").freezeHeader();
            $("#tbex4").freezeHeader();
        })
    </script>
</head>
<body>

    <?php include_once('topo.html') ?>
    <div class = "wrapper">

        <section>
            <div id = "hdtbex1" style = "visibility: hidden; top: 0px; width: 0px;"></div>
            <table class = "gridView" id = "tbex1">
                <thead class = "tableHeader-processed">
                    <div class="noticias">
                       <h1 style="margin-bottom: -20px;">Cursos de Extensão</h1>
                       <br><br>
                       <p style="font-size: 12px;">
                           Conhecimento é sempre bem-vindo e o aperfeiçoamento é essencial para o crescimento profissional.<br><br>

                           Uma carreira de sucesso só se faz com um investimento sólido e preciso para que as possibilidades de atuação no mercado surjam. 
                           O aluno que investe no seu currículo desde cedo e faz as escolhas certas, está olhando para o futuro e fazer um curso de extensão na FAMART é um investimento para a vida toda.
                           A metodologia de ensino dos cursos de extensão é desenvolvida no ambiente virtual, o que permite ser feito no local e horário que o aluno quiser.
                           São várias opções de cursos nas áreas de educação, saúde, comunicação e gestão.<br><br>

                           Aprender e ainda garantir horas complementares é a escolha certa para quem não pensa apenas no presente.<br><br>

                           Olhe para o futuro.<br><br>

                           Faça um curso de extensão na FAMART!
                       </p>
                   </div>
                   <tr>
                    <th style="text-align: left;">Áreas de atuação</th>
                    <th>&nbsp;</th>
                    <th></th>
                </tr>
            </thead>

            <table width="600" border="0" cellspacing="6" cellpadding="6" >
              <tr style="border-bottom: 1px solid #eee;  border-style: dashed;">
                  <tr>
                    <th style="text-align: left" scope="row">&nbsp;</th>
                    <th scope="row">&nbsp;</th>
                </tr>
                <th width="377" style="text-align: left" scope="row">Comunicação</th>
                <th width="213" scope="row">
                    <a href = "http://famart.com.br/cursos-de-extensao-comunicacao.php">
                        <input id = "cadastrar" type = "submit" value = "Veja os cursos">
                    </a>
                </th>
                <tr>
                    <th style="text-align: left" scope="row">&nbsp;</th>
                    <th scope="row">&nbsp;</th>
                </tr>
            </tr>
                <tr>
                    <th style="text-align: left" scope="row">&nbsp;</th>
                    <th scope="row">&nbsp;</th>
                </tr>
                <th style="text-align: left" scope="row">Educação</th>
                <th scope="row">
                    <a href = "http://famart.com.br/cursos-de-extensao-educacao.php">
                        <input id = "cadastrar" type = "submit" value = "Veja os cursos">
                    </a>
                </th>
                <tr>
                    <th style="text-align: left" scope="row">&nbsp;</th>
                    <th scope="row">&nbsp;</th>
                </tr>
            </tr>
            <tr style="border-bottom: 1px solid #eee;  border-style: dashed;">
                <tr>
                    <th style="text-align: left" scope="row">&nbsp;</th>
                    <th scope="row">&nbsp;</th>
                </tr>
                <th style="text-align: left" scope="row">Gestão</th>
                <th scope="row">
                    <a href = "http://famart.com.br/cursos-de-extensao-gestao.php">
                        <input id = "cadastrar" type = "submit" value = "Veja os cursos">
                    </a>
                </th>
                <tr>
                    <th style="text-align: left" scope="row">&nbsp;</th>
                    <th scope="row">&nbsp;</th>
                </tr>
            </tr>
            <tr style="border-bottom: 1px solid #eee;  border-style: dashed;">
                <tr>
                    <th style="text-align: left" scope="row">&nbsp;</th>
                    <th scope="row">&nbsp;</th>
                </tr>
                <th style="text-align: left" scope="row">Saúde</th>
                <th scope="row">
                    <a href = "http://famart.com.br/cursos-de-extensao-saude.php">
                        <input id = "cadastrar" type = "submit" value = "Veja os cursos">
                    </a>
                </th>
                <tr>
                    <th style="text-align: left" scope="row">&nbsp;</th>
                    <th scope="row">&nbsp;</th>
                </tr>
            </tr>
        </table>
    </table>

</section>
</div>
<?php include_once('rodape.php') ?>
</body>
</html>