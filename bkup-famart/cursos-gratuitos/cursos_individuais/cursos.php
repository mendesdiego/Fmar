<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>: Lista de Cursos :</title>
<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="jquery.fancybox-1.3.2.js"></script>

</head>
<?php
include("topo.php");
?>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="966" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <H1>CURSOS ON-LINE  ESCOLA DO BRASIL VIP</H1>
    <div align="justify">
  <div>Trata-se  dos cursos mais pedidos pelo mercado na atualidade.</div>
  <br />
  <div><strong><u>Características:</u></strong></div>
  <ul>
    <li>Curso completo com suporte de tutores</li>
    <li>Taxa única para realizá-lo no valor de R$ 69,90 <br />
    </li>
  </ul>
  <div>Este  valor inclui:</div>
  <ul>
    <ul>
      <li>Aulas </li>
      <li>Prova</li>
      <li>Certificado </li>
      <li>Carteira de Estudante - Consulte regulamento de  utilização e desconto conferidos para este tipo de carteira junto às leis do  seu estado.</li>
      <li>Carteira profissional </li>
      <li>Suporte on-line - Tutores on-line em horários e  dias comerciais e fora deste período, via e-mail.</li>
      </ul>
  </ul>
</div>
    <div><strong>Lista de cursos</strong></div>
<p>
  <?php
require ("conexao.php");

$query = "SELECT * FROM cursos ORDER BY IdCurso";
$sql = mysql_query($query);

?>

<table width="100%" border="0">
<?php
$contador = 0;
$inicialinha = 1;
$terminalinha = 5;
while($linha=mysql_fetch_array($sql))
{
$contador += 1;
if ($terminalinha == $contador){
	$terminalinha +=4;
	echo "</tr>";
}
if ($inicialinha == $contador){
	$inicialinha +=4;

	echo "<tr>";
}
?>   
    <td width="18%"><a href="detalhes.php?Curso=<?php echo $linha['NomeCurso']; ?>"><img src="images/cursos/<?php echo $linha["NomeImagem"]; ?>" class="img" /></a>
  	<p><strong><a href="detalhes.php?Curso=<?php echo $linha['NomeCurso']; ?>" class="a"><?php echo $linha["NomeCurso"]; ?></a></strong></p>
    <p>Inicio <?php echo $linha["Inicio"]; ?><br />
     <?php echo $linha["ValorCurso"]; ?><br />
          <br />
          <a href="detalhes.php?Curso=<?php echo $linha['NomeCurso']; ?>"><img src="images/cursos/bmatricula.jpg" width="190" height="47" border="0" /></a><br />
    </p></td>
    
<?php
}
?>
</table>
    </td>
  </tr>
</table>

</body>
</html>
