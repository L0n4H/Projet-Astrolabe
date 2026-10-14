const $ = require('jquery');

$(function(){

    var htmlFile = $(".ea-vich-image");

    var lien = $("#Ressource_lien");
    var file = $("#Ressource_file_file");
    var nom = $("#Ressource_titre");
    var type = $("#Ressource_type");
    var etat = $("#Ressource_etat");

    nom.after('<span class="invalid-feedback" id="error_title">Vous devez insérer une valeur !</span>')
    lien.after('<span class="invalid-feedback" id="error_lien">Vous devez insérer une valeur !</span>')
    file.after('<span class="invalid-feedback" id="error_file">Vous devez insérer une image valide !</span>')
    type.parents('.form-widget').first().append('<span class="invalid-feedback" id="error_type">Vous devez insérer un type !</span>');
    etat.parents('.form-widget').first().append('<span class="invalid-feedback" id="error_etat">Vous devez insérer un état !</span>');


    let img = $('div.ea-vich-image').find('img');
    if($(img).attr('src')!=null && $(img).attr('src').endsWith('mp4'))
    {
       $(img.parent().prepend('<video controls fullscreen width="250" height="200" muted> <source src="'+$(img).attr('src')+'"> </video>'))
       $(img).remove();
    }

    if(file.val()) {
        lien.parents('.form-group').parent().hide()
    } else if(lien.val()) {
        file.parents('.form-group').parent().hide();
    }


    if($("#Ressource_file_delete").length) {
        $("#Ressource_file_delete").parents('.form-group').first().hide();  

        $(".ea-vich-image-actions").append('<button type="button" class="btn btn-danger" id="file_delete" >Supprimer</button>')
        addEvenementBtn();
        lien.parents('.form-group').parent().hide();
    }

    function addEvenementBtn() {
        $("#file_delete").on('click', function(){
            htmlFile.children('.ea-lightbox-thumbnail').remove();
            htmlFile.children('#ea-lightbox-Ressource_file').remove();
            $("#file_delete").remove();
            file.val("");
            $("#Ressource_file_delete").prop('checked',true);
            $("#Ressource_file_file_new_file_name").text("");
            lien.parents('.form-group').parent().show();
        });
    }

    function filePreview(input) {
        if (input.files && input.files[0]) {
            $(input).parents('div.ea-vich-image').find('a.ea-lightbox-thumbnail').remove();
            $(input).parents('div.ea-vich-image').prepend('<div class="spinner-border" id="spinner" role="status"><span class="visually-hidden">Loading...</span></div>')
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#spinner").remove();
                $("#ea-lightbox-Ressource_file").remove();
                if(!file.val().endsWith('mp4')) {
                    htmlFile.prepend(
                        '<a href="#" class="ea-lightbox-thumbnail" data-ea-lightbox-content-selector="#ea-lightbox-Ressource_file">'
                        +'<img src="'+e.target.result+'"></a>'
                        +'<div id="ea-lightbox-Ressource_file" class="ea-lightbox"><embed src="'+e.target.result+'"></div>');       
                } else {
                    htmlFile.prepend(
                        `<a href="#" class="ea-lightbox-thumbnail" data-ea-lightbox-content-selector="#ea-lightbox-Ressource_file"> \
                            <video controls fullscreen width="250" height="200" muted> <source src="${e.target.result}"> </video>
                        </a> \
                        <div id="ea-lightbox-Ressource_file" class="ea-lightbox"><embed src="${e.target.result}"></div>`
                    );
                }
                //add btn delete image

                $("#Ressource_file_delete").prop('checked',false);
                if(!$("#file_delete").length) {
                    $(".ea-vich-image-actions").append('<button type="button" class="btn btn-danger" id="file_delete" >Supprimer</button>')
                    addEvenementBtn();
                }

                $("#error_file").hide();
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    file.on('change',function () {
        filePreview(this);
    });


    lien.on('input', (e) => {
        if(lien.val()) {
          file.parents('.form-group').parent().hide();
        } else {
          file.parents('.form-group').parent().show();
        }
      });
    
    file.on('change', (e) => {
        if(file.val()) {
            lien.parents('.form-group').parent().hide();
        }
    });

    nom.on('input', function() {
        if(!nom.val().trim()) {
            $("#error_title").show();
        } else {
            $("#error_title").hide();
        }
    })

    type.on('change', function() {
        if(!type.val().trim()) {
            $("#error_type").show();
        } else {
            $("#error_type").hide();
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

            if (!lien.val() && $(".ea-lightbox-thumbnail").length == 0) {
                e.preventDefault();
                $("#error_file").show();
            } else {
                $("#error_file").hide();
            }

            if(!type.val()) {
                e.preventDefault();
                $("#error_type").show();
            } else { 
                $("#error_type").hide();
            }
            
            if(!nom.val().trim()) {
                e.preventDefault();
                $("#error_title").show()
            } else { 
                $("#error_title").hide();
            }
        })
    })
})