(function($) {


    if( typeof acf.add_action !== 'undefined' ) {



      acf.add_action('ready append', function( $el ) {
        //alert("acf not is undefined") ;

        $("div[data-name='valor_matricula'] input, div[data-name='valor_matricula_promocional'] input").priceFormat({
          prefix: '',
          centsSeparator: ',',
          thousandsSeparator: '.'
        });

        $("td[data-name='preco_de'] input, td[data-name='preco_por'] input").priceFormat({
            prefix: '',
            centsSeparator: ',',
            thousandsSeparator: '.'
        });

      });
    } else {

    }

})(jQuery);
