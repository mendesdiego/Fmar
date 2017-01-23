jQuery(document).ready(function($) {
	$('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeIn();
	}, function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeOut();
	});
});

jQuery(document).ready(function(){
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $("#toposite").addClass("navbar-fixed-top animated fadeInDown");
			$('#bannersite').addClass("retira-banner");
      //$("#bartop").addClass("bartopscroll navbar-fixed-top bar-top");
			//$('#bannersite').addClass("retira-banner");
    } else {
			  $("#toposite").removeClass("navbar-fixed-top animated fadeInDown");
				$('#bannersite').removeClass("retira-banner");
      //$("#toposite").removeClass("navbar-fixed-top animated fadeInDown");
      //$("#bartop").removeClass("bartopscroll");
			//$('#bannersite').removeClass("retira-banner");
			//$("#bartop").removeClass("navbar-fixed-top");
    }
  });
});

$("#curso-nome").val($("#hidden-nome-do-curso").val());
 $("#curso-modalidade").val($("#hidden-modalidade-curso").val());


jQuery(document).ready(function(){
	jQuery('#endereco-cep').mask('00000-000');
  jQuery('#identificacao-cpf').mask('000.000.000-00', {reverse: true});
  jQuery('#identificacao-telefone-fixo').mask('(00) 0000-0000');
  jQuery('#identificacao-data-de-nascimento').mask('00/00/0000');


  var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  spOptions = {
    onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
  };

  jQuery('#telefone-celular').mask(SPMaskBehavior, spOptions);
})




  $('.btn-consultar-cep').click(function(){
    $.ajax({
      url:'http://cep.republicavirtual.com.br/web_cep.php',
      type:'get',
      dataType:'json',
      crossDomain: true,
      data:{
        cep: $('#endereco-cep').val(), //pega valor do campo
        formato:'json'
      },
      success: function(res){

        if(res.logradouro.length > 0) {
          $("#endereco-logradouro").val(res.tipo_logradouro + ' ' + res.logradouro) ;
        }
        if(res.bairro.length > 0) {
          $("#endereco-bairro").val(res.bairro) ;
        }
        if(res.cidade.length > 0) {
          $("#endereco-cidade").val(res.cidade) ;
        }
        if(res.uf.length > 0) {
          $("#endereco-estado").val(res.uf) ;
        }

      }
    });
  });

  function atualizarHiddenFormaDePagamento() {
    var formaDePagamento = $('input[name=forma-de-pagamento]:checked').val();
    $("#forma-de-pagamento-escolhida").val(formaDePagamento);
  }
  atualizarHiddenFormaDePagamento();
  $('input[name=forma-de-pagamento]').on('change', function() {
    atualizarHiddenFormaDePagamento();
  });
  //$('#modal-pagamento').modal('show') ;

  //
  $('.wrap-content-form-pre-matricula form').submit(function(event) {
    event.preventDefault(); //this will prevent the default submit

    var telefoneCelular = $("#identificacao-telefone-celular").val();
    var arrTelefoneCelular = telefoneCelular.split(" ") ;
    var dddOnlyNumbers = arrTelefoneCelular[0].replace(/[^0-9\\.]+/g, '');
    var celularOnlyNumbers = arrTelefoneCelular[1].replace(/[^0-9\\.]+/g, '');

    $('#pagseguro-cliente-nome').val($('#identificacao-nome-completo').val());
    $('#pagseguro-cliente-ddd').val(dddOnlyNumbers);
    $('#pagseguro-cliente-telefone').val(celularOnlyNumbers);
    $('#pagseguro-cliente-email').val($('#identificacao-email').val());

  })


  $('#modal-pagamento').on('shown.bs.modal', function () {
    $("#curso-nome").val($("#hidden-nome-do-curso").val());
    $("#curso-modalidade").val($("#hidden-modalidade-curso").val());
  })

	// adiciona table resposnive às tableas do content da table
  $(".main-page-curso-mais-informacoes .panel-body table" ).addClass('table-responsive') ;

  // pode ser usada em outras áreas do site, basta colocar a classe .carregar-estados-do-brasil
  if ( $( ".carregar-estados-do-brasil" ).length ) {
    $.ajax({
      url:'/wp-content/themes/famart/ajax/get-estados-do-brasil.php',
      type:'get',
      dataType:'json',
      beforeSend: function () {
                $('.carregar-estados-do-brasil').html('<option value="">carregando...</option>')
      },
      success: function(res){
        $(".carregar-estados-do-brasil option").remove();
        $(".carregar-estados-do-brasil").html("<option value=''>Selecione</option>");
        $.each(res, function (i, j) {
          row = "<option value=\"" + i + "\">" + j + "</option>";
          $(row).appendTo(".carregar-estados-do-brasil");
        });
      }
    });
  }
