const $ = require('jquery');
require('../utils')
import { checkUrlImage } from "../utils" 

$(function() {

    checkUrlImage("Musicien","lienImage","imageFile");

    var nomScene = $("#Musicien_nomScene");
    var nom = $('#Musicien_nom');
    var prenom = $('#Musicien_prenom');
    var etat = $("#Musicien_etat");

    nomScene.after('<span class="invalid-feedback" id="error_nomScene">Le nom de scène doit être renseigné, si le nom et le prénom ne le sont pas</span>')
    nom.after('<span class="invalid-feedback" id="error_nom">Le nom doit être renseigné, si le nom de scène ne l\'est pas</span>')
    prenom.after('<span class="invalid-feedback" id="error_prenom">Le prénom doit être renseigné, si le nom de scène ne l\'est pas</span>')
    etat.parents('.form-widget').first().append('<span class="invalid-feedback" id="error_etat">Vous devez insérer un état !</span>');

    nomScene.on('input', function() {
        if(nomScene.val().trim()) {
            $("#error_nom").hide();
            $("#error_prenom").hide();
            $("#error_nomScene").hide();
        } else {
            if(!nom.val().trim())
                $("#error_nom").show();
            if(!prenom.val().trim())
                $("#error_prenom").show();
            if(!nomScene.val().trim() && !nom.val().trim() && !prenom.val().trim())
                $("#error_nomScene").show();
            else {
                $("#error_nomScene").hide();
            }
        }
    })

    nom.on('input', function() {
        if(nom.val().trim()) {
            $("#error_nomScene").hide();
            $("#error_nom").hide();
        } else {
            $("#error_nomScene").show();
            $("#error_nom").show();
        }
    })

    prenom.on('input', function() {
        if(prenom.val().trim()) {
            $("#error_nomScene").hide();
            $("#error_prenom").hide();
        } else {
            $("#error_nomScene").show();
            $("#error_prenom").show();
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
        $(this).on('click', function(e) {
            if(!etat.val()) {
                e.preventDefault();
                $("#error_etat").show();
            }

            if(!nomScene.val().trim()){
                if((!nom.val().trim()) || (!prenom.val().trim())) {
                    e.preventDefault();
                    $("#error_nomScene").show()
                } else {
                    $("#error_nomScene").hide();
                }
            } 
            if(!nom.val().trim() || !(prenom.val().trim())) {
                if(!nomScene.val().trim()) {
                    e.preventDefault();
                    $("#error_nom").show();
                    $("#error_prenom").show();
                } else {
                    $("#error_nom").hide();
                    $("#error_prenom").hide();
                }
            }
        });
    });
})
