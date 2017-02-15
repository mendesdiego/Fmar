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
            <section class = "gridView" id = "tbex1">
                <?php
                require('conexao.php');
                $query = "SELECT * FROM  extensao_saude ";
                $sql = mysql_query($query, $con) or die(mysql_error());
                while ($linha = mysql_fetch_array($sql)) {
                    ?>

                    <figure class = "grid">

                        <?php echo "<img src=img/cursos/" . ($linha['NomeImagem']) . " alt=''>";?>

                        <figcaption class="txt-saude">
                            <?php echo("<h2 id='nomeCursoLivre'>" . $linha['NomeCurso'] . "</h2>");?>
                            
                            <?php echo("<h3>" . $linha['Duracao'] . "</h3>");?>

                            <a href = "informacoes-extensao-saude.php?IdCurso=<?php echo($linha['IdCurso']); ?>">
                                <input id = "cadastrar" type = "submit" value = "saiba mais">
                            </a>
                            
                            <a href = "cadastro-extensao-saude.php?IdCurso=<?php echo($linha['IdCurso']); ?>">
                                <input id = "cadastrar" type = "submit" value = "cadastrar">
                            </a>
                        </figcaption>
                    </figure>
                    <?php
                }
                ?>
            </section>
        </section>
    </div>
    <?php include_once('rodape.php') ?>
</body>
</html>