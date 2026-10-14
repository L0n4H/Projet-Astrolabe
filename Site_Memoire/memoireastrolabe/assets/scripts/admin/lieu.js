const $ = require("jquery");

$(function() {

    var CP = $("#Lieu_CP");
    var ville = $("#Lieu_ville");
    var NomBat = $("#Lieu_nomBatiment");
    var etat = $("#Lieu_etat")

    CP.after('<span class="invalid-feedback" id="error_CP">Vous devez insérer une valeur !</span>')
    ville.after('<span class="invalid-feedback" id="error_Ville">Vous devez insérer une valeur !</span>'),
    NomBat.after('<span class="invalid-feedback" id="error_nomBat">Vous devez insérer une valeur !</span>')
    etat.parents('.form-widget').first().append('<span class="invalid-feedback" id="error_etat">Vous devez insérer un état !</span>')

    CP.on('input', function() {
        if(!CP.val().trim()) {
            $("#error_CP").show();
        } else {
            $("#error_CP").hide();
        }
    });

    ville.on('input', function() {
        if(!ville.val().trim()) {
            $("#error_Ville").show();
        } else {
            $("#error_Ville").hide();
        }
    });

    NomBat.on('input', function() {
        if(!NomBat.val().trim()) {
            $("#error_nomBat").show();
        } else {
            $("#error_nomBat").hide();
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
            if (!etat.val().trim()){
                e.preventDefault();
                $("#error_etat").show();
            }

            if(!CP.val().trim()) {
                e.preventDefault();
                $("#error_CP").show();
            } 

            if(!Ville.val().trim()) {
                e.preventDefault();
                $("#error_Ville").show();
            }

            if(!NomBat.val().trim()) {
                e.preventDefault();
                $("#error_NomBat").show();
            }
        });
    });

})