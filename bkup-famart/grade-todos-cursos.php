<html><head>
    <link rel="shortcut icon" href="img/favicon.png " />
<script src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery.freezeheader.js"></script>
<link rel="stylesheet" type="text/css" href="css/grade.css">
<meta charset="UTF-8">
<script language="javascript" type="text/javascript">

    $(document).ready(function () {
        $("#table1").freezeHeader({ 'height': '300px' });
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
    <div class="wrapper">

      <section>
          <div id="hdtbex1" style="visibility: hidden; top: 0px; width: 0px;"></div><table class="gridView" id="tbex1">
          <thead class="tableHeader-processed">

            <tr>
                <th>Nome</th>
                <th>Duração</th>
                <th>Detalhes</th>
                <th></th>
            </tr>
        </thead>
        <tbody>


            <?php 
            require ('conexao.php');
            $query="SELECT * FROM  cursos" ;
            $sql = mysql_query($query,$con)or die(mysql_error());
            while ($linha=mysql_fetch_array($sql))
            {
                ?>

                <tr class="grid">       
                    <td><?php echo ($linha['NomeCurso']);?></td>
                    <td><?php echo ($linha['Duracao']);?></td>
                    <td><a href="informacoes.php?IdCurso=<?php echo ($linha['IdCurso']); ?>">Saiba Mais</a></td>
                    <td><form action="cadastrar.php?IdCurso=<?php echo ($linha['IdCurso'])  ?>"><input id="cadastrar"type="submit" value="cadastrar"></form></td>
                </tr>
                <?php 
            }
            ?>
        </tbody>
    </table>
</section>
</div>
<?php include_once('rodape.php') ?>
</body>
</html>