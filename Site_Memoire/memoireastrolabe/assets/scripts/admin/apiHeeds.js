const $ = require('jquery');
require('../utils');

/* 
const client_id     = process.env.API_HEEDS_CID;
const client_secret = process.env.API_HEEDS_CSE;
const username      = process.env.API_HEEDS_USER;
const password      = process.env.API_HEEDS_PWD;

const url =`https://api.heeds.eu/api/v2/accesstoken?\
client_id=${client_id}&\
client_secret=${client_secret}&\
username=${username}&\
password=${password}`;

$("#getData").on('click', async function(){
    const access_token = await fetch(url,  {
        headers : {
             "content-type": "multipart/form-data; boundary=---011000010111000001101001"
        }
    })
    .then(res => res.json())
    .then(res => {return res["access_token"];})

    var dateDebut = new Date($('#start_date').val()).formatEN();
    var dateFin = new Date ($('#end_date').val()).formatEN();

    const data = await fetch(`https://api.heeds.eu/api/v2/events?date_start=${dateDebut}&date_end=${dateFin}`,  {
        headers : {
            'Authorization': `Bearer ${access_token}`,
            'Content-Type': 'application/json',
        },
        redirect: 'follow',
        mode: 'cors',
    })
    .then(res => res.json());

    console.log(data); 
}) */
$("#getData").on('click', async function(){

    var file = $('input[type="file"]')[0].files[0];
    if(file != null )
    {
        $("#spinner").removeClass('d-none');

        var nom = $('input[type="file"]').parent().find('.dropify-filename-inner').html();
        var fileContent = await getBase64(file);
        
        var res = await fetch(routeAddCsv,{
            method: 'POST',
            headers: {
              'Accept': 'application/json',
              'Content-Type': 'application/json'
            },
            body : JSON.stringify({"file_content": fileContent, "file_name" :  nom })
            
        }).then(res => res.json())
        if(res['status'] == 'success')
        {
            $("#spinner").addClass('d-none');
            $('.content').prepend( '<div class="alert alert-success alert-dismissible fade show" role="alert">'
            +'L\'ajout des données s\'est effectué avec succès'
            +'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
            +'</div>');
        }
        else
        {
            $("#spinner").addClass('d-none');
            var error ="";
            for(var err of res['e']) error+=err+'</br>';
            $('.content').prepend( '<div class="alert alert-warning alert-dismissible fade show" role="alert">'
            +'<div>Une erreur s\'est produite durant l\'ajout</div>'
            +error
            +'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
            +'</div>');
        }
    }
}) 

function getBase64(file) {
    return new Promise((resolve, reject) => {
      const reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = () => resolve(reader.result);
      reader.onerror = error => reject(error);
    });
  }

$(function() {

    $('.dropify').on("change", function(e)
    {
        if($('input[type="file"]')[0].files[0] !=null)
        {
            var file = $('input[type="file"]')[0].files[0];
            var type = $('input[type="file"]')[0].files[0].type;
            var nom = $(this).parent().find('.dropify-filename-inner').html();
            $('#heeds_form button').prop( "disabled", (nom.length>0 && !type.includes("csv")) );
        }
    });

    
    /* 
    $('#heeds_form input[type="date"]').on("change",function(e)
    {
        var isComplete = true;
        $('#heeds_form input[type="date"]').each(function()
        {
            if($(this).val()=='')
            {
                isComplete = false;
                $(this).addClass('is-invalid');
                e.preventDefault();
            }
            else
            {
                $(this).removeClass('is-invalid');
            }
        })

        
        if(isComplete)
        {
            var dateDebut = new Date($('#start_date').val());
            var dateFin = new Date ($('#end_date').val());

            if(dateDebut.getTime()-dateFin.getTime() > 0)
            {
                isComplete = false;  
                $('#dateValide').show();
            } 
            else
            {
                $('#dateValide').hide();

            }
        }

        $('#heeds_form button').prop( "disabled", !isComplete );

      
    }); */
});
