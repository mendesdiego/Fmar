<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="img/favicon.png" />
  <meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=3.0,initial-scale=1.0" />
  <style>
    #box950 {

    }
  </style>
  <meta charset="UTF-8">

  <script>
    (function() {
      var cx = '016639109585083983000:hvgdr6jddre';
      var gcse = document.createElement('script');
      gcse.type = 'text/javascript';
      gcse.async = true;
      gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
      '//www.google.com/cse/cse.js?cx=' + cx;
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(gcse, s);
    })();
  </script>

  <title>FAMART - Faculdade Martins</title>
</head>
<body>
  <div id="containner"class="containner100">
   <!-- ###################################################### -->
   <?php include("topo.html") ?>
   <!-- ###################################################### -->
   <div id="banner"class="containner100">
    <?php include("banner.html") ?>
  </div>
  <!-- ###################################################### -->
  <div id="conteudo" >
    <div id="box950"class="box950 centraliza  "  >
      <div id="dentro-conteudo" class="centraliza cinza">

        <section id="tale">
          <article id="graduacao">
            <div class="textocursos">
              <a id="ContentPlaceHolder_hypTalesGraduacao1" title="Cursos de Graduação" href="#">
                <h1 class="titulocategoria">
                  <span class="cursode">Cursos de</span>
                  <span class="nometitulocategoria">Graduação</span>
                </h1>
                <div class="textocategoria">
                  1 curso
                </div>
<!--                     <div class="setabaixo">
                        <img src="./Universidade do Oeste Paulista - Unoeste - Cursos de Graduação, Pós-Graduação, Educação a Distância, Mestrado, Doutorado, Aperfeiçoamento e Extensão_files/m_seta-maisdetalhes-curso.png" alt="Mais detalhes">
                      </div> -->
                    </a>
                  </div>
                </article>
                <article id="posgraduacao">
                  <div class="textocursos">
                    <a id="ContentPlaceHolder_hypTalesPosGraduacao1" title="Cursos de Pós-Graduação" href="#">
                      <h1 class="titulocategoria">
                        <span class="cursode">Cursos</span>
                        <span class="nometitulocategoria">Livres
                        </span>
                      </h1>
                      <div class="textocategoria">
                        30 cursos
                      </div>
<!--                     <div class="setabaixo">
                        <img src="./Universidade do Oeste Paulista - Unoeste - Cursos de Graduação, Pós-Graduação, Educação a Distância, Mestrado, Doutorado, Aperfeiçoamento e Extensão_files/m_seta-maisdetalhes-curso.png" alt="Mais detalhes">
                      </div> -->
                    </a>
                  </div>
                </article>
                <article id="extensao">
                  <div class="textocursos">
                    <a id="ContentPlaceHolder_hypTalesExntensao1" title="Cursos de Aperfeiçoamento e Extensão" href="#">
                      <h1 class="titulocategoria">
                        <span class="cursode">Unidade</span>
                        <span class="nometitulocategoria">Itaúna
                        </span>
                      </h1>
                      <div class="textocategoria">
                       Rua Osório Santos, 207 - Nogueira Machado, Itaúna - MG, 35680-229
                       Telefone:(37) 3241-4212
                     </div>
<!--                     <div class="setabaixo">
                        <img src="./Universidade do Oeste Paulista - Unoeste - Cursos de Graduação, Pós-Graduação, Educação a Distância, Mestrado, Doutorado, Aperfeiçoamento e Extensão_files/m_seta-maisdetalhes-curso.png" alt="Mais detalhes">
                      </div> -->
                    </a>
                  </div>
                </article>
                <article id="educacaodistancia" class="last_article">
                  <div class="textocursos" style="padding-top: 70px;">
                    <a id="ContentPlaceHolder_hypTalesEducacaoDistancia1" title="Cursos de Educação a Distância" href="#">
                      <h1 class="titulocategoria">
                      <span class="cursode">Vestibular 2015 </span>
                        <span class="nometitulocategoria">Informações                           
                        </span>
                      </h1>
                      <div class="textocategoria">
                        0800 037 4212
                      </div>
<!--                     <div class="setabaixo">
                        <img src="./Universidade do Oeste Paulista - Unoeste - Cursos de Graduação, Pós-Graduação, Educação a Distância, Mestrado, Doutorado, Aperfeiçoamento e Extensão_files/m_seta-maisdetalhes-curso.png" alt="Mais detalhes">
                      </div> -->
                    </a>
                  </div>
                </article>
                <div class="clear">
                </div>
              </section>







              <div class="bloco">
                <div id="encontreCurso">
                  <h1>Pesquise no Site</h1>
                  <gcse:search></gcse:search>
                </div>
                <div id="pesquisa">
                  <h1>Calendario Acadêmico</h1>

                </div>
              </div>
              <!-- ############################# -->
              <div id="noticias" class="bloco">
                <h1>Notícias</h1> 
                <hr>       



                <?php 
                require 'conexao.php';
                $sql="SELECT * FROM noticias";
                $query=mysql_query($sql,$con);
                while ($linha=mysql_fetch_array($query)) 
                {
                  $caminho= $linha['ImagemGrande'];
                  ?>


                  <div class="bloconoticia">
                    <div id="imagemNoticia">
                      <img src="images/noticias/<?php echo "$caminho" ;?>"> 

                    </div>
                    <p id="tituloNoticia"><?php echo $linha['TituloNoticia']; ?></p>
                    <div id="leiamais"><a href="/noticia.php?id=<?php echo $linha['IdNoticia'] ?>  "> Leia Mais</a></div>
                  </div>



                  <?php 
                }
                ?>




              </div>













            </div>
          </div>
          <?php include ('rodape.php') ?>
        </div>
        <!-- ###################################################### -->
      </body>
      </html>