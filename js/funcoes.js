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

$("#nome-curso").val($("#hidden-nome-do-curso").val());
 $("#modalidade-curso").val($("#hidden-modalidade-curso").val());


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
				console.log(res);

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

				if(res.resultado_txt == 'sucesso - cep não encontrado') {
					$( ".cep" ).append( "<span>Cep não encontrado!</span>" );
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
    //event.preventDefault(); //this will prevent the default submit

		var telefoneCelular = $("#telefone-celular").val();
	     if(telefoneCelular.length > 0) {
	       var arrTelefoneCelular = telefoneCelular.split(" ") ;
				 console.log(arrTelefoneCelular) ;
	       var dddOnlyNumbers = arrTelefoneCelular[0].replace(/[^0-9\\.]+/g, '');
	       var celularOnlyNumbers = arrTelefoneCelular[1].replace(/[^0-9\\.]+/g, '');
	       $('#pagseguro-cliente-ddd').val(dddOnlyNumbers);
	       $('#pagseguro-cliente-telefone').val(celularOnlyNumbers);
	     }

	     $('#pagseguro-cliente-nome').val($('#identificacao-nome-completo').val());
	     $('#pagseguro-cliente-email').val($('#identificacao-email').val());


  })


  $('#modal-pagamento').on('shown.bs.modal', function () {
    $("#curso-nome").val($("#hidden-nome-do-curso").val());
    $("#curso-modalidade").val($("#hidden-modalidade-curso").val());
  })

	// adiciona table resposnive às tabelas do content da table
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


	jQuery(document).ready(function(){

		function setBackgroundInCol() {
			if(window.innerWidth >= 768 ) {
				// aplicar background
				var box = $('.main-page-curso-form-pre-matricula .box-img') ;
				//console.log(box) ;
				var bg = box.attr("data-background-img");
				//console.log('bg: ' + bg) ;
				box.css("background-image", 'url("' + bg + '")');
			} else {
				// remover background
				console.log('remover background')
					var box = $('.main-page-curso-form-pre-matricula .box-img') ;
				box.css("background-image", 'none');
			}
		}
		setBackgroundInCol() ;
		window.addEventListener("resize", function () {
			setBackgroundInCol() ;
		}, false);

		// aparece editar ao invés de regulamento no curso de pedagogia
		function trocarModalRegulamentoPorLinkDoEdital(idCurso, linkDoEdital) {
			if(idCurso.val() == 158) {
				var linkRegulamento = $('#link-modal-regulamento') ;
				linkRegulamento.attr("data-toggle", '') ;
				linkRegulamento.attr("data-target", '') ;
				linkRegulamento.attr("target", '_blank') ;
				linkRegulamento.attr("href", linkDoEdital.val()) ;
				linkRegulamento.text('edital') ;
			}
		}

		trocarModalRegulamentoPorLinkDoEdital($('#hidden-id-curso'), $('#hidden-link-do-edital')) ;
	});

	/* ini: carousel banner rotarivo responsivo */
  function setCarouselImage(carousel) {
    var windowsize = $(window).width();

    carousel.find( '.item' ).each(function() {
      var imgCelular = $(this).attr("data-img-celular");
      var imgTablet = $(this).attr("data-img-tablet");
      var imgDesktop = $(this).attr("data-img-desktop");

      if (windowsize < 768) {
        $(this).css("background-image", "url('" + imgCelular + "')");
      } else if (windowsize >= 768 && windowsize < 992) {
        $(this).css("background-image", "url('" + imgTablet + "')");
      } else if (windowsize >= 992) {
        $(this).css("background-image", "url('" + imgDesktop + "')");
      }
    });
  }
  setCarouselImage($("#carousel-home"));
   window.addEventListener("resize", function () {
      console.log("resize");
      setCarouselImage($("#carousel-home"));
  }, false);
  /* end: carousel banner rotarivo responsivo */
