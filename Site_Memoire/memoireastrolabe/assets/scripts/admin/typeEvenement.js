const $ = require('jquery');

$(function () {
    var nom = $("#TypeEvenement_label");
    var etat = $("#TypeEvenement_etat");

    nom.after('<span class="invalid-feedback" id="error_nom">Vous devez insérer une valeur !</span>')
    etat.parents('.form-widget').first().append('<span class="invalid-feedback" id="error_etat">Vous devez insérer un état !</span>');

    nom.on('input', function() {
        if(!nom.val().trim()) {
            $("#error_nom").show();
        } else {
            $("#error_nom").hide();
        }
    })

    etat.on('change', function() {
        if(!etat.val()) {
            $("#error_etat").show();
        } else {
            $("#error_etat").hide();
        }
    })

    $("div.page-actions").children('button').each(function() {
        $(this).on("click", function(e){
            if(!etat.val()) {
                e.preventDefault();
                $("#error_etat").show();
            }
            if(!nom.val().trim()) {
                e.preventDefault();
                $("#error_nom").show();
            }
        });
    });
});