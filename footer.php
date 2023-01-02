    <footer id="footer">
        Desenvolvido pela Confederação Brasileira de Voleibol para Deficientes &copy; CBVD <?php echo $Ano?>
    </footer>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>



<!-- ADICIONA DDI NO CAMPO TELEFONE -->
<!-- BEGIN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" da></script>
<script>
    const phoneInputField = document.querySelectorAll('input[type="tel"]');
    // const btForm = document.querySelectorAll('.elementor-button[type="submit"]');
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

</script>
    <!-- CASO USE POPUP, COLOQUE TAMBÉM O CÓDIGO ABAIXO (USAR WIDGET HTML) -->
<script>
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
</script>
<!-- END -->



    <!-- Template Javascript -->
    <script src="js/main.js"></script>
