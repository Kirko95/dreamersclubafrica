$(document).ready(function () {
    $('#quote_form').parsley();
    $('#quote_form').on('submit', function (e) {
        e.preventDefault();
        buttonClicked = $('.quote_submit');
        $.ajax({
            type: "POST",
            url: "ajax/processor.php?request=quote",
            data: new FormData(this),
            dataType: 'text',
            processData: false,
            cache: false,
            contentType: false,
            beforeSend: function () {
                buttonClicked.attr("disabled", true).val('Processing');
            },
            success: function (response) {

            }
        });
    })
    $('.subscribe-form').parsley();
    $('.subscribe-form').on('submit', function (e) {
        e.preventDefault();
        buttonClicked = $('.subscribe-button');
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

            }
        });
    })
});