<!DOCTYPE html>
<html lang="en">
<head>
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
                #texto{
                    width: 90%;
                    text-align: justify;
                    margin: 0 auto;
                }
                #form1 > fieldset > p{
                    margin: 10px;
                }
                
                #info{
                    width: 100%;
                }
                
                </style>
                <h3 id="texto"class="centraliza-texto">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. 
                    Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. 
                    Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris. Maecenas placerat, nisl at consequat rhoncus, sem nunc 
                    gravida justo, quis eleifend arcu velit quis lacus. Morbi magna magna, tincidunt a, mattis non, imperdiet vitae, tellus. Sed odio est, auctor ac, 
                    sollicitudin in, consequat vitae, orci. Fusce id felis. Vivamus sollicitudin metus eget eros.Pellentesque habitant morbi tristique senectus et netus et 
                    malesuada fames ac turpis egestas. In posuere felis nec tortor. Pellentesque faucibus. Ut accumsan ultricies elit. Maecenas at justo id velit placerat 
                    molestie. Donec dictum lectus non odio. Cras a ante vitae enim iaculis aliquam. Mauris nunc quam, venenatis nec, euismod sit amet, egestas placerat, est.
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras id elit. Integer quis urna. Ut ante enim, dapibus malesuada,
                    fringilla eu, condimentum quis, tellus. Aenean porttitor eros vel dolor. Donec convallis pede venenatis nibh. Duis quam. Nam eget lacus. Aliquam erat volutpat.
                    Quisque dignissim congue leo.</h3><br>
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