<?php 
ob_start();

if ($_POST['Entrar'])
{

$Usuario = $_POST["Usuario"];
$Senha = $_POST["Senha"];

require ("conexao.php");

$query = "SELECT * FROM cadastro_cursos";
$sql = mysql_query($query) or die (mysql_error());

if (!mysql_num_rows($sql))
{
die("CADASTRO NÃO ENCONTRADO!");
}

$dadoinvalido = 0;

while($linha=mysql_fetch_array($sql))
{
$log = $linha["Usuario"];
$sen = $linha["Senha"];

	if ($log == $_POST['Usuario'] && $sen == $_POST['Senha'])
	{
	
	$validacao = "1";
	$log = $_POST['Usuario']; 
	$usuario = $linha["Usuario"];
	$CPF = $linha["CPF"];
		
	session_start();
	$_SESSION['log'] = $Usuario;
	$_SESSION['validacao'] = $validacao;
	$_SESSION['usuario'] = $usuario;
	$_SESSION['CPF'] = $CPF;

	
	header("Location: area_aluno.php");
	}
	else
	{
		$dadoinvalido = 1;
	}
}	
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:Acessar Área do Aluno :</title>
<link rel="stylesheet"  type="text/css" href="style.css" />
</head>
<?php
include("topo.php");
?>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="966" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <?php

if($dadoinvalido==1){

?>
<h1>ATENÇÃO</h1>
<div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="3%"><img src="images/atencao.gif" width="18" height="17" /></td>
      <td width="97%">O Acesso não foi efetuado</td>
    </tr>
  </table>
</div>
<ul>
  <li>Verifique se  informou os dados corretos e tente fazer Login novamente<br />
    <br />
  </li>
  <li>Certifique-se de ser cadastrado em nosso site. Caso não seja, <a href="tcadastro.html" class="a">cadastre-se</a>
    agora  </li>
</ul>
<?php
}
?>
    </td>
  </tr>
</table>

</body>
</html>
