<link rel = "shortcut icon" href = "img/favicon.png " />
<html>
<body>

<head>

    <link rel = "stylesheet" href = "css/informacoes.css">
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
FROM cursos c
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
            <?php echo "<h3 class='header centraliza-texto'> Informações sobre " . $linha['NomeCurso'] . "</h3><br />   "; ?>


            <h3 class = "titulo-info ">Regime de Matrícula</h3>
            <?php echo $linha['regimematricula']; ?><br><br>


            <h3 class = "titulo-info ">Turnos de Funcionamento</h3>
            <?php echo $linha['turnos']; ?><br><br>


            <h3 class = "titulo-info ">Duração do Curso</h3>
            <?php echo $linha['duracao']; ?><br><br>

            <h3 class = "titulo-info ">Ambientes de Atuação</h3>
            <?php echo $linha['cordenacao']; ?><br><br>

            <?php echo('<p>' . $linha['Descricao'] . '</p>'); ?>
        </div>



        <div id = "div-img-curso" class = "float-left">
            <div id = "imagem-curso">
                <img src = "img/<?php echo $linha['ImagemCurso']; ?>" alt = "">
            </div>
            <div id = "matricular">

                <a href = "matricula.php?IdCurso=<?php echo $id; ?>">
                    <input type = "submit" value = "Matricular-se"></input>
                </a>

            </div>
        </div>
    </div>


    <!-- =================== TABS  ====================== -->





    <!-- ================================================ -->


<?php
}
?>
<?php
include('rodape.php');
?>

</body>
</html>