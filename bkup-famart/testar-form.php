<!DOCTYPE html>
<html lang = "en">
<head>
    <link rel="shortcut icon" href="img/favicon.png " />
    <link rel = "stylesheet" href = "css/style.css">
    <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
    <!-- <script src="js/jquery.js" type="text/javascript"></script>-->

    <script type = "text/javascript" src = "js/cep.js"></script>


    <title>Matricule-se</title>

    <link href='http://fonts.googleapis.com/css?family=OpenSans:300,400,700' rel='stylesheet' type='text/css'>
    <link href="css/style-form.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <?php include_once 'topo.html' ?>

    <script src = "js/highlight.min.js"></script>
    <script type = "text/javascript" src = "http://code.jquery.com/jquery-latest.min.js"></script>
    <script type = "text/javascript" src = "js/bootstrap.min.js"></script>
    <script type = "text/javascript" src = "js/jquery.mask.min.js"></script>

    <script type = "text/javascript">
        $(function () {
            $('.ano').mask('0000');
            $('.rg').mask('AA-99.999.999');
            $('.date').mask('00/00/0000');
            $('.time').mask('00:00:00');
            $('.date_time').mask('00/00/0000 00:00:00');
            $('.cep').mask('00000-000');
            $('.phone').mask('0000-0000');
            $('.phone_with_ddd').mask('(00) 0000-00000');
            $('.phone_us').mask('(000) 000-0000');
            $('.mixed').mask('AAA 000-S0S');
            $('.ip_address').mask('099.099.099.099');
            $('.percent').mask('##0,00%', {reverse: true});
            $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
            $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
            $('.fallback').mask("00r00r0000", {
                translation: {
                    'r': {
                        pattern: /[\/]/,
                        fallback: '/'
                    },
                    placeholder: "__/__/____"
                }
            });

            $('.cep_with_callback').mask('00000-000', {
                onComplete: function (cep) {
                    console.log('Mask is done!:', cep);
                },
                onKeyPress: function (cep, event, currentField, options) {
                    console.log('An key was pressed!:', cep, ' event: ', event, 'currentField: ', currentField.attr('class'), ' options: ', options);
                },
                onInvalid: function (val, e, field, invalid, options) {
                    var error = invalid[0];
                    console.log("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
                }
            });

            $('.crazy_cep').mask('00000-000', {
                onKeyPress: function (cep, e, field, options) {
                    var masks = ['00000-000', '0-00-00-00'];
                    mask = (cep.length > 7) ? masks[1] : masks[0];
                    $('.crazy_cep').mask(mask, options);
                }
            });

            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.money').mask('#.##0,00', {reverse: true});

            var SPMaskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function (val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };

            $('.sp_celphones').mask(SPMaskBehavior, spOptions);

            $(".bt-mask-it").click(function () {
                $(".mask-on-div").mask("000.000.000-00");
                $(".mask-on-div").fadeOut(500).fadeIn(500)
            })

            $('pre').each(function (i, e) {
                hljs.highlightBlock(e)
            });
        });
</script>

<div id = "containner" class = "box800 centraliza">
  <section>

   <div class="formulario">  

    <form action="" method="post" id="validate">                  

        <label>* Nome</label>
        <input name="nome" type="text" class="g">

        <label>* E-mail</label>
        <input name="email" type="text" class="g">

        <label>Telefone</label>
        <input name="" type="text" class="p" id="telefone">

        <label>Celular</label>
        <input name="" type="text" class="p" id="celular">

        <label>Data de Nascimento</label>
        <input name="" type="text" class="p" id="data">

        <label>Data</label>
        <input name="" type="text" class="p" id="datepicker1">

        <label>Sexo</label>
        <select name="" class="m">
          <option>Selecione</option>
          <option>Masculino</option>
          <option>Feminino</option>
      </select>

      <label>CEP</label>
      <input name="" type="text" class="p" id="cep">

      <label>Endereço</label>
      <input name="" type="text" class="g">

      <label>Número</label>
      <input name="" type="text" class="pp" >

      <label>Complemento</label>
      <input name="" type="text" class="m">

      <label>Bairro</label>
      <input name="" type="text" class="p">

      <label>Cidade</label>
      <input name="" type="text" class="p">

      <label>Estado</label>
      <select name="" class="p">
        <option>Selecione</option>
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espirito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MT">Mato Grosso</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
    </select>


    <label>Pais</label>
    <select name="" class="p">
        <option value="África do Sul">África do Sul</option>
        <option value="Albânia">Albânia</option>
        <option value="Alemanha">Alemanha</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antigua">Antigua</option>
        <option value="Arábia Saudita">Arábia Saudita</option>
        <option value="Argentina">Argentina</option>
        <option value="Armênia">Armênia</option>
        <option value="Aruba">Aruba</option>
        <option value="Austrália">Austrália</option>
        <option value="Áustria">Áustria</option>
        <option value="Azerbaijão">Azerbaijão</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bahrein">Bahrein</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Bélgica">Bélgica</option>
        <option value="Benin">Benin</option>
        <option value="Bermudas">Bermudas</option>
        <option value="Botsuana">Botsuana</option>
        <option value="Brasil" selected>Brasil</option>
        <option value="Brunei">Brunei</option>
        <option value="Bulgária">Bulgária</option>
        <option value="Burkina Fasso">Burkina Fasso</option>
        <option value="botão">botão</option>
        <option value="Cabo Verde">Cabo Verde</option>
        <option value="Camarões">Camarões</option>
        <option value="Camboja">Camboja</option>
        <option value="Canadá">Canadá</option>
        <option value="Cazaquistão">Cazaquistão</option>
        <option value="Chade">Chade</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Cidade do Vaticano">Cidade do Vaticano</option>
        <option value="Colômbia">Colômbia</option>
        <option value="Congo">Congo</option>
        <option value="Coréia do Sul">Coréia do Sul</option>
        <option value="Costa do Marfim">Costa do Marfim</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Croácia">Croácia</option>
        <option value="Dinamarca">Dinamarca</option>
        <option value="Djibuti">Djibuti</option>
        <option value="Dominica">Dominica</option>
        <option value="EUA">EUA</option>
        <option value="Egito">Egito</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Emirados Árabes">Emirados Árabes</option>
        <option value="Equador">Equador</option>
        <option value="Eritréia">Eritréia</option>
        <option value="Escócia">Escócia</option>
        <option value="Eslováquia">Eslováquia</option>
        <option value="Eslovênia">Eslovênia</option>
        <option value="Espanha">Espanha</option>
        <option value="Estônia">Estônia</option>
        <option value="Etiópia">Etiópia</option>
        <option value="Fiji">Fiji</option>
        <option value="Filipinas">Filipinas</option>
        <option value="Finlândia">Finlândia</option>
        <option value="França">França</option>
        <option value="Gabão">Gabão</option>
        <option value="Gâmbia">Gâmbia</option>
        <option value="Gana">Gana</option>
        <option value="Geórgia">Geórgia</option>
        <option value="Gibraltar">Gibraltar</option>
        <option value="Granada">Granada</option>
        <option value="Grécia">Grécia</option>
        <option value="Guadalupe">Guadalupe</option>
        <option value="Guam">Guam</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guiana">Guiana</option>
        <option value="Guiana Francesa">Guiana Francesa</option>
        <option value="Guiné-bissau">Guiné-bissau</option>
        <option value="Haiti">Haiti</option>
        <option value="Holanda">Holanda</option>
        <option value="Honduras">Honduras</option>
        <option value="Hong Kong">Hong Kong</option>
        <option value="Hungria">Hungria</option>
        <option value="Iêmen">Iêmen</option>
        <option value="Ilhas Cayman">Ilhas Cayman</option>
        <option value="Ilhas Cook">Ilhas Cook</option>
        <option value="Ilhas Curaçao">Ilhas Curaçao</option>
        <option value="Ilhas Marshall">Ilhas Marshall</option>
        <option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
        <option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
        <option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
        <option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
        <option value="Índia">Índia</option>
        <option value="Indonésia">Indonésia</option>
        <option value="Inglaterra">Inglaterra</option>
        <option value="Irlanda">Irlanda</option>
        <option value="Islândia">Islândia</option>
        <option value="Israel">Israel</option>
        <option value="Itália">Itália</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japão">Japão</option>
        <option value="Jordânia">Jordânia</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Latvia">Latvia</option>
        <option value="Líbano">Líbano</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lituânia">Lituânia</option>
        <option value="Luxemburgo">Luxemburgo</option>
        <option value="Macau">Macau</option>
        <option value="Macedônia">Macedônia</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Malásia">Malásia</option>
        <option value="Malaui">Malaui</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Marrocos">Marrocos</option>
        <option value="Martinica">Martinica</option>
        <option value="Mauritânia">Mauritânia</option>
        <option value="Mauritius">Mauritius</option>
        <option value="México">México</option>
        <option value="Moldova">Moldova</option>
        <option value="Mônaco">Mônaco</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Nepal">Nepal</option>
        <option value="Nicarágua">Nicarágua</option>
        <option value="Niger">Niger</option>
        <option value="Nigéria">Nigéria</option>
        <option value="Noruega">Noruega</option>
        <option value="Nova Caledônia">Nova Caledônia</option>
        <option value="Nova Zelândia">Nova Zelândia</option>
        <option value="Omã">Omã</option>
        <option value="Palau">Palau</option>
        <option value="Panamá">Panamá</option>
        <option value="Papua-nova Guiné">Papua-nova Guiné</option>
        <option value="Paquistão">Paquistão</option>
        <option value="Peru">Peru</option>
        <option value="Polinésia Francesa">Polinésia Francesa</option>
        <option value="Polônia">Polônia</option>
        <option value="Porto Rico">Porto Rico</option>
        <option value="Portugal">Portugal</option>
        <option value="Qatar">Qatar</option>
        <option value="Quênia">Quênia</option>
        <option value="Rep. Dominicana">Rep. Dominicana</option>
        <option value="Rep. Tcheca">Rep. Tcheca</option>
        <option value="Reunion">Reunion</option>
        <option value="Romênia">Romênia</option>
        <option value="Ruanda">Ruanda</option>
        <option value="Rússia">Rússia</option>
        <option value="Saipan">Saipan</option>
        <option value="Samoa Americana">Samoa Americana</option>
        <option value="Senegal">Senegal</option>
        <option value="Serra Leone">Serra Leone</option>
        <option value="Seychelles">Seychelles</option>
        <option value="Singapura">Singapura</option>
        <option value="Síria">Síria</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
        <option value="St. Lúcia">St. Lúcia</option>
        <option value="St. Vincent">St. Vincent</option>
        <option value="Sudão">Sudão</option>
        <option value="Suécia">Suécia</option>
        <option value="Suiça">Suiça</option>
        <option value="Suriname">Suriname</option>
        <option value="Tailândia">Tailândia</option>
        <option value="Taiwan">Taiwan</option>
        <option value="Tanzânia">Tanzânia</option>
        <option value="Togo">Togo</option>
        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
        <option value="Tunísia">Tunísia</option>
        <option value="Turquia">Turquia</option>
        <option value="Ucrânia">Ucrânia</option>
        <option value="Uganda">Uganda</option>
        <option value="Uruguai">Uruguai</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Vietnã">Vietnã</option>
        <option value="Zaire">Zaire</option>
        <option value="Zâmbia">Zâmbia</option>
        <option value="Zimbábue">Zimbábue</option>
    </select>

    <label>Assunto</label>
    <input name="" type="text" class="g">

    <label>Deixe a sua Mensagem</label>
    <textarea name="" cols="10" rows="5" class="g"></textarea>

    <ul>
        <p>Selecione uma opção</p>
        <li><input type="radio" name="grupo" value="">Opcao 1</li>
        <li><input type="radio" name="grupo" value="">Opcao 2</li>
        <li><input type="radio" name="grupo" value="">Opcao 3</li>
    </ul>

    <ul>
        <p>Selecione uma opcao</p>
        <li><input type="checkbox">Item 1</li>
        <li><input type="checkbox">Item 2</li>
        <li><input type="checkbox">Item 3</li>
    </ul>


    <input type="submit" value="Enviar">

</form>
</div><!--/formulario-->

</section>

<script type="text/javascript" src="js-form/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js-form/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="js-form/jquery.validate.min.js"></script>
<script type="text/javascript" src="js-form/jquery.zebra-datepicker.js"></script>

</div>






<?php
}
?>




<?php include 'rodape.php'; ?>
</body>
</html> 