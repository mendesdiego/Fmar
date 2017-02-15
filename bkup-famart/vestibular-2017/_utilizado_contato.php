
      <!-- =============  Scripts Js ================= -->
  			<script type="text/javascript"	src="js/jquery-2.1.4.js"></script>
  			<script type="text/javascript"	src="js/jquery.nicescroll.min.js"></script>
  			<script type="text/javascript"	src="js/jquery.maskedinput.js" ></script>
  			<script type="text/javascript" 	src="js/jquery.mask.js"></script>
  			<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
  			<script type="text/javascript" src="js/mascara.js"></script>
  			<script type="text/javascript" src="js/cep.js"></script>
  			<!-- ====================================  -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61163900-14', 'auto');
  ga('send', 'pageview');

</script>


  <div>
      <form name="formulario-inscricao" id="formulario-inscricao"  METHOD=POST action="http://www.renatomendes.com/grupo_andrade_martins/famart_mail_send.php" class="formulario_form" >
        
          <!--<h1> <span class="glyphicon glyphicon-paste"></span> Formul&aacute;rio de inscri&ccedil;&atilde;o</h1><br/>-->

        <label>Selecione seu curso</label>
          <select  class="campos form-control" id="curso" name="curso" required="required">
            <option></option>
            <!--<option  value="Administração - Bacharelado">Administração - Bacharelado</option>
            <option  value="Letras (Português e Inglês) - licenciatura">Letras (Português e Inglês) - licenciatura</option>-->
            <option  value="Pedagogia - Licenciatura">Pedagogia - Licenciatura</option>
           <!-- <option  value="Gestão Hospitalar - Tecnólogo">Gestão Hospitalar - Tecnólogo</option>
            <option  value="Gestão de Recursos Humanos - Tecnólogo">Gestão de Recursos Humanos - Tecnólogo</option>
            <option  value="Gestão Financeira - Tecnólogo">Gestão Financeira - Tecnólogo</option>
            <option  value="Comércio Exterior - Tecnólogo">Comércio Exterior - Tecnólogo</option>
            <option  value="Logística - Tecnólogo">Logística - Tecnólogo</option>-->
        </select>
        
        <input class="campos form-control" type="text" name="nome" id="nome" required="required" placeholder="Nome:*"/>
        <input class="campos form-control" type="email" name="email" id="email" required="required" placeholder="E-mail que voc&ecirc; l&ecirc;:*"/>
        <input class="campos form-control" type="email" name="email_alternativo" id="email_alternativo" placeholder="E-mail Alternativo:"/>

        <input class="campos form-control" type="tel" name="telfixo" id="telfixo" required="required" placeholder="Telefone:*"/>

        <input class="campos form-control" type="text" name="cpf" id="cpf" required="required" placeholder="CPF:*"/>
       <input class="campos form-control" type="text" name="cep" id="cep" required="required" placeholder="CEP:*"//>
       <input class="campos form-control" type="text" name="bairro" id="bairro" required="required" placeholder="Bairro:*"//>
       <input class="campos form-control" type="text" name="endereco" id="endereco" required="required" placeholder="Endere&ccedil;o:*"/>
       <input class="campos form-control" type="text" name="numero" id="numero" required="required" placeholder="N&uacute;mero:*"/>
       <input class="campos form-control" type="text" name="complemento" id="complemento" placeholder="Complemento:">
       <input class="campos form-control" type="text" name="cidade" id="cidade" required="required" placeholder="Cidade:*"/>
       <input class="campos form-control" type="text" name="estado" id="estado" required="required" placeholder="Estado:*"/>
       <br/>
      <button>enviar</button>
      <button type="reset" value="Reset">Limpar</button>
   </form>

    </div>


<!-- // form/// -->
