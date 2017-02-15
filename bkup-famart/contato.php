<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="img/favicon.png " />
  <meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=3.0,initial-scale=1.0" />
  <script src="js/min/jquery-v1.10.2.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/paginas.css">
  <meta charset="UTF-8">
  <title>FAMART - Faculdade Martins</title>
</head>
<body>
  <div id="containner"class="containner100">

   <!-- ###################################################### -->

   <?php include("topo.html") ?>


   <!-- ###################################################### -->
   <div id="conteudo" >

    <div id="box950"class="box950 centraliza  "  >

      <div class="infocontato">
        <style>
          #agadois {
            font-size: 19px;
            width: 90%;
            margin: 0 auto;
            color: orange;
            vertical-align: bottom;
            line-height: 50px;
          }
          #texto {
            font-size: 14px;
            width: 90%;
            text-align: justify;
            margin: 0 auto;
            font-weight: normal;
          }
          #form1 > fieldset > p{
            margin: 10px;
          }

          #info{
            width: 100%;
          }

        </style>
        
        <h2 id="agadois">Ouvidoria</h2><br><br>
        <h3 id="texto"class="centraliza-texto">A Ouvidoria tem como objetivo disponibilizar mais um serviço para
            estreitar a relação da Faculdade Martinscom seus discentes, funcionários, colaboradores e comunidade

            em geral para que possam sugerir, criticar ou elogiar ações da Faculdade.
          Mediante a atuação da Ouvidoria, a FAMART pode buscar cada ve​z m​ais, c​om transpa​rência, fortalecer a qualidade
            dos seus serviços.
          A Ouvidoria da Instituição tem o compromisso de valorizar, sobretudo o respeito ao ser humano.</h3><br>
          <br>
          <br>

        </div>

        <div id="formcontato" >

          <form class="validate" name="form1" id="form1" action="envia.php" method="post">
            <fieldset>
             <p> Nome Completo</p>
             <input type="text" name="fullname" required  minlength="5" min/>


             <p>Assunto</p>
             <input type="text" name="subject" required />
             <br />
             <p>Telefone</p>
             <input type="text" name="phone"  required />

             <p>Email</p>
             <input type="email" name="emailid"  required /> 
             <br>
             <br />
             <br />
             <p>Comentario</p>
             <textarea rows="4"  name="comments" required ></textarea>
             <br />
             <style>span{color:red;}</style>
             <span></span><br>
             <input type="submit" class="button blue submit" name="Enviar" value="Enviar" />
           </fieldset>

         </form>
       </div>
     </div>
     <div id="info" >
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234.19722739020594!2d-44.576653821419924!3d-20.085779804989215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa732c7ac4071bd%3A0x80585bb60dd662bb!2sInstituto+Cotemar!5e0!3m2!1spt-BR!2sbr!4v1413972853471" width="100%" height="450" frameborder="0" style="border:0"></iframe>

     </div>
   </div>
   <?php include ('rodape.php') ?>
 </div>

 <!-- ###################################################### -->

</body>
</html>