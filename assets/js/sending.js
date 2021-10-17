jQuery(document).ready(function () {
    jQuery('#inscForm').submit(function () {
        var dados = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: "./assets/js/cadastrar.php",
            data: dados,
            success: function envio() {
                alert("Enviada com sucesso!")
            }
        });



        return false;
    });
    jQuery('#msgPost').submit(function () {
        var dados = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: "./public/scripts/mensagem.php",
            data: dados,
            success: function envio() {
                alert("Mensagem enviada com sucesso")
            }
        });



        return false;
    });
});