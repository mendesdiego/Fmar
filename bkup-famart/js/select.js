

$(function(){
    $("#estados").change(function() {
        var id = $(this).val();
        $.ajax({
            url: "exibecidade.php?id="+id,
           type: 'post',
           dataType:"text"
           success: function (res) {
               $("#cidades").append(res);
           }
       });
    });
});