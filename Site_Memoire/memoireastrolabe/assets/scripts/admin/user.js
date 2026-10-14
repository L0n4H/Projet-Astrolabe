const $ = require('jquery');

$(function(){
    $([$('input[value="ROLE_EDITEUR"]'),$('input[value="ROLE_ADMIN"]')]).each(function(){
        $(this).on('change', function(){
            if ( $(this).prop('checked') == true)
            {
                if ( $(this).val() == 'ROLE_ADMIN' )
                {
                    $('input[type=checkbox]').prop('checked', true);
                    $('input[value=ROLE_EASYADMIN]').prop('checked', true);
                }
                else if ( $(this).val() == 'ROLE_EDITEUR' )
                {
                    $('.roles-specs input[type=checkbox]').prop('checked', true);
                    $('input[value=ROLE_EASYADMIN]').prop('checked', true);
                }
            }
        });
    });
    $('.roles-specs input[type=checkbox]').on('change', function(){
        if ( $(this).prop('checked') == false )
        {
            if ( $('input[value="ROLE_EDITEUR"]').prop('checked') == true )
                $('input[value="ROLE_EDITEUR"]').prop('checked', false);

            if ( $('input[value="ROLE_ADMIN"]').prop('checked') == true )
                $('input[value="ROLE_ADMIN"]').prop('checked', false);
        }
    });
    $('input[value=ROLE_EASYADMIN]').on('change', function(){
        if ( $(this).prop('checked') == false )
        {
            $('.roles-specs input[type=checkbox]').prop('checked', false);
            $('input[value="ROLE_EDITEUR"]').prop('checked', false);
            $('input[value="ROLE_ADMIN"]').prop('checked', false);
        }
    })

    var user = $("#User_username");
    var email = $("#User_email");

    user.on('input', function() {
        if(!user.val().trim()) {
            $("#error_user").show();
        } else {
            $("#error_user").hide();
        }
    })

    email.on('input', function() {
        if(!email.val().trim()) {
            $("#error_email").show();
        } else {
            $("#error_email").hide();
        }
    })

    $("div.page-actions").children('button').each(function() {
        $(this).on('click', function(e) {
            if(!user.val().trim()) {
                e.preventDefault();
                $("#error_user").show();
            }

            if(!email.val().trim()) {
                e.preventDefault();
                $("#error_email").show();
            }
        });
    });
})