require('select2');
const $ = require('jquery');
require('../utils');
import { checkUrlImageAccordion,checkUrlImage,initAllSelect2 } from '../utils';

$(function(){
    initAllSelect2();
    $('.select2-multiple').select2({
        multiple: true,
        minimumResultsForSearch: 10,
    });
    $('.select2').select2({
        multiple:false,
    }); 

    checkUrlImage("Evenement","lienImage","imageFile");

    var lieu = $("#Evenement_lieu");
    var titre = $("#Evenement_titre");
    var etat = $("#Evenement_etat");

    titre.after('<span class="invalid-feedback" id="error_titre">Vous devez insérer une valeur !</span>')
    lieu.parents('.form-widget').first().append('<span class="invalid-feedback" id="error_lieu">Vous devez insérer une valeur !</span>')
    etat.parents('.form-widget').first().append('<span class="invalid-feedback" id="error_etat">Vous devez insérer un état !</span>')

    titre.on('input', function() {
        if(!titre.val().trim()) {
            $("#error_titre").show();
        } else {
            $("#error_titre").hide();
        }
    })

    lieu.on('change', function() {
        if(!lieu.val().trim()) {
            $("#error_lieu").show();
        } else {
            $("#error_lieu").hide();
        }
    })

    etat.on('change', function() {
        if(!etat.val().trim()) {
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

            if(!lieu.val()) {
                e.preventDefault();
                $("#error_lieu").show();
            } 
            
            if(!titre.val().trim()) {
                e.preventDefault();
                $("#error_titre").show();
            }
        });
    });

    //////////////////////////////////
    ////        RESSOURCE        ////
    ////   URL & IMAGE CHECK    ////
    ///////////////////////////////

    for(let i = 0; i < $("#Evenements_ressources .accordion #Evenement_ressources").children(':not(.flex-fill)').length; i++) {
        checkUrlImageAccordion("Evenement",i);  
        
        let img = $('#Evenement_ressources_'+i+'-contents').find('img');
        if($(img).length != 0 && $(img).attr('src')!=null && (!$(img).attr('src').toLowerCase().endsWith('mp4') || !$(img).attr('src').toLowerCase().endsWith('mov')|| !$(img).attr('src').toLowerCase().endsWith('wav') || !$(img).attr('src').toLowerCase().endsWith('avi')|| !$(img).attr('src').toLowerCase().endsWith('flv') )) 
        {
           $(img.parent().prepend('<video controls fullscreen width="250" height="200" muted> <source src="'+$(img).attr('src')+'"> </video>'))
           $(img).remove();
        }
    }

    $("#Evenements_ressources .field-collection-add-button").on('click', function() {
        var index =  $('#Evenements_ressources .accordion-collapse').last().find('div input').first().attr('name').replace('Evenement[ressources][','').replace('][titre]','');
        checkUrlImageAccordion("Evenement",index);   
    });
})