<meta charset="UTF-8">
<link rel="shortcut icon" href="img/favicon.png " />
<script src="js/min/jquery-v1.10.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="css/flickerplate.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css.map"> 
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="css/paginas.css" />

<html>
<head>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-61163900-14', 'auto');
    ga('send', 'pageview');

  </script> 


  <title>Notícia</title>
</head>
<body>
  <?php include "topo.html"; ?>
  <style>

   #t950{
    width: 72%;
    margin: 50px auto;
  }

  #noticiaimg{
    float: left;
    margin: 35px;
  }

  #formcontato > table > tbody > tr > td > h1{
    font-size:20px;
    margin:10px auto;
  }
</style>

<div id="t950">
 <div class="noticias950" >
  <div id="formcontato" >
   <?php
   $Id = (int) $_GET['id'];
   if (!$Id)
   {
     die("Nenhuma Notícia foi clicada!");
   }

   require ("conexao.php");

   $query = "SELECT * FROM noticias WHERE IdNoticia = $Id";
   $sql = mysql_query($query, $con) or die(mysql_error());
   if (!mysql_num_rows($sql))
   {
     die("Nenhuma Notícia foi localizada!");
   }
   while($linha=mysql_fetch_array($sql))
   {
     ?>

     <table class="tabela">
       <tr>
         <td>
           <h1 class="titulot"><?php echo $linha["TituloNoticia"]; ?></h1>
           <div class="paragrafo"><img src="images/noticias/<?php echo $linha["ImagemGrande"]; ?>" id="noticiaimg" /><?php echo $linha["Descricao"]; ?></div>
         </td>
       </tr>
     </table>
     <?php
   }
   ?>
 </div>
</div>
</div>
<?php include "rodape.php" ?>			
</body>
</html>