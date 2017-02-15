<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>: Escola do Brasil VIP :</title>

<link href="styleindex.css" rel="stylesheet" type="text/css" />



<script type="text/javascript">  

function limpar(campo){   

   if (campo.value == campo.defaultValue){   

        campo.value = "";   

}   

}   

  

function escrever(campo){   

   if (campo.value == ""){   

        campo.value = campo.defaultValue;   

    }   

}   

</script>  



<script>

function converteUpper(campo) {

    campo.value = campo.value.toUpperCase();

}

</script>



<script language="JavaScript">

function abrir(URL) {



  var width = 720;

  var height = 800;



  var left = 245;

  var top = 87;



  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');



}

</script>

</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="100%" border="0" cellpadding="0" cellspacing="0" background="images/fundo_topo.jpg">

  <tr>

    <td><table width="966" border="0" align="center" cellpadding="0" cellspacing="0">

      <tr>

        <td width="719" height="157"><img src="images/topo1.jpg" width="719" height="157" /></td>

        <td width="247" valign="bottom" background="images/topo2.jpg"><form id="form1" name="form1" method="post" action="login.php">

            <table width="63%" height="108" border="0" align="center" cellpadding="0" cellspacing="0">

              <tr>

                <td height="15" colspan="2"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><a href="cursos.php">QUERO ME CADASTRAR</a></font></div></td>

              </tr>

              <tr>

                <td height="15" colspan="2"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><a href="recuperar-senha.php" class="apreto">ESQUECI MINHA SENHA</a></font></div></td>

              </tr>

              <tr>

                <td height="28" colspan="2"><label>

                    <div align="center">

                      <input name="Usuario" type="text" onKeyUp='converteUpper(this);' class="field" id="Usuario" onfocus="limpar(this);" onblur="escrever(this);" value="Usuario" size="26" />

                    </div>

                  </label></td>

              </tr>

              <tr>

                <td height="21" colspan="2" valign="top"><div align="center">

                    <input name="Senha" type="password" class="field" onKeyUp='converteUpper(this);' id="Senha" onfocus="limpar(this);" onblur="escrever(this);" value="Senha" size="26" />

                </div></td>

              </tr>

              <tr>

                <td width="37%" height="29"><div align="right"></div></td>

                <td width="63%"><div align="right">

                    <input type="submit" name="Entrar" id="Entrar" value="Acessar Curso" />

                  </div>

                    <div align="center"></div>

                  <div align="center"></div></td>

              </tr>

            </table>

        </form></td>

      </tr>

    </table>

      <table width="966" height="62" border="0" align="center" cellpadding="0" cellspacing="0" background="images/links.jpg">

        <tr>

          <td width="75" height="62"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="../index.php" class="apreto">HOME</a></font></strong></div></td>

          <td width="110"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="../quem_somos.php" class="apreto">QUEM SOMOS</a></font></strong></div></td>

          <td width="199"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="../regulamento.php" class="apreto">REGULAMENTO DO CURSO</a></font></strong></div></td>

          <td width="82"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="http://escoladobrasilvip.com.br/cursos_individuais/cursos_individuais.php" class="apreto">CURSOS</a></font></strong></div></td>

          <td width="143"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="../faleconosco.php" class="apreto">FALE CONOSCO</a></font></strong></div></td>

          <td width="143"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="../vantagens_ EAD.php" class="apreto">VANTAGENS DA EAD</a></font></strong></div></td>

          <td width="214"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="javascript:abrir('faq.html');" class="apreto">PERGUNTAS FREQUENTES</a></font></strong></div></td>

        </tr>

      </table></td>

  </tr>

</table>

</body>

</html>

