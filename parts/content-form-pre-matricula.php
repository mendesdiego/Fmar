<? get_header() ?>

<main class="main-page-curso-form-pre-matricula">
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>


    <div class="container" id="page-<?=basename(get_permalink()); ?>">
      <h1 class="page-title">Pré-matrícula</h1>

      <div class="row">
        <div class="col-sm-8">
          <h4 class="font-montserrat-bold margin-top-zero margin-bottom-30 ">Detalhamento</h4>
          <p>Faça sua pré-inscrição, preenchendo o formulário abaixo! Você garantirá a matrícula no valor promocional (R$120,00). Contudo, este é o preço referente apenas à matrícula. As demais mensalidades serão emitidas no valor real estabelecido pela instituição. O valor do curso poderá ser ajustado de acordo com desconto* por pagamento em dia. *Consulte regulamento no colégio.</p>

        </div>
        <div class="col-sm-4">
          <?php if(has_post_thumbnail()) { ?>
          <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
          <?php } ?>
        </div>
      </div>

      <div class="wrap-content-form-pre-matricula">
        <div class="row">
          <div class="col-sm-6">
            <h5>Por favor, confirme o Curso, Unidade e Turma que deseja estudar!</h5>

            <div class="form-group">
              <label for="exampleInputEmail1">Curso</label>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Polo/Unidade</label>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Valor</label>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
              </select>
            </div>

            <h5>Endereço</h5>


            <div class="row">
              <div class="col-xs-7 col-sm-8">
                <div class="form-group">
                  <label for="exampleInputEmail1">CEP:</label>
                  <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
                </div>
              </div>
              <div class="col-xs-5 col-sm-4">
                <div class="form-group">
                  <label for="exampleInputEmail1"><br/></label>
                  <a href="#" class="btn-consultar-cep">Consultar</a>
                </div>

              </div>
            </div>


            <div class="form-group">
              <label for="exampleInputEmail1">Endereço:</label>
              <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Número:</label>
                  <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <label for="exampleInputEmail1">Bairro:</label>
                  <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cidade:</label>
                  <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <label for="exampleInputEmail1">Estado:</label>
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
              </div>
            </div>


            <h5>Como soube do curso?</h5>

            <div class="form-group">
              <label for="exampleInputEmail1">Escolha uma opção: </label><br class="hidden-md hidden-lg"/>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Internet
              </label>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Indicação
              </label>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Faixa
              </label>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Cartaz
              </label>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Outros
              </label>
            </div>
          </div><!--- end col -->


          <div class="col-sm-6">
            <h5>Identificação</h5>

            <div class="form-group">
              <label for="exampleInputEmail1">CPF: </label>
              <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Identidade (RG): </label>
              <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nome Completo: </label>
              <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Telefone fixo: </label>
              <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Telefone celular: </label>
              <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email: </label>
              <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Data de nascimento: </label>
              <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Sexo: </label><br class="hidden-md hidden-lg"/>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Feminino
              </label>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Masculino
              </label>
            </div>

            <h5>Conclusão</h5>

            <div class="form-group">
              <label for="exampleInputEmail1">Data da matrícula: </label>
              <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
            </div>
            <div class="form-group">
              <input type="checkbox" required> Li e aceito o <a href="#" data-toggle="modal" data-target="#modal-regulamento-curso">regulamento</a> e concordo com todas as informações do curso.
            </div>
            <div class="form-group text-right">
              <input type="submit" class="btn btn-warning" value="ENVIAR"/>
            </div>


          </div> <!--- end col -->
        </div><!--- end row -->

        <div class="row row-meios-de-pagamento">
          <div>
            <img class="img-responsive"  src="<?php bloginfo('template_url') ?>/img/internas/bar-operadores-meio-de-pagamento.jpg" />
          </div>

        </div>

      </div>

    </div>

    <!-- ini: modal regulamento curso -->
    <?php get_template_part( 'parts/content', 'modal-regulamento-curso'); ?>
    <!-- end: modal regulamento curso -->

    <!-- ini: modal pagamento matrícula -->
    <?php get_template_part( 'parts/content', 'modal-pagamento-matricula'); ?>
    <!-- end: modal pagamento matrícula -->

  <?php endwhile; ?>
  <?php endif; ?>
</main>
<? get_footer() ?>
