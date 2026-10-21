const $ = require('jquery');

Date.prototype.formatFR = function()
{
    const date = this.getDate() < 10 ? `0${this.getDate()}` : this.getDate();
    const month = (this.getMonth() + 1) < 10 ? `0${this.getMonth() + 1}` : this.getMonth() + 1;
    const year = this.getFullYear();

    const hours = this.getHours() < 10 ? `0${this.getHours()}` : this.getHours();
    const mins = this.getMinutes() < 10 ? `0${this.getMinutes()}` : this.getMinutes();

    return `${date}.${month}.${year} - ${hours}:${mins}`;
}

Date.prototype.formatFRlight = function()
{
    const date = this.getDate() < 10 ? `0${this.getDate()}` : this.getDate();
    const month = (this.getMonth() + 1) < 10 ? `0${this.getMonth() + 1}` : this.getMonth() + 1;
    const year = this.getFullYear();

    return `${date}.${month}.${year}`;
}


Date.prototype.formatEN = function()
{
    const date = this.getDate() < 10 ? `0${this.getDate()}` : this.getDate();
    const month = (this.getMonth() + 1) < 10 ? `0${this.getMonth() + 1}` : this.getMonth() + 1;
    const year = this.getFullYear();

    const hours = this.getHours() < 10 ? `0${this.getHours()}` : this.getHours();
    const mins = this.getMinutes() < 10 ? `0${this.getMinutes()}` : this.getMinutes();

    return `${year}-${month}-${date}`;
}

class Etiquette {
    constructor(motCles) {
        this.motCles = motCles;
        //etat cote serv
    }
}

class Label {
    constructor(nom,DateDeCrea,Desc,Img) { 
        this.nom = nom; 
        this.DateDeCrea = DateDeCrea;
        this.Desc = Desc;
        this.Img = Img;        
        //etat cote serv
    }
}

class Ressource
{
    constructor(titre,nom,lien,type,etiquettes)
    {
        this.titre = titre;
        this.nom = nom;  //"nom.extension"
        this.lien = lien;
        this.type = type;  //id du type    
        this.etiquettes = etiquettes; //id etiquette
        //etat cote serv

    }
}

class Lieu{
    constructor(nomBat,adresse,ville,cp)
    {
        this.nomBat = nomBat;
        this.adresse = adresse;
        this.ville = ville;
        this.cp = cp;
        //etat cote serv
    }
}

class TypeEvenement{
    constructor(label)
    {
        this.label = label;
        //etat cote serv
    }
    
}
class Evenement{
    constructor(typeEvenement,dateDeb,heureDeb,dateFin,heureFin,desc,titre,genreMusicaux,lieu,img,etiquettes) //ressource
    {
        //this.ressource = ressource; //array ids ressources;
        this.typeEvenement   = typeEvenement; //idType
        this.dateDeb = dateDeb; 
        this.heureDeb = heureDeb;
        this.dateFin = dateFin;
        this.heureFin = heureFin;
        this.desc = desc;
        this.titre = titre;
        this.genreMusicaux = genreMusicaux;
        this.lieu = lieu;
        this.img = img;
        this.etiquettes=etiquettes;
        //etat cote serv
    }
}
class EvenementCmpl{
    constructor(typeEvenement,dateDeb,heureDeb,dateFin,heureFin,desc,titre,genreMusicaux,lieu,img,etiquettes,ressources,passages)
    {
        this.typeEvenement   = typeEvenement; 
        this.dateDeb = dateDeb; 
        this.heureDeb = heureDeb;
        this.dateFin = dateFin;
        this.heureFin = heureFin;
        this.desc = desc;
        this.titre = titre;
        this.genreMusicaux = genreMusicaux;
        this.lieu = lieu;
        this.img = img;
        this.etiquettes=etiquettes;
        this.ressources=ressources;
        this.passages=passages;
    }
}

class Passage{
    constructor(dateDeb,dateFin,groupe)
    {
        this.dateDeb = dateDeb;
        this.dateFin = dateFin;
        this.groupe = groupe;

    }
       
}
class GenreMusical
{
    constructor(nom)
    {
        this.nom = nom;
        //etat cote serv
    }
}

class Groupe{
    constructor(nom,date,bio,nationalite,photo,etiquettes,genreMusicaux,label,membres,Img)
    {
        this.nom = nom;
        this.date = date;
        this.bio = bio;
        this.nationalite = nationalite; //'idNat'
        this.photo = photo; // "nom.extension"
        this.etiquettes = etiquettes; //array id etiquette
        this.genreMusicaux = genreMusicaux; //array id genreMusical
        this.label = label; //array id label
        this.membres = membres; //array id membre
        this.Img = Img;
        //etat cote serv
    }
}

class Nationalite
{

    constructor(nom,codeISO)
    {
        this.nom = nom;
        this.codeISO=codeISO;
        //etat cote serv
    }
}

class Musicien
{
    constructor(pseudo,nom,prenom,dateNaiss,photo,etiquette,nationalite)
    {
        this.pseudo = pseudo;
        this.prenom = prenom;
        this.dateNaiss = dateNaiss;
        this.photo = photo; //"nom.extension"
        this.etiquette = etiquette; //array id etiquette
        this.nom = nom;
        // this.lienImg = lienImg;
        this.nationalite=nationalite;
        //etat cote serv
    }
    
}

class Membre
{
    constructor(idMusicien,idInstrument,actif)
    {    
        this.idMusicien = idMusicien;
        this.idInstrument = idInstrument;
        this.actif = actif;
    }
}
class Instrument
{
    constructor(nom)
    {
        this.nom=nom;
        //etat cote serv
    }
}

export{ Etiquette,Label,Ressource,Groupe,Nationalite,GenreMusical,TypeEvenement,Lieu,Instrument,Membre,Musicien,Evenement,Passage,EvenementCmpl}
 
export function checkUrlImage(id, lienId, fileId) {
    var lien = $(`#${id}_${lienId}`);
    var file = $(`#${id}_${fileId}_file`);
    var htmlFile = file.parents('.ea-vich-image');
    var button = htmlFile.children('.ea-vich-image-actions');

    if(file.val()) {
        lien.parents('.form-group').first().parent().hide()
    } else if(lien.val()) {
        file.parents('.form-group').first().parent().hide();
    }

    if($(`#${id}_${fileId}_delete`).length) {
        $(`#${id}_${fileId}_delete`).parents('.form-group').first().attr('style','display:none;')
        button.append(`<button type="button" class="btn btn-danger" id="${fileId}_delete" >Supprimer</button>`)
        addEvenementBtn();
        lien.parents('.form-group').parent().hide();
    }

    function addEvenementBtn() {
        $(`#${fileId}_delete`).on('click', function(){
            htmlFile.children('.ea-lightbox-thumbnail').remove();
            htmlFile.children(`#ea-lightbox-${id}_file`).remove();
            $(this).remove();
            file.val("");
            $(`#${id}_${fileId}_delete`).prop('checked',true);
            $(`#${id}_${fileId}_file_new_file_name`).text("");
            lien.parents('.form-group').parent().first().show();
        });
    }

    function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(".ea-lightbox-thumbnail").remove();
                $(`#ea-lightbox-${id}_file`).remove();
                htmlFile.prepend(
                    `<a href="#" class="ea-lightbox-thumbnail" data-ea-lightbox-content-selector="#ea-lightbox-${id}_file">`
                    +`<img src="${e.target.result}"></a>`
                    +`<div id="ea-lightbox-${id}_file" class="ea-lightbox"><embed src="${e.target.result}></div>`);

                //add btn delete image

                $(`#${id}_${fileId}_delete`).prop('checked',false);
                button.append(`<button type="button" class="btn btn-danger" id="${fileId}_delete" >Supprimer</button>`)
                addEvenementBtn();

                $("#error_file").text('');
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
}

export function checkUrlImageAccordion(label,i) {

    var lien = $(`#${label}_ressources_${i}_lien`);
    var file = $(`#${label}_ressources_${i}_file_file`);
    var titre = $(`#${label}_ressources_${i}_titre`);
    var button = $(`#${label}_ressources_${i} .ea-vich-image-actions`);
    var htmlFile = file.parents('.ea-vich-image'); 

    if(file.val()) {
        lien.parents('.form-group').first().parent().hide()
    } else if(lien.val()) {
        file.parents('.form-group').first().parent().hide();
    }

    if($(`#${label}_ressources_${i}_file_delete`).length) {   
        $(`#${label}_ressources_${i}_file_delete`).parents('.form-group').first().hide();
        button.append(`<button type="button" class="btn btn-danger" id="file_delete_${i}">Supprimer</button>`)
        addEvenementBtn();
        lien.parents('.form-group').first().parent().hide();
    }

    function addEvenementBtn() {
        $(`#file_delete_${i}`).on('click', function(){
            htmlFile.children().first().remove();
            htmlFile.children(`#ea-lightbox-Evenement_ressources${i}_file`).remove();
            $(this).remove();
            file.val("");
            $(`#${label}_ressources_${i}_file_delete`).prop('checked',true);
            $(`#${label}_ressources_${i}_file_file_new_file_name`).text("");
            lien.parents('.form-group').parent().show();
        });
    }

    function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            $(input).parents('div.ea-vich-image').find('a.ea-lightbox-thumbnail').remove();
            $(input).parents('div.ea-vich-image').prepend('<div class="spinner-border" id="spinner" role="status"><span class="visually-hidden">Loading...</span></div>')
            reader.onload = function (e) {
                $("#spinner").remove();
                $(`#ea-lightbox-${label}_ressources_${i}_file`).remove();
                console.log(file.val())
                if(file.val() != null && (!file.val().toLowerCase().endsWith('mp4') && !file.val().toLowerCase().endsWith('mov') && !file.val().toLowerCase().endsWith('wav') && !file.val().toLowerCase().endsWith('avi') && !file.val().toLowerCase().endsWith('flv') )) {  
                    htmlFile.prepend(
                        `<a href="#" class="ea-lightbox-thumbnail" data-ea-lightbox-content-selector="#ea-lightbox-${label}_ressources_${i}_file"> \
                            <img src="${e.target.result}" loading="lazy">
                        </a> \
                        <div id="ea-lightbox-${label}_ressources_${i}_file" class="ea-lightbox"><embed src="${e.target.result}"></div>`
                    );
                } else {
                    htmlFile.prepend(
                        `<a href="#" class="ea-lightbox-thumbnail" data-ea-lightbox-content-selector="#ea-lightbox-${label}_ressources_${i}_file"> \
                            <video controls fullscreen width="250" height="200" muted> <source src="${e.target.result}"> </video>
                        </a> \
                        <div id="ea-lightbox-${label}_ressources_${i}_file" class="ea-lightbox"><embed src="${e.target.result}"></div>`
                    );
                }
                //add btn delete image

                $(`#${label}_ressources_${i}_file_delete`).prop('checked',false);
                button.append(`<button type="button" class="btn btn-danger" id="file_delete_${i}" >Supprimer</button>`)
                addEvenementBtn();

                $("#error_file").text('');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    file.on('change',function () {
        filePreview(this);
        if(file.val()) {
            lien.parents('.form-group').first().parent().hide();
        }
    });

    lien.on('input', function() {
        if(lien.val()) {
            file.parents('.form-group').first().parent().hide();
        } else {
            file.parents('.form-group').first().parent().show();
        }
    });

    titre.off('input');
    titre.on('input',function() {
        $("#error_file").hide();
    })

    $("div.page-actions").children('button').each(function() {
        $(this).on("click", function(e){
            if(!titre.val().trim()) {
                $("#error_file").text('Vous devez insérer un titre dans chaque ressource !').show();
                e.preventDefault();
            }
        });
    });
}
export function initAllSelect2()
{
    $('.select2 option').each(function(){if($(this).val() == "")$(this).remove()})
    
    $('.field-collection-add-button').on("click",function()
    {
        $(this).parent().find('.form-widget-compound').last().find('.select2 option').each(function(){if($(this).val() == "")$(this).remove()})
        $(this).parent().find('.form-widget-compound').last().find('.select2').select2({
            multiple:false,
        });
        $(this).parent().find('.form-widget-compound').last().find('.select2-multiple').select2({
            multiple: true,
            minimumResultsForSearch: 10,
        });
    })
}

export function toBase64(file)
{
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function(){
            return resolve(reader.result)
        };
        reader.onerror = function(error){
            return reject(error)
        };
    });
} 