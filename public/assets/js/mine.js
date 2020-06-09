$(document).ready(function () {
    $('#quote_form').parsley();
    $('#quote_form').on('submit', function (e) {
        e.preventDefault();
        var buttonClicked = $('.quote_submit');
        var form = $('#quote_form');
        $.ajax({
            type: "POST",
            url: "ajax/processor.php?request=quote",
            data: new FormData(this),
            dataType: 'json',
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function () {
                buttonClicked.attr("disabled", true).val('Processing');
            },
            success: function (response) {
                alert(response.status);
                if (response.status == 1) {
                    swal.fire({
                        title: '<h3 style="color:#0C4DA2; font-family: "Oswald", sans-serif; " >SUCCESS</h3>',
                        html: '<p class="text-center" >' + response.message + '</p>',
                        type: 'success',
                        allowOutsideClick: false,
                        showCloseButton: true,
                        focusConfirm: false,
                        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Ok!',
                        confirmButtonAriaLabel: 'Thumbs up, great!',
                    });
                    form.trigger('reset');
                } else {
                    swal.fire({
                        title: '<h3 style="color:#0C4DA2; font-family: "Oswald", sans-serif; " >ERROR</h3>',
                        html: '<p class="text-center" >An error occurred. Please try again.</p>',
                        type: 'error',
                        allowOutsideClick: false,
                        showCloseButton: true,
                        focusConfirm: false,
                        confirmButtonText: 'Ok!',
                    });
                }
            }
        });
        buttonClicked.attr("disabled", false).val('Request A Quote');

    })
    $('.subscribe-form').parsley();
    $('.subscribe-form').on('submit', function (e) {
        e.preventDefault();
        var buttonClicked = $('.subscribe-button');
        var form = $('.subscribe-form')
        $.ajax({
            type: "POST",
            url: "ajax/processor.php?request=subscribe",
            data: new FormData(this),
            dataType: 'json',
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function () {
                buttonClicked.attr("disabled", true).val('Processing');
            },
            success: function (response) {
                if (response.status == 1) {
                    swal.fire({
                        title: '<h3 style="color:#0C4DA2; font-family: "Oswald", sans-serif; " >SUCCESS</h3>',
                        html: '<p class="text-center" >' + response.message + '</p>',
                        type: 'success',
                        allowOutsideClick: false,
                        showCloseButton: true,
                        focusConfirm: false,
                        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Ok!',
                        confirmButtonAriaLabel: 'Thumbs up, great!',
                    });
                    form.trigger('reset');
                } else {
                    swal.fire({
                        title: '<h3 style="color:#0C4DA2; font-family: "Oswald", sans-serif; " >ERROR</h3>',
                        html: '<p class="text-center" >An error occurred. Please try again.</p>',
                        type: 'error',
                        allowOutsideClick: false,
                        showCloseButton: true,
                        focusConfirm: false,
                        confirmButtonText: 'Ok!',
                    });
                }
                buttonClicked.attr("disabled", false).val('Subscribe');
            }
        });
    })
});