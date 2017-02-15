<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>: Inserir Dados :</title>
<link rel="stylesheet"  type="text/css" href="style.css" />
</head>

<body>
<?php
if($_POST['Enviar']!="")
{
require ("conexao.php");

$IdImagem = $_POST["IdImagem"];
$NomeImagem = $_POST["NomeImagem"];
$NomeCurso = $_POST["NomeCurso"];
$Descricao = $_POST["Descricao"];
$CargaHoraria = $_POST["CargaHoraria"];
$Duracao = $_POST["Duracao"];
$Inicio = $_POST["Inicio"];
$ValorCurso = $_POST["ValorCurso"];
$NomeGrade = $_POST["NomeGrade"];


$query = "UPDATE cursos_individuais SET NomeImagem = '$NomeImagem', NomeCurso = '$NomeCurso', Descricao = '$Descricao', CargaHoraria = '$CargaHoraria', Duracao = '$Duracao', Inicio = '$Inicio', ValorCurso = '$ValorCurso', NomeGrade = '$NomeGrade' WHERE IdCurso = $IdCurso";

$sql=mysql_query($query) or die('ERRO!' . mysql_error());

}
?>
<h1> TELA PARA INSERIR DADOS NO DB ESCOLA DO BRASIL VIP</h1>
<form id="form1" name="Verifica" method="post" action="inserirdadosindividuais.php">
  <table width="1000" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="167"><strong>ID do Curso:</strong></td>
      <td width="376"><input name="IdCurso" type="text" class="field" id="IdCurso" size="58" /></td>
      <td width="457"><label>
        <input type="submit" name="Localizar" id="Localizar" value="Localizar" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<?php
if ($_POST['Localizar']!="")
{
require ("conexao.php");

$query = "SELECT * FROM cursos_individuais WHERE IdCurso = $IdCurso";
$sql = mysql_query($query);

$linha=mysql_fetch_array($sql);

if (!$linha['NomeCurso']){
echo "Curso não localizado no Sistema!";
}else
{

?>
<p>&nbsp;</p>
<form action="inserirdadosindividuais.php" method="post" name="form" id="form">
  <table width="1000" border="0" cellpadding="0">
    <tr>
      <td class="label">Nome da Imagem:</td>
      <td><input name="NomeImagem" type="text" class="field" id="NomeImagem" value="<?php echo $linha["NomeImagem"];?>" size="60" /></td>
    </tr>
    <tr>
      <td width="150" class="label"><label id="TelFixo" for="TelFixo">Nome do Curso: </label></td>
      <td><input name="NomeCurso" type="text" class="field" id="NomeCurso" value="<?php echo $linha["NomeCurso"];?>" size="60" /></td>
    </tr>
  </table>
  <table width="1000" border="0" cellpadding="0">
    <tr>
      <td width="150" class="label"><label id="TelCel" for="TelCel">Descrição:</label></td>
      <td><textarea name="Descricao" cols="55" rows="10" class="field" id="Descricao"><?php echo $linha["Descricao"];?></textarea></td>
    </tr>
  </table>
  <table width="1000" border="0" cellpadding="0">
    <tr>
      <td width="150" class="label"><label id="Email" for="CargaHoraria">Carga Horária:</label></td>
      <td><input name="CargaHoraria" type="text" class="field" id="CargaHoraria" value="<?php echo $linha["CargaHoraria"];?>" size="40" /></td>
    </tr>
  </table>
  <table width="1000" border="0" cellpadding="0">
    <tr>
      <td width="150" class="label"><label id="RG" for="Duracao">Duração:</label></td>
      <td><input name="Duracao" type="text" class="field" id="Duracao" value="<?php echo $linha["Duracao"];?>" size="40" /></td>
    </tr>
  </table>
  <table width="1000" border="0" cellpadding="0">
    <tr>
      <td width="150" class="label"><label id="OrgaoEmissor" for="Inicio">Inicio:</label></td>
      <td><input name="Inicio" type="text" class="field" id="Inicio" value="<?php echo $linha["Inicio"];?>" size="40" /></td>
    </tr>
  </table>
  <table width="1000" border="0" cellpadding="0">
    <tr>
      <td width="150" class="label"><label id="Sexo" for="ValorCurso">Valor do Curso:</label></td>
      <td><input name="ValorCurso" type="text" class="field" id="ValorCurso" value="<?php echo $linha["ValorCurso"];?>" size="40" /></td>
    </tr>
  </table>
  <table width="1000" border="0" cellpadding="0">
    <tr>
      <td width="150" class="label"><label id="CEP" for="NomeGrade">Grade:</label></td>
      <td><input name="NomeGrade" type="text" class="field" id="NomeGrade" value="<?php echo $linha["NomeGrade"];?>" size="40" /></td>
    </tr>
  </table><input type="hidden" name="IdCurso" value="<?php echo $linha["IdCurso"];?>" />
  </span>
  </div>
<table width="1000" border="0" cellpadding="0">
    <tr>
      <td width="645" class="label"></td>
      <td width="349"><label>
        <input type="submit" name="Enviar" id="Enviar" value="Enviar Dados" />
      </label></td>
      
    </tr>
  </table>
  <div align="center"></div>
</form>
<?php
}
}
?>
</body>
</html>
