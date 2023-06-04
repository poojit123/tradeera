
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