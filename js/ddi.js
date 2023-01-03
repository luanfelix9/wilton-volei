const phoneInputField = document.querySelectorAll('input[type="tel"]');
let telefones = [];

for (i = 0; i < phoneInputField.length; i++){
    var phone_number = window.intlTelInput(phoneInputField[i], {
    separateDialCode: true,
    preferredCountries:["br"],
    hiddenInput: "full",
    utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });

    telefones[i] = phone_number;
}

$(phoneInputField).each(function(i) {
    $("form").submit(function() {
        var full_number = telefones[i].getNumber(intlTelInputUtils.numberFormat.E164);
        $(phoneInputField[i]).val(full_number);
        console.log(phoneInputField[i]);
        console.log(phone_number);
    });
});


for (i = 0; i < phoneInputField.length; i++){
    var larguraInput = phoneInputField[i].getBoundingClientRect().width;
    $(".iti__country-list").css({width: larguraInput});
}


// CASO USE POPUP, COLOQUE TAMBÉM O CÓDIGO ABAIXO (USAR WIDGET HTML)

var $=jQuery.noConflict();
jQuery(document).ready(function( $ ){

    jQuery(document).on('elementor/popup/show', () => {
        const phoneInputField = document.querySelectorAll('input[type="tel"]');
        const btForm = document.querySelectorAll('.elementor-button[type="submit"]');
        let telefones = [];

        for (i = 0; i < phoneInputField.length; i++){
            var phone_number = window.intlTelInput(phoneInputField[i], {
            separateDialCode: true,
            preferredCountries:["br"],
            hiddenInput: "full",
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });

            telefones[i] = phone_number;
        }

        $(phoneInputField).each(function(i) {
            $("form").submit(function() {
                var full_number = telefones[i].getNumber(intlTelInputUtils.numberFormat.E164);
                $(phoneInputField[i]).val(full_number);
                console.log(phoneInputField[i]);
                console.log(phone_number);
            });
        });

        for (i = 0; i < phoneInputField.length; i++){
            var larguraInput = phoneInputField[i].getBoundingClientRect().width;
            $(".iti__country-list").css({width: larguraInput});
        }

    });
});