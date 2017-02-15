<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>: Detalhes do Curso :</title>

<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<?php

include("topo.php");

?>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<fieldset>

<table width="966" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td>

    <h3>DETALHES DO CURSO</h3>

<?php

$Curso = $_GET['Curso'];



/*if (!$Curso)

{

    die("Nada!");

}*/



require ("conexao.php");



$query = "SELECT * FROM cursos_individuais WHERE NomeCurso = '$Curso'";

$sql = mysql_query($query, $con) or die(mysql_error());



if (!mysql_num_rows($sql))

{

    die("O Curso não foi Localizado!");

}



while($linha=mysql_fetch_array($sql))

{

?>

<fieldset>

<table width="100%" border="0">

  <tr>

    <td width="21%" valign="top"><img src="images/cursos/<?php echo $linha["NomeImagem"]; ?>" class="img"  /> </td>

    <td colspan="2" valign="top"><font color="#990000" size="4"><?php echo $linha["NomeCurso"]; ?></font><br />

      <font size="2"><?php echo $linha["Descricao"]; ?> <br />

      </font><br /></td>

  </tr>

  

  <tr>

    <td width="21%" valign="top"><img src="images/cursos/conteudoprogramatico.jpg" width="195" height="37" /></td>

    <td width="36%" rowspan="3" valign="top"><strong><font size="2">Carga Horária:</font></strong> <font size="2"><?php echo $linha["CargaHoraria"]; ?><br />

        <strong>Duração:</strong> <?php echo $linha["Duracao"]; ?><br />

        <strong>Início:</strong> <?php echo $linha["Inicio"]; ?></font></td>

    <td width="43%" rowspan="3"><div align="right"><a href="cadastro.php"><img src="images/cursos/ver_cursos.jpg" width="347" height="88" border="0" /></a></div></td>

  </tr>

  <tr>

    <td width="21%" valign="top"><img src="images/cursos/opiniaocurso.jpg" width="195" height="37" /></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

  </tr>

</table>

<p>



<?php 

$pagina = $linha['NomeGrade'];

include("$pagina"); 

}

?>

</fieldset>

    </td>

  </tr>

</table>



</body>

</html>

