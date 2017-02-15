


<head>
    <link rel = "shortcut icon" href = "img/favicon.png " />
    <link rel = "stylesheet" href = "css/informacoes.css">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-61163900-14', 'auto');
      ga('send', 'pageview');

  </script> 


</head>
<?php

require('conexao.php');
include_once 'topo.html';
// -------------------------------------


$id = isset($_GET['IdCurso']) ? $_GET['IdCurso'] : '';

if (!$id) {
    die("Nenhuma empresa foi clicada!");
}


$query = "SELECT *
FROM extensao_saude c
WHERE c.IdCurso =  '$id'
";


$sql = mysql_query($query, $con);

if (!mysql_num_rows($sql)) {
    die("Nenhum Curso foi localizado!");
}

while ($linha = mysql_fetch_array($sql)) {


    ?>
    <title><?php echo $linha['NomeCurso']; ?></title>
    <!-- ================================================ -->
    <div id = "info-curso" class = "box950 centraliza">
        <div id = "txt-curso" class = "float-left">
            <h3 style="font-size: 1.8em;"><?php echo $linha['NomeCurso']; ?></h3>
            <br>

            <?php echo $linha['Descricao']; ?>

            <br><br>


            <?php
            $Grade = $linha["NomeGrade"];
            require("$Grade"); 
            ?>

        </div>
        <div id = "div-img-curso" class = "float-left">
            <div id = "imagem-curso">
                <?php echo "<img src=img/cursos/" . ($linha['NomeImagem']) . " alt=''>";?>
            </div>
            <div id = "matricular">

                <a href = "cadastro-extensao-saude.php?IdCurso=<?php echo $id; ?>">
                    <input type = "submit" value = "Matricular-se"></input>
                </a>

            </div>
        </div>
    </div>



    <?php
}
?>
<?php
include('rodape.php');
?>

</body>