$(document).ready(function () {
    $('#notificationForm').parsley();
    $('#notificationForm').on('submit', function (e) {
        e.preventDefault();
        var form = $(notificationForm);
        var data = new FormData(this);
        console.log(data);
        $.ajax({
            type: "POST",
            url: "ajax/processor.php?request=noficationEmail",
            data: data,
            processData: false,
            cache: false,
            contentType: false,
            dataType: "JSON",
            beforeSend: function () {
                $('#notificationButton').attr("disabled", true).html('Processing');
            },
            success: function (response) {
                if (response.status == 1) {
                    form.trigger('reset');
                    swal.fire({
                        title: '<h3 style="color:#0C4DA2; font-family: "Oswald", sans-serif; " >SUCCESS</h3>',
                        html: response.message,
                        type: 'success',
                        allowOutsideClick: false,
                        showCloseButton: true,
                        focusConfirm: false,
                        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Ok!',
                        confirmButtonAriaLabel: 'Thumbs up, great!',
                    });
                } else {
                    alert('error!')
                }
                $('#notificationButton').attr("disabled", false).html('Get Notified');
            }

        });
    });
});