$(document).ready(function () {
    //$('.online').on('click', function() {
    //    var formData = new FormData();
    //    var id = $(this).parent().parent().parent().find('input[name=news_id]').val();
    //    var value = $(this).val();
    //    $(this).removeAttr('checked', false);
    //    $(this).val('0');
    //
    //    //alert(value);
    //    formData.append('id', id);
    //    formData.append('value', value);
    //
    //    //$.ajaxSetup({
    //    //    headers: {
    //    //        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //    //    }
    //    //});
    //
    //    $.ajax({
    //        type: "POST",
    //        processData: false,
    //        contentType: false,
    //        url: "news/online",
    //        data: formData,
    //        dataType: 'json',
    //        success:function(data){
    //            if(data.reponse === 'success'){
    //                bootstrap_alert.success(data.message);
    //                location.reload();
    //            }else{
    //                bootstrap_alert.danger(data.message);
    //            }
    //        },
    //        error: function() {
    //            alert('La requête n\'a pas abouti, veuillez prévenir l\'administrateur');
    //        }
    //    });
    //});
    $('.home-news', function(){
        $('img').each(function() {
            $(this).addClass("img-responsive");
        });
    });
});