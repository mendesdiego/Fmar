<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Relação de Alunos BT</title>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
 
     <tr>
       <td width="9%" bgcolor="#990000"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">CPF</font></strong></td>
       <td width="15%" bgcolor="#990000"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome Completo</font></strong></td>
       <td width="11%" bgcolor="#990000"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Curso</font></strong></td>
       <td width="13%" bgcolor="#990000"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Usuario</font></strong></td>
       <td width="12%" bgcolor="#990000"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Senha</font></strong></td>
       <td width="14%" bgcolor="#990000"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Email</font></strong></td>
       <td width="12%" bgcolor="#990000"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Cidade do Aluno</font></strong></td>
       <td width="6%" bgcolor="#990000"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Estado</font></strong></td>
       <td width="8%" bgcolor="#990000"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Data Cadastro</font></strong></td>
  </tr>
       
<?PHP

include ("conexao.php");

$query = "SELECT * FROM cadastro_cursos ORDER BY IdCadastro DESC";
$sql = mysql_query($query);

$numero=1;
while($linha=mysql_fetch_array($sql))
{
if($numero==1)
{
$cor="<tr bgcolor='BECAB1'>";
$numero=2;
}
else
{
$cor="<tr bgcolor='FFFFFF'>";
$numero=1;
}
?>

<?php echo $cor; ?>    
     <td><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?PHP echo $linha["CPF"]; ?></font></div></td>
     <td><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?PHP echo $linha["NomeCompleto"]; ?></font></div></td>
     <td><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?PHP echo $linha["Curso"]; ?></font></div></td>
     <td><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?PHP echo $linha["Usuario"]; ?></font></div></td>
     <td><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?PHP echo $linha["Senha"]; ?></font></div></td>
     <td><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?PHP echo $linha["Email"]; ?></font></div></td>
     <td><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?PHP echo $linha["Cidade"]; ?></font></div></td>
         <td><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?PHP echo $linha["Estado"]; ?></font></div></td>
    <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?PHP echo $linha["DataDoCadastro"]; ?></font></div></td>
</tr>
  
<?php
}
?>
</table>
</body>
</html>
