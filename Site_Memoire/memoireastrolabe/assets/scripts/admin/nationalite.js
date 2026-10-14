const $ = require('jquery')

$(function() { 
    var nom = $("#Nationalite_nom");
    var iso = $("#Nationalite_codeISO");
    var etat = $("#Nationalite_etat");

    nom.after('<span class="invalid-feedback" id="error_nom">Vous devez insérer une valeur !</span>')
    iso.after('<span class="invalid-feedback" id="error_iso">Vous devez insérer une valeur !</span>')
    etat.parents('.form-widget').first().append('<span class="invalid-feedback" id="error_etat">Vous devez insérer un état !</span>');

    nom.on('input', function() {
        if(!nom.val().trim()) {
            $("#error_nom").show();
        } else {
            $("#error_nom").hide();
        }
    })

    iso.on('input', function() {
        if(!iso.val().trim()) {
            $("#error_iso").show();
        } else {
            $("#error_iso").hide();
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

            if(!iso.val().trim()) {
                e.preventDefault();
                $("#error_iso").show();
            }
        });
    });
}) 