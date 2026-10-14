require('select2');
const $ = require('jquery');
require('../utils')
import { checkUrlImageAccordion,checkUrlImage,initAllSelect2 } from '../utils';

/**
 * Disable option
 */
function select2OptionHandler()
{
    $('#groupeMembres .select2 option:selected').each(function(){
        $(`#groupeMembres .select2 option[value=${$(this).val()}]`).attr("disabled","disabled");
    });
}

/**
 * Change and activate option
 */
function select2Handler()
{
    select2OptionHandler();

    // select2 change
    $('#groupeMembres .select2').on("change", function(){
        $('#groupeMembres .select2 option').removeAttr("disabled");
        select2OptionHandler();
    });
}

/**
 * Manage delete button for collection field
 */
function deleteHandler()
{
    $('#groupeMembres .form-widget-compound .select2 option').removeAttr("disabled");
    select2OptionHandler();
    const add_btn = $('#groupeMembres .field-collection-add-button');
    hideOrShowBtn(add_btn);
}

/**
 * Manage visibility of add btn
 */
function hideOrShowBtn(btn)
{
    if ( $('#groupeMembres .form-widget-compound .select2').length > 0 )
    {
        const nbOptionAvailable = $('#groupeMembres .form-widget-compound .select2').first().find('option:not([disabled=disabled])').length;
        if ( nbOptionAvailable > 0 ) btn.show();
        else btn.hide();
    } 
    else btn.show();
}


$(function(){
    /**
     * Initialisation of select 2
     */
    $('.select2').select2({
        multiple:false,
    });
    
    $('.select2-multiple').select2({
        multiple: true,
        minimumResultsForSearch: 10,
    });
    select2Handler();
    initAllSelect2();
    
    const add_btn = $('#groupeMembres .field-collection-add-button');
    hideOrShowBtn(add_btn);

    $('#groupeMembres .form-widget-compound .field-collection-delete-button').on('click', deleteHandler);

    /**
     * Add btn click
     */
    add_btn.on('click', function(){
        select2Handler();
        /**
         * Manage to change option when a new collection field is created
         */
        const optionAvailable = $('#groupeMembres .form-widget-compound .select2').first().find('option:not([disabled=disabled])');
        const nbOptionAvailable = optionAvailable.length;
        if ( nbOptionAvailable > 0 ) 
            $('select.select2').last().val(optionAvailable.val()).trigger('change');

        /**
         * Visibility of add btn regarding number of items
         */
        hideOrShowBtn(add_btn);
        $('#groupeMembres .form-widget-compound .field-collection-delete-button').on('click', deleteHandler);
    })

    $('form[name=Groupe]').on('submit', function(){
        $('.select2 option').removeAttr("disabled");
    })

    checkUrlImage("Groupe","lienImage","imageFile");

    for(let i = 0; i < $("#Groupes_ressources .accordion #Groupes_ressources").children(':not(.flex-fill)').length; i++) {
        checkUrlImageAccordion("Groupe",i);
    }

    $("#Groupes_ressources .field-collection-add-button").on('click', function() {
        var index =  $('#Groupes_ressources .accordion-collapse').last().find('div input').first().attr('name').replace('Groupe[ressources][','').replace('][titre]','');
        checkUrlImageAccordion("Groupe",index);   
    });

    var titre = $("#Groupe_nom");
    var etat = $("#Groupe_etat");

    titre.after('<span class="invalid-feedback" id="error_nom">Vous devez insérer une valeur !</span>')
    etat.parents('.form-widget').first().append('<span class="invalid-feedback" id="error_etat">Vous devez insérer un état !</span>');

    titre.on('input', function() {
        if(!titre.val().trim()) {
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

            if(!titre.val().trim()) {
                e.preventDefault();
                $("#error_nom").show();
            }
        });
    });

});
