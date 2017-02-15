


<head>
    <link rel = "shortcut icon" href = "img/favicon.png " />
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
            <h3><?php echo $linha['NomeCurso']; ?></h3>
            <?php echo $linha['Descricao']; ?>
        </div>
        <div id = "div-img-curso" class = "float-left">
            <div id = "imagem-curso">
                <?php echo "<img src=img/cursos/" . ($linha['NomeImagem']) . " alt=''>";?>
            </div>
            <div id = "matricular">

                <a href = "cadastrar_livre.php?IdCurso=<?php echo $id; ?>">
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