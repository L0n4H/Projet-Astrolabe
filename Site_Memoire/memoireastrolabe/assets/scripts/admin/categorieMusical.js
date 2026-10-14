const $ = require('jquery')

$(function() { 
    var nom = $("#CategorieMusicale_nom");
    var categ = $("#CategorieMusicale_categoriePrincipale");

    nom.after('<span class="invalid-feedback" id="error_nom">Vous devez insérer une valeur !</span>')
    categ.parents('.form-widget').first().append('<span class="invalid-feedback" id="error_categ">Vous devez insérer une catégorie !</span>')

    nom.on('input', function() {
        if(!nom.val().trim()) {
            $("#error_nom").show();
        } else {
            $("#error_nom").hide();
        }
    })

    categ.on('change', function() {
        if(!categ.val().trim()) {
            $("#error_categ").show();
        } else {
            $("#error_categ").hide();
        }
    })

    $("div.page-actions").children('button').each(function() {
        $(this).on("click", function(e){
            if(!nom.val().trim()) {
                e.preventDefault();
                $("#error_nom").show();
            }

            if(!categ.val().trim()) {
                e.preventDefault();
                $("#error_categ").show();
            } 
        });
    });
}) 