
$(document).on('submit','#contact-form',function(event){
    event.preventDefault()
    var form = $(this);
    $('#contact-btn').prop('disabled', true);
    $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: form.serialize()
    }).done(function(data) {
        $('#contact-btn').prop('disabled', false);
        let res = JSON.parse(data);
        if(res.status==200){
            form[0].reset();
            toastr.success(res.message);
        }else{
            toastr.error(res.message);
        }
    }).fail(function(data) {
        $('#contact-btn').prop('disabled', false);
        console.log(data);
    });
});

$(document).on('click','.showProduct',function(){
    let $this = $(this);
    let description = $this.parent().find('.p-description').text();
    let title = $this.parent().parent().parent().find('.p-title').text();
    $('#productModal #productModalLabel').text(title);
    $('#productModal #modal-description').text(description);
    $('#productModal #form-product').val(title);
    $('#productModal').modal('show');
});