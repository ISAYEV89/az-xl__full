$(document).ready(function () {


    $('.emailBlock').append('<label id="email-error" class="error active" for="email"></label>');

    $.validator.addMethod("letters", function (value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
    });

    $.validator.addMethod("noSpace", function (value, element) {
        return value.indexOf(" ") < 0 && value != "";
    }, "No space please and don't leave it empty");

    $.validator.addMethod("loginRegex", function (value, element) {
        return this.optional(element) || /^[a-z0-9\-]+$/i.test(value);
    }, "Username must contain only letters, numbers, or dashes.");

    $.validator.addMethod("phoneRegex", function (value, element) {
        return this.optional(element) || /^[0-9\-]+$/i.test(value);
    }, "Username must contain only letters, numbers, or dashes.");

    $.validator.addMethod("customemail",
        function (value, element) {
            return /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(value);
        },
        "Zəhmət olmasa keçərli e-poçta yazın."
    );


//  pwcheck



    $("#comment-form").validate({
        rules: {
            name: {
                required: true,
            },
            text: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Bölmə doldurulmalıdır."
            },
            text: {
                required: "Bölmə doldurulmalıdır."
            },
        },

    });




});