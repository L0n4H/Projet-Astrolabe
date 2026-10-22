const $ = require('jquery');
require('./utils');
require('select2');

$(function(){
    $('.select2.annee').select2({
        multiple:false,
        minimumResultsForSearch: -1,
    });
    $('.select2.trimestre').select2({
        multiple:false,
        minimumResultsForSearch: -1,
    });
    $('.select2.genre').select2({
        multiple:false,
    });
    $('.select2.type').select2({
        multiple:false,
    });
    $('.select2.lieux').select2({
        multiple:false,
    });
    $('.filters').css('visibility','visible');
})

let filters = {
    'annee': '',
    'trimestre': '',
    'genre':'',
    'type':'',
    'lieu':'',
    'search':'',
};

$('#event_annee').on('change', function(){
    filters['annee'] = $(this).val();
    applyFilter();
});
$('#event_trimestre').on('change', function(){
    filters['trimestre'] = $(this).val();
    applyFilter();
});

$([$('#event_genre'), $("#event_genre_strict")]).each(function(){
    $(this).on('change', async function(){
        if ( $('#event_genre').val() == '' ) filters["genre"] = "";
        else {
            // Get all details about selected genre
            let categorie_url = await fetch(`/api/genresMusicaux/detail/${$('#event_genre').val()}`)
                .then(res => res.json());

            /**
             * If genre is in a categorie
             */
            if ( typeof categorie_url[0]["categoriesMusicales"][0] !== 'undefined' && $("#event_genre_strict").is(':checked') )
            {
                let genres_proches_id = [];

                // for every categorie
                for (let i = 0; i < categorie_url[0]["categoriesMusicales"].length; i++)
                {
                    // get nearest genre
                    const categorie_detail_url = categorie_url[0]["categoriesMusicales"][i]["url"];
                    let genres_proches = await fetch(categorie_detail_url)
                        .then(res => res.json())
                        .then(res => {
                                let result = []
                                for ( let genre of res[0]["genresMusicaux"] )
                                {
                                    result.push(genre.id);
                                }
                                // get genre of main categorie
                                let categorie_principale = res[0]["categoriePrincipale"].id;
                                if ( !result.includes(categorie_principale) )
                                {
                                    result.push(categorie_principale);
                                }
                                
                                return result;
                        });
  
                    genres_proches_id = genres_proches_id.concat(genres_proches);
                }

                filters["genre"] = genres_proches_id;
            }
            else filters["genre"] = $('#event_genre').val();
        }
        applyFilter();
    })
});
$('#event_type').on('change', function(){
    filters['type'] = $(this).val();
    applyFilter();
});
$('#event_lieux').on('change', function(){
    filters['lieu'] = $(this).val();
    applyFilter();
});

let timer;

$('#event_search').on('input', function(){
    if (timer) clearInterval(timer);
    filters['search'] = $(this).val();
    timer = setInterval(applyFilter, 500);
})

async function applyFilter()
{
    if (timer) clearInterval(timer);

    const evenements = await fetch(`${search_route}?filters=${JSON.stringify(filters)}`).then(res => res.json());

    const parent_container = $("#container-event")[0];
    let container = document.createElement("div");
    container.classList.add("row");
    container.setAttribute("id","container-evenement");
    
    let template = document.createElement("div");
    template.innerHTML = await fetch(card_route).then(res => res.text())

    for (let event of evenements)
    {
        let card = $(template.cloneNode(true))[0].firstElementChild;

        // Link
        let lien = $(card).find(".program-link");
        let lien_href = lien.attr('href');
        let lien_href_split = lien_href.split("/");
        lien_href_split[lien_href_split.length - 1] = event['id'];
        lien_href = lien_href_split.join('/');
        lien.attr('href', lien_href);

        // Title
        $(card).find('.title').html(event['titre']);

        // Date
        const dateDebut = new Date(`${event["dateDebut"]}T${event["heureDebut"]}`);
        $(card).find('.date').html(dateDebut.formatFR());

        // Genres
        if ( event["genresMusicaux"].length > 0 )
        {
            $(card).find('.tags').addClass("bg-color-white");
            $(card).find('.tags').html(event["genresMusicaux"][0]);
            for (let i = 1; i < event["genresMusicaux"].length; i++)
            {
                $(card).find('.tags').append(` - ${event["genresMusicaux"][i]}`);
            }
        }
        else $(card).find('.tags').remove();
        
        // Image
        const replace_img_html = event["image"] != null ? event["image"] : (event["imageLien"] != null ? event['imageLien'] : null);
        let img = $(card).find(".card-img");
        let card_src = img.css('background-image');
        let card_src_split = card_src.split("/");
        card_src_split[card_src_split.length - 1] = replace_img_html;
        card_src = card_src_split.join('/');
        img.css('background-image', card_src);

        container.appendChild(card);
    }
    
    $(parent_container).html(container);
    $("#pagination").css("visibility","hidden");
}