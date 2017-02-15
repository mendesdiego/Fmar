//<![CDATA[
jQuery(document).ready(function() {
    //Inicio Mascara Telefone
    jQuery('input[type=tel]').mask("(99) 9999-9999?9").ready(function(event) {
        var target, phone, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        phone = target.value.replace(/\D/g, '');
        element = $(target);
        element.unmask();
        if(phone.length > 10) {
            element.mask("(99) 99999-999?9");
        } else {
            element.mask("(99) 9999-9999?9");
        }
    });
    //Fim Mascara Telefone
    //Inicio Mascara RG
 
    //Fim Mascara CPF
    //Inicio Mascara CPF
    jQuery("#cpf").mask("999.999.999-99");
    //Fim Mascara CPF          
    //Inicio Mascara DATA-CONCLUSÃO
    jQuery("#conclusao").mask("99 / 99 / 9999");
    //Fim Mascara DATA DATA-CONCLUSÃO
    //Inicio Mascara DATA-NASCIMENTO
    jQuery("#nascimento").mask("99 / 99 / 9999");
    //Fim Mascara DATA-NASCIMENTO
});
(jQuery);
//]]>