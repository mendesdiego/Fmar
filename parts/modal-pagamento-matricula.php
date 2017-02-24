<!-- Modal -->
<div class="modal fade" id="modal-pagamento" tabindex="-1" role="dialog" aria-labelledby="Confirmação de matricula" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert-success">

        <h4 class="modal-title" id="myModalLabel">Inscrição realizada com sucesso!</h4>
      </div>
      <div class="modal-body">
          <p class="paragrafo box-100">
           <strong><span style="text-decoration: underline;">Atenção!</span></strong>

          <?
            $matricula = get_field('valor_matricula') ;
            $descontoNaMatricula = get_field('valor_matricula_promocional');
            if($descontoNaMatricula) {
              $matricula = $descontoNaMatricula ;
            }
          ?>
           Clique no botão abaixo para escolher a forma de pagamento da sua <strong>taxa de Inscrição - R$ <?=$matricula?></strong>.<br>
           Você será direcionado à prestadora de serviços <strong>PagSeguro</strong>.
          </p>

         <div class="row">
              <form method="post" target="pagseguro" action="https://pagseguro.uol.com.br/v2/checkout/payment.html" accept-charset="UTF-8">

                <!-- Campos obrigatórios -->
                <input name="receiverEmail" type="hidden" value="auditoria@grupoandrademartins.com.br">
                <input name="currency" type="hidden" value="BRL">

                <!-- Itens do pagamento (ao menos um item é obrigatório) -->
                <input name="itemId1" type="hidden" value="0001">
                <input name="itemDescription1" type="hidden" value="<?=removerCaracteresEspeciais(get_the_title()) ?>">
                <input name="itemAmount1" type="hidden" value="<?=getPrecoToSendPagSeguro($matricula)?>">
                <input name="itemQuantity1" type="hidden" value="1">

                <!-- Código de referência do pagamento no seu sistema (opcional) -->
                <input name="reference" type="hidden" id="pagseguro-ref-interna" value="curso-<?=get_the_ID()?>">

                <!-- Dados do comprador (opcionais) -->
                <input name="senderName" type="hidden" id="pagseguro-cliente-nome" value="" >
                <input name="senderAreaCode" type="hidden" id="pagseguro-cliente-ddd" value="">
                <input name="senderPhone" type="hidden" id="pagseguro-cliente-telefone" value="">
                <input name="senderEmail" type="hidden" id="pagseguro-cliente-email" value="" >

                <div class="wrap-btn">
                  <button type="submit" name="button" class="btn btn-success"> Pagar com PagSeguro </button>
                </div>

             </form>

         </div>

      </div>
    </div>
  </div>
</div>
