
const $ = require('jquery');

const utils = require('../utils');

$(function() {

    utils.checkUrlImage("Label","lienLogo","logoFile");

    var nom = $("#Label_nom");
    var dateCreation = $("#Label_dateCreation");
    var etat = $("#Label_etat");

    nom.after('<span class="invalid-feedback" id="error_nom">Vous devez insérer une valeur !</span>')
    dateCreation.after('<span class="invalid-feedback" id="error_dateCreation">Vous devez insérer une valeur !</span>')
    etat.parents('.form-widget').first().append('<span class="invalid-feedback" id="error_etat">Vous devez insérer un état !</span>');

    nom.on('input', function() {
        if(!nom.val().trim()) {
            $("#error_nom").show();
        } else {
            $("#error_nom").hide();
        }
    });

    etat.on('change', function() {
        if(!etat.val()) {
            $("#error_etat").show();
        } else {
            $("#error_etat").hide();
        }
    })

    dateCreation.on('input', function() {
        if(!dateCreation.val().trim()) {
            $("#error_dateCreation").show();
        } else {
            $("#error_dateCreation").hide();
        }
    });

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

            if(!dateCreation.val().trim()) {
                e.preventDefault();
                $("#error_dateCreation").show();
            }
        });
    });

})