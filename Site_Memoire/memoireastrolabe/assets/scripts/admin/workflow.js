const $ = require('jquery');
const { TypeEvenement, GenreMusical, Lieu, Etiquette, Label, Nationalite, Instrument, Musicien, Groupe, Evenement, Passage, EvenementCmpl, toBase64 } = require('../utils.js');

require('slick-carousel');
require('select2');
require('../utils.js');
require('../custom_dropify');
$(function(){

  /**
   * ------------------------------
   * SLICK
   * ------------------------------
   */
  $('#mainSlide').slick({
    dots: false,
    infinite: false,
    vertical: false,
    prevArrow: $('#progress-prev'),
    nextArrow: $('#progress-next'),
    adaptiveHeight: true,
    swipe: false,
  });
  // Event
  $('#Slide1-slide').slick({
    dots: false,
    infinite: false,
    vertical: false,
    arrows: false,
    swipe: false,
    adaptiveHeight: true,
  });
  // Groupe
  $('#Slide2-slide').slick({
    dots: false,
    infinite: false,
    vertical: false,
    arrows: false,
    swipe: false,
    adaptiveHeight: true,
  });
  //Médias
  $('#Slide3-slide').slick({
    dots: false,
    infinite: false,
    vertical: false,
    arrows: false,
    swipe: false,
    adaptiveHeight: true,
  });

  /** 
   * ------------------------------
   * CUSTOM SLIDE
   * ------------------------------
   */
  
  /** 
   * Nested slide height auto management
   */
  function autoSlideHeight(slide)
  {
    $('#mainSlide > .slick-list').css("height","auto");
    $(slide).find('.slick-list').css("height","auto");

    let component_height = 0;
    $(slide).find('.slide-component').each(function() {
      component_height += $(this).outerHeight(true);
    });
    $(slide).find('.invalid-feedback').each(function() {
      component_height += $(this).outerHeight(true);
    });

    const valHeight = $(slide).find(`.slick-slide.slick-current.slick-active`).outerHeight(true) + component_height;
    $(slide).find(`.slick-list`).outerHeight(valHeight);
    $(`#mainSlide > .slick-list`).outerHeight(valHeight);

    $('body').scrollTop($(".nested-slide-child-title").offset().top);
  }

  /** get initial values of title */
  let slidesTitlesValues = {};
  $(".nested-slide .slide-title").each(function(){
    slidesTitlesValues[$(this).parent('.nested-slide').attr('id')] = $(this).text();
  });

  function nestedSlideHandler(slide)
  {
    const initialTitle = slidesTitlesValues[$(slide).attr('id')];
    let slideTitle = $(slide).find(".slide-title");
    if ( slideTitle.length > 0 )
    {
      const slideChildTitle = $(slide).find('.slick-current.slick-active .nested-slide-child-title').text();
      slideChildTitle ? slideTitle.text(`${initialTitle} : ${slideChildTitle}`) : slideTitle.text(initialTitle);
    }
    autoSlideHeight($(slide));
  }

  /** init nested slide event */
  $("#mainSlide .slick-current.slick-active .nested-slide").each(function (){
    nestedSlideHandler($(this));
  });
  
  /** on change nested slide event */
  $("#mainSlide .nested-slide").on("afterChange", function (){
    nestedSlideHandler($(this));
  });

  CKEDITOR.on('instanceReady', function(ev){
    $('#mainSlide > .slick-list').css("height","max-content");
    $('.slick-active .nested-slide').find('.slick-list').css("height","max-content");
    
    ev.editor.on('resize',function(reEvent){
        $('#mainSlide > .slick-list').css("height","max-content");
        $('.slick-active .nested-slide').find('.slick-list').css("height","max-content");
    });
  })
  
  /**
   * ------------------------------
   * NAVIGATION & EVENT
   * ------------------------------
   */
  let mainSlide = 0;
  let subSlide = 0;
  $('#progress-prev').hide();

  /** Reset sub slides when switching main slides */
  $("#mainSlide").on('beforeChange', function (event, slick){
    $([$('#Slide1-slide'), $('#Slide2-slide'), $('#Slide3-slide')]).each(function(){
      $(this).slick('slickGoTo', 0);
    });
  });

  /** set active classes on nested slide */
  $([$('#Slide1-slide'), $('#Slide2-slide'), $('#Slide3-slide')]).each(function(){
    let first_child = $(this).find('.slick-slide[data-slick-index="0"]');
    
    if ( !first_child.hasClass('slick-active') ) first_child.addClass('slick-active');
    if ( !first_child.hasClass('slick-current') ) first_child.addClass('slick-current');

    $(this).on('afterChange', function(event, slick){
      subSlide = slick.currentSlide;
      let first_child = $(this).find('.slick-slide[data-slick-index="0"]');
      if ( $(this).slick('slickCurrentSlide') == 0 )
      {
        if ( !first_child.hasClass('slick-active') ) first_child.addClass('slick-active');
        if ( !first_child.hasClass('slick-current') ) first_child.addClass('slick-current');
      }
      else {
        if ( first_child.hasClass('slick-active') ) first_child.removeClass('slick-active');
        if ( first_child.hasClass('slick-current') ) first_child.removeClass('slick-current');
      }
      autoSlideHeight($(this));
    });
  });

  $("#mainSlide").on("afterChange", function (event, slick){
    mainSlide = $(this).slick('slickCurrentSlide');

    /** Manage main prev/next button display */
    if ( mainSlide == 0 && subSlide == 0 )
    {
      $('#progress-prev').hide();
      $('#progress-next').show();
    }
    else if ( subSlide != 0 ) 
    {
      $('#progress-prev').hide();
      $('#progress-next').hide();
    }
    else {
      $('#progress-prev').show();
      $('#progress-next').show();
    }

    $('.finalSubmit').on('click', createEvent);
  });

  // If click on progress, reset slides numbers
  if ( $('#progress-num .step').length > 0 )
  {
    $('#progress-num .step').each(function(i){
      $(this).on('click', function(){
        mainSlide = i;
        subSlide = 0;
      })
    })
  }

  $([$('.lienRetourEvent'), $('.lienLieu'), $('.lienParamSupp')]).each(function(i){ 
    $(this).on('click', function(){
      $('#Slide1-slide').slick('slickGoTo', i);
    })
  })

  $([$('.lienRetourPassage'), $('.lienGroup'), $('.lienLabel'), $('.lienMusicien'), $('.lienParamSuppGroup') , $('.lienParamSuppMusicien')]).each(function(i){
    $(this).on('click', function(){
      $('#Slide2-slide').slick('slickGoTo', i);
    })
  })

  $([$('.lienMedia'),$('.lienEtiquette')]).each(function(i){
    $(this).on('click', function(){
      $('#Slide3-slide').slick('slickGoTo', i);
    });
  });
  
  /* Image Or Link */
  function hideFileOrLink(file,link){
    if(file.parents('.vich-image').first().find('.dropify-filename-inner').html()) {
        link.parents('.inputCol').first().hide()
    } else if(link.val()) {
        file.parents('.inputCol').first().hide();
    }

    link.on('input', (e) => {
        if(link.val()) {
            file.parents('.inputCol').first().hide();
        } else {
            file.parents('.inputCol').first().show();
        }
    });

    file.on('change', (e) => {
        if(file.val()) {
            link.parents('.inputCol').first().hide();
        }
    });

    $(file).parents('.vich-image').first().find('.dropify-clear').on('click', function(e){
      link.parents('.inputCol').first().show();
    });
  }

  function embedHideFileOrLink(file,link){
    if(file.parents('.vich-image').first().find('.dropify-filename-inner').html()) {
        link.parent().hide()
    } else if(link.val()) {
        file.parent().parent().parent().hide();
    }

    link.on('input', (e) => {
        if(link.val()) {
            file.parent().parent().parent().hide();
        } else {
            file.parent().parent().parent().show();
        }
    });

    file.on('change', (e) => {
        if(file.val()) {
            link.parent().hide();
        }
    });

    $(file).parents('.vich-image').first().find('.dropify-clear').on('click', function(e){
      link.parent().show();
    });
  }
  // Event
  link = $('#evenement_lien');
  file = $('#evenement_imageFile_file');
  hideFileOrLink(file,link);

  //Group
  link = $('#groupe_lienImage');
  file = $('#groupe_imageFile_file');
  hideFileOrLink(file,link);

  //Label
  link = $('#label_lienLogo');
  file = $('#label_logoFile_file');
  hideFileOrLink(file,link);

  //musicien
  link = $('#musicien_lienImage');
  file = $('#musicien_imageFile_file');
  hideFileOrLink(file,link);




  /**
   * ------------------------------
   * SELECT2
   * ------------------------------
   */
  $('.select2').select2({
    multiple:false,
  });

  $('.select2-multiple').select2({
    multiple: true,
    minimumResultsForSearch: 10,
  });
/* gestion option passage groupe */

/**
 * Disable option
 */
 function select2OptionHandler(div)
 {
     $(div+' .select2 option:selected').each(function(){
         $(`${div} .select2 option[value=${$(this).val()}]`).attr("disabled","disabled");
     });
 }
 
 /**
  * Change and activate option
  */
 function select2Handler(div)
 {
     select2OptionHandler(div);
 
     // select2 change
     $(div+' .select2').on("change", function(){
         $(div+' .select2 option').removeAttr("disabled");
         select2OptionHandler(div);
     });
 }
 
 /**
  * Manage delete button for collection field
  */
 function deleteHandler(div,btn)
 {
     $(div+' .select2 option').removeAttr("disabled");
     select2OptionHandler(div);
     hideOrShowBtn(div,$(btn));
 }
 
 /**
  * Manage visibility of add btn
  */
 function hideOrShowBtn(div,btn)
 {
     if ( $(div+' .select2').length > 0 )
     {
         const nbOptionAvailable = $(div+' .select2').first().find('option:not([disabled=disabled])').length;
         if ( nbOptionAvailable > 0 ) btn.show();
         else btn.hide();
     } 
     else btn.show();
 }
function manageSelect2(div,btn)
{
    //gestion option available
    select2Handler(div);
    /**
     * Manage to change option when a new collection field is created
     */
    const optionAvailable = $(div+' .select2').first().find('option:not([disabled=disabled])');
    const nbOptionAvailable = optionAvailable.length;
    if ( nbOptionAvailable > 0 ) 
        $(div+' select.select2').last().val(optionAvailable.val()).trigger('change');

    /**
     * Visibility of add btn regarding number of items
     */
    hideOrShowBtn(div,$(btn));
    $(div+' i.fa-trash').on('click', function(){deleteHandler(div,btn)});

  

    //end gestion option 
}
  /**
   * ------------------------------
   * COLLECTION TYPE
   * ------------------------------
   */
  //collection membre
  document.querySelectorAll('#groupeMembres .add_item_link').forEach(btn => {
      btn.addEventListener("click", function(e){
        addFormToCollection(e, 'Membre', [{btn_class:'lienMusicien',btn_text:'Ajouter un musicien'},{btn_class:'lienParamSuppGroup',btn_text:'Ajouter un instrument'}] );
        const slide = $(this).parents('.nested-slide').first();
        autoSlideHeight(slide);
        $('.accordion-header').on('click', function(){
          $('#mainSlide > .slick-list').css("height","max-content");
          $(slide).find('.slick-list').css("height","max-content");
        });
        manageSelect2("#groupeMembres",btn)
      
      });
  });

  //collection passage
  document.querySelectorAll('#eventPassage .add_item_link').forEach(btn => {
    btn.addEventListener("click", function(b){
      addFormToCollection(b, 'Passage', [{btn_class:'lienGroup',btn_text:'Ajouter un Groupe'}] );
      const slide = $(this).parents('.nested-slide').first();
      autoSlideHeight(slide);
      $('.accordion-header').on('mouseup', function(){
        setTimeout(function(){
          autoSlideHeight(slide);
        }, 200);
      });
    });
  });

  //collection ressources
  document.querySelectorAll('#eventRessource .add_item_link').forEach(btn => {
    btn.addEventListener("click", function(b){
      addFormToCollection(b, 'Ressource', [{btn_class:'lienEtiquette',btn_text:'Ajouter une étiquette'}] );
      const slide = $(this).parents('.nested-slide').first();
      autoSlideHeight(slide);
      $('.accordion-header').on('click', function(){
        $('#mainSlide > .slick-list').css("height","auto");
        $(slide).find('.slick-list').css("height","auto");
      });
      var nom = "#eventRessource section > div:nth-child(1) input";
      var lien = "#eventRessource section > div:nth-child(2) input";
      var img = "#eventRessource section > div:nth-child(3)  input";
      var type = "#eventRessource section > div:nth-child(4) select";
      var etiquettes = "#eventRessource section > div:nth-child(5) select";
  
      var listParam = [$(nom),$(lien),$(img),$(type),$(etiquettes)];;
      $(listParam).each(function(){
        if ( $(this).attr('required') == 'required' && $(this).parent().find('span.invalid-feedback').length == 0 )
        {
          $(this).parent().addClass('inputCol').append('<span class="invalid-feedback"></span>');
        }
      })
      link = $('#eventRessource section:last > div:nth-child(2) input');
      file = $('#eventRessource section:last > div:nth-child(3)  input');
      embedHideFileOrLink(file,link);
    });
  });
  
  //instanciation du premier objet de chaque collection + cacher la suppression
  $('.add_item_link').trigger('click');
  $('#heading0> i:nth-child(1)').hide();
  $('#heading1 > i:nth-child(1)').hide();
  $('#heading2 > i:nth-child(1)').hide();
  
  /** Add Members to group */
  function addFormToCollection(e, title, array_add_btn) {
    const collectionHolder = document.querySelector(`.${e.currentTarget.dataset.collectionHolderClass}`);
  
    const item = document.createElement('section');
    item.innerHTML = collectionHolder
      .dataset
      .prototype
      .replace(
        /__name__/g,
        collectionHolder.dataset.index
      );
  
      const i = document.querySelectorAll('.accordion-item').length;
      let divTmp = document.createElement('div');
      let accordion = `
      <div class="accordion-item mt-3">\
        <h2 class="accordion-header d-flex align-items-center" id="heading${i}"> \
          <i class="fas fa-trash text-danger"></i>
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${i}" aria-expanded="true" aria-controls="collapse${i}">
            ${title}
          </button>
        </h2>
        <div id="collapse${i}" class="accordion-collapse collapse show" aria-labelledby="heading${i}">
          <div class="accordion-body">
        `;
        // for (let i = 0; i < array_add_btn.length; i++) {
        //   const element = array_add_btn[i];
        //   accordion = accordion+`<button type="button" class="${element.btn_class} vertical-next btn"><i class="fas fa-plus color-green"></i> ${element.btn_text}</button>`;
        // }

      divTmp.innerHTML = accordion;

    $(collectionHolder).find('.accordion').append(divTmp);
    $(collectionHolder).find('.accordion-body:last').append(item);
    for (let i = 0; i < array_add_btn.length; i++) {
      const element = array_add_btn[i]; 
                    $(collectionHolder).find('.accordion-body:last').append(`<button type="button" class="${element.btn_class} vertical-next btn"><i class="fas fa-plus color-green"></i> ${element.btn_text}</button>`);
    }
    $(collectionHolder).find('.accordion-body:last').append('<div class="feedbacks-embed slide-component">\
                <span class="valid-feedback-up"></span>\
                <span class="invalid-feedback-up"></span>\
            </div>');
    $(collectionHolder).find('.accordion').append("</div></div></div>");
    autoSlideHeight($(this).parent('.nested-slide'));
    collectionHolder.dataset.index++;

    $([$('.lienRetourPassage'), $('.lienGroup'), $('.lienLabel'), $('.lienMusicien'), $('.lienParamSuppGroup') , $('.lienParamSuppMusicien')]).each(function(i){
      $(this).on('click', function(){
        $('#Slide2-slide').slick('slickGoTo', i);
      })
    })

    $(".fas.fa-trash.text-danger").on('click', function() {
      $(this).parents('.accordion-item').remove();
    })

    $([$('.lienMedia'),$('.lienEtiquette')]).each(function(i){
      $(this).on('click', function(){
        $('#Slide3-slide').slick('slickGoTo', i);
      })
    })

    $(collectionHolder).find('.accordion-body:last .select2').select2();
    $(collectionHolder).find('.accordion-body:last .select2-multiple').select2();
    $(collectionHolder).find('.accordion-body:last .dropify').dropify({
      messages: {
        'default': 'Glisser-déposer un fichier ici ou cliquer',
        'replace': 'Glisser-déposer ou cliquer pour remplacer',
        'remove':  'Supprimer',
        'error':   'Oups, un problème est survenu.'
      }, 
      tpl: {
        wrap:            '<div class="dropify-wrapper"></div>',
        loader:          '<div class="dropify-loader"></div>',
        message:         '<div class="dropify-message"><span class="file-icon" /> <p class="fs-6">{{ default }}</p></div>',
        preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ replace }}</p></div></div></div>',
        filename:        '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
        clearButton:     '<button type="button" class="dropify-clear">{{ remove }}</button>',
        errorLine:       '<p class="dropify-error">{{ error }}</p>',
        errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
      }, 
      error: {
        'fileSize': 'Le fichier ({{ value }} est trop volumineux).',
        'imageFormat': 'Seuls ces formats ({{ value }} sont autorisés).'
      }
    });
  };

  const ressources = {};

  $('#eventRessource section > div:nth-child(3) input').on('change', function(e)
  {
    const file = e.target.files[0];
    const reader = new FileReader();
    reader.onload = function(e){
      ressources[file['name']] = e.target.result;
    }
    reader.readAsDataURL(file);
  });

  /**
   * ------------------------------
   * SUBMIT
   * ------------------------------
   */
  let listeObjetCreer = [];
  
  //Evenement
  $('#verifEvent').on('click',function(e){
    //mes champs
    //typeEvenement,dateDeb,dateFin,desc,titre,genreMusicaux
    var typeEvenement = '#evenement_typeEvenement';
    var dateDeb = "#evenement_dateDebut";
    var heureDeb = "#evenement_heureDebut";
    var dateFin = "#evenement_dateFin";
    var heureFin = "#evenement_heureFin";
    var desc = "#cke_evenement_description iframe";
    var titre = "#evenement_titre";
    var genreMusicaux = "#evenement_genresMusicaux";
    var lieu = "#evenement_lieu";
    var img = "#evenement_imageFile_file";
    var etiquettes = "#evenement_etiquettes";

    //les variables
    var listParam = [typeEvenement,dateDeb,heureDeb,dateFin,heureFin,desc,titre,genreMusicaux,lieu,img,etiquettes];
    var currentType = "Evenement";
    var routeVerif = routeVerifEvent;
    HandleForm(null,2,"#mainSlide",listParam,currentType,routeVerif);

  });

  $('.goBack').on('click', function(){
    $('#progress-prev').trigger('click');
  });

  //Evenement - Type Evenement 
  $("#addTypeEvent").on('click',function(e) {
    var typeEventLabel = $('#typeEventForm #type_evenement_label');
  
    var selectMainForm = "#evenement_typeEvenement";
    var currentMainSlideId = null;
    var currentSlider = null;
    var listParam = [typeEventLabel];
    var currentType = "TypeEvenement";
    var routeAdd = routeAddTypeEvent;
  
    HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
  });

  //Evenement - Etiquette
  $("#addEtiquette").on('click',function(e) {
    var motCles = $('#etiquetteForm #etiquette_motsCles');

    var selectMainForm = "#evenement_etiquettes";
    var currentMainSlideId = null;
    var currentSlider = null;
    var listParam = [motCles];
    var currentType = "Etiquette";
    var routeAdd = routeAddEtiquette;
    
    HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
  });

  //Evenement - Genre Musical
  $("#addGenreMusic").on('click',function(e) {
    var nomGenre = '#typeMusicForm #genre_musical_nom';

    var selectMainForm = "#evenement_genresMusicaux";
    var currentMainSlideId = null;
    var currentSlider = null;
    var listParam = [nomGenre];
    var currentType = "GenreMusic";
    var routeAdd = routeAddGenreMusic;

    HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
  });

  //Evenement - Lieu
  $("#addLieu").on('click',function(e) {
    var ville = '#lieuForm #lieu_ville';
    var cp = '#lieuForm #lieu_CP';
    var nomBat = '#lieuForm #lieu_nomBatiment';
    var adresse = '#lieuForm #lieu_adresse';
  
    var selectMainForm = ("#evenement_lieu");
    var currentMainSlideId = 0;
    var currentSlider = ("#Slide1-slide")
    var listParam = [ville,cp,nomBat,adresse];
    var currentType = "Lieu";
    var routeAdd = routeAddLieu;
    HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
  });

  //Passage
  $('#verifPassage').on('click',function(e){
    //les variables
    var listParam = $("#eventPassage .accordion-item input");
    var currentType = "Passage";
    var routeVerif = routeVerifPassage;  

    
    HandleForm(null,3,"#mainSlide",listParam,currentType,routeVerif);
  });

  //Passage - Groupe - Label 
  $("#addLabel").on('click',function(e) {
    var nom = '#labelForm #label_nom';
    var DateDeCrea = '#labelForm #label_dateCreation';
    var Desc = '#labelForm #label_description';
    var logoImg = '#labelForm #label_logoFile_file';
  
    var selectMainForm = ("#groupe_labels");
    var currentMainSlideId = 1;
    var currentSlider = ("#Slide2-slide")
    var listParam = [nom,DateDeCrea,Desc,logoImg];
    var currentType = "Label";
    var routeAdd = routeAddLabel;
      HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
    }
  );

  //Passage - Groupe - Nationalite 
  $("#addNationalite").on('click',function(e) {
    var nom = '#nationaliteForm #nationalite_nom';
    var codeISO = '#nationaliteForm #nationalite_codeISO';
    var selectMainForm = ("#groupe_nationalite");
    var currentMainSlideId = null;
    var currentSlider = null
    var listParam = [nom,codeISO];
    var currentType = "Nationalité";
    var routeAdd = routeAddNat;
      HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
    }
  );

  //Passage - Groupe - Genre Musical
  $("#addGenreMusic2").on('click',function(e) {
    var nomGenre = '#typeMusicForm2 #genre_musical_nom';

    var selectMainForm = "#groupe_genresMusicaux";
    var currentMainSlideId = null;
    var currentSlider = null;
    var listParam = [nomGenre];
    var currentType = "GenreMusic";
    var routeAdd = routeAddGenreMusic;

    HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
  });

  //Passage - Groupe - Etiquette
  $("#addEtiquette2").on('click',function(e) {
    var motCles = $('#etiquetteForm2 #etiquette_motsCles');

    var selectMainForm = "#groupe_etiquettes";
    var currentMainSlideId = null;
    var currentSlider = null;
    var listParam = [motCles];
    var currentType = "Etiquette";
    var routeAdd = routeAddEtiquette;
    
    HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
  });

  //Passage - Groupe - Instrument addInstr
  $("#addInstr").on('click',function(e) {
    var nom = $('#instrForm #instrument_nom');

    var selectMainForm = "#groupeMembres .select2-multiple";
    var currentMainSlideId = null;
    var currentSlider = null;
    var listParam = [nom];
    var currentType = "Instrument";
    var routeAdd = routeAddInsrtument;
    
    HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
  });

  //Passage - Groupe - Musicien 
  $("#addMusicien").on('click',function(e) {
    var pseudo = '#musicienForm #musicien_nomScene';
    var nom = '#musicienForm #musicien_nom';
    var prenom = '#musicienForm #musicien_prenom';
    var dateNaiss = '#musicienForm #musicien_dateNaissance';
    var etiquettes = '#musicienForm #musicien_etiquettes';
    var photo = '#musicienForm #musicien_imageFile_file';
    var nationalite = '#musicienForm #musicien_nationalite';
    //var LienImg = '#musicienForm #musicien_lien';  #collapse2 > div:nth-child(1) > section:nth-child(3) > div:nth-child(2)

    var selectMainForm = ("#groupeMembres section:last div:nth-child(2) select");
    var currentMainSlideId = 1;
    var currentSlider = ("#Slide2-slide");
    var listParam = [pseudo,nom,prenom,dateNaiss,photo,etiquettes,nationalite];
    var currentType = "Musicien";
    var routeAdd = routeAddMusicien;
    HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
    }

  );

  //Passage - Groupe - Musicien - Nationalite 
  $("#addNationalite2").on('click',function(e) {
    var nom = '#nationaliteForm2 #nationalite_nom';
    var codeISO = '#nationaliteForm2 #nationalite_codeISO';

    var selectMainForm = ("#musicien_nationalite");
    var currentMainSlideId = null;
    var currentSlider = null
    var listParam = [nom,codeISO];
    var currentType = "Nationalité";
    var routeAdd = routeAddNat;
    HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
  }
    

  );

  //Passage - Groupe - Musicien - Etiquette
  $("#addEtiquette3").on('click',function(e) {
    var motCles = $('#etiquetteForm3 #etiquette_motsCles');

    var selectMainForm = "#musicien_etiquettes";
    var currentMainSlideId = null;
    var currentSlider = null;
    var listParam = [motCles];
    var currentType = "Etiquette";
    var routeAdd = routeAddEtiquette;
    
    HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
  });

  //Passage - Groupe 
  $("#addGroup").on('click',function(e) {
    var nom = '#groupForm #groupe_nom';
    var date  = '#groupForm #groupe_dateCreation';
    var bio = '#cke_groupe_biographie iframe'; 
    var etiquettes= '#groupForm #groupe_etiquettes';
    var nationalite= '#groupForm #groupe_nationalites';
    var photo = '#groupForm #groupe_imageFile_file';
    var genreMusicaux= '#groupForm #groupe_genresMusicaux';
    var label= '#groupForm #groupe_labels';
    var membres= '#groupForm #groupeMembres section div:nth-child(2) select';
   // var LienImg= '#groupForm #groupe_nom';
    var selectMainForm =("#eventPassage section:last div:nth-child(3) select");
    var currentMainSlideId = 0;
    var currentSlider =("#Slide2-slide")
    var listParam = [nom,date,bio,nationalite,photo,etiquettes,genreMusicaux,label,membres]; //,LienImg
    var currentType = "Groupe";
    var routeAdd = routeAddGroup;

    $('#groupeMembres .select2 option').removeAttr("disabled");
    HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
    document.querySelectorAll('#groupeMembres .add_item_link').forEach(btn => {manageSelect2("#groupeMembres",btn)});
    }
  );

  //Media
  $('#verifMedia').on('click',function(e){
    // nom,lien,img,type,etiquettes
    var nom = "#eventRessource  section > div:nth-child(1) input";
    var lien = "#eventRessource section > div:nth-child(2) input";
    var img = "#eventRessource section > div:nth-child(3)  input";
    var type = "#eventRessource section > div:nth-child(4) select";
    var etiquettes = "#eventRessource section > div:nth-child(5) select";
    //les variables
    var listParam = [nom,lien,img,type,etiquettes];
    var currentType = "Ressource";
    var routeVerif = routeVerifMedia;

    HandleForm(null,4,"#mainSlide",listParam,currentType,routeVerif);
  });

  //Media  - Etiquette
  $("#addEtiquette4").on('click',function(e) {
    var motCles = $('#etiquetteForm4 #etiquette_motsCles');

    var selectMainForm = "#eventRessource section:last div:nth-child(5) select";
    var currentMainSlideId = 0;
    var currentSlider = '#Slide3-slide';
    var listParam = [motCles];
    var currentType = "Etiquette";
    var routeAdd = routeAddEtiquette;
    
    HandleForm(selectMainForm,currentMainSlideId,currentSlider,listParam,currentType,routeAdd);
  });
  
  /**
   * ------------------------------
   * SUBMIT - Fcts utils
   * ------------------------------
   */
  function HandleForm(selectMainForm,nextSlide,currentSlider,listParam,currentType,routeAdd){
    var validForm = true;
    var spans = [];
    var inputs = []; // all required input
    
    for (var param of listParam) {
      $(param).each(function(){
        if ( $(this).attr('required') == 'required' || $(this).attr('required') == true)
        {
          inputs.push($(this));
        }
      });
    }

    var dateDeb = Array();
    var dateFin = Array();
    if(currentType == "Evenement")
    {
      dateDeb.push({ date: '#evenement_dateDebut', time: '#evenement_heureDebut' });
      dateFin.push({ date: '#evenement_dateFin', time: '#evenement_heureFin' });

    }
    else if(currentType == "Passage")
    {
      $('#eventPassage .accordion-body').each(function(){
          for (var param of $(this).find('input[type="datetime-local"]')) {
              let id = $(param).attr('id');
              if ( id.toUpperCase().includes('DEB') && id.toUpperCase().includes('DATE'))
              {
                  dateDeb.push({ date: '#'+id, time: null })
              }
              else if ( id.toUpperCase().includes('FIN') && id.toUpperCase().includes('DATE'))
              {
                  dateFin.push({ date: '#'+id, time: null })
              }
          } 
        
      })
    }
    
    
    for (let input of inputs)
    {
      const span = $(input).parents('.inputCol').find('span.invalid-feedback');
      spans.push(span);
      if ( $(span).parents('.slick-slide').first().find('.feedbacks').length > 0 )
        $(span).parents('.slick-slide').first().find('.feedbacks').text('');
      const inputValue = $(input).val();
      const isEmpty = Array.isArray(inputValue)
        ? inputValue.length === 0
        : (inputValue || '').replaceAll(' ', '') === '';
      if ( 
        isEmpty &&
        $(input).attr("type") != "file" && 
        !$(input).hasClass("cke_wysiwyg_frame")
      ) {
        $(span).text('Vous devez insérer une valeur !').addClass('invalid-feedback-up')
        validForm = false;
        autoSlideHeight($('.slick-active .nested-slide'));
      }
      else {
        $(span).text('');
      }
    }

    for(let i = 0; i < dateDeb.length;i++)
    {
        if(dateDeb[i] != "" && dateFin[i] != "")
        {
            var dateDebut = dateDeb[i].date;
            var dateFinValue = dateFin[i].date;
            var debut = $(dateDebut).val();
            var fin = $(dateFinValue).val();
            if (dateDeb[i].time) debut += `T${$(dateDeb[i].time).val()}`;
            if (dateFin[i].time) fin += `T${$(dateFin[i].time).val()}`;
            var timestampDeb = new Date(debut).getTime()
            var timestampFin = new Date(fin).getTime()
            if(timestampDeb > timestampFin)
            {
              validForm = false;
              
              if($(dateDebut).parents('.inputCol').find('span.invalid-feedback').length==0)
              {
                $(dateDebut).parent().addClass('inputCol');
                $(dateDebut).after( '<span class="invalid-feedback invalid-feedback-up">La date de début doit être antérieure à celle de fin !</span>' );
              }
              else
              {
                $(dateDebut).parents('.inputCol').find('span.invalid-feedback').text('La date de début doit être antérieure à celle de fin !').addClass('invalid-feedback-up')
              }

              if($(dateFinValue).parents('.inputCol').find('span.invalid-feedback').length==0)
              {
                $(dateFinValue).parent().addClass('inputCol');
                $(dateFinValue).after( '<span class="invalid-feedback invalid-feedback-up">La date de début doit être antérieure à celle de fin !</span>' );
              }
              else
              {
                $(dateFinValue).parents('.inputCol').find('span.invalid-feedback').text('La date de début doit être antérieure à celle de fin !').addClass('invalid-feedback-up')
              }
            }
            else 
            {
              if($(dateDebut).val().replaceAll(' ','') != '' && $(dateDebut).parents('.inputCol').find('span.invalid-feedback').length!=0)
              $(dateDebut).parents('.inputCol').find('span.invalid-feedback').text('').addClass('invalid-feedback-up')
             
              if($(dateFinValue).val().replaceAll(' ','') != '' && $(dateFinValue).parents('.inputCol').find('span.invalid-feedback').length!=0)
                $(dateFinValue).parents('.inputCol').find('span.invalid-feedback').text('').addClass('invalid-feedback-up')
            
            }
        }
    }
    autoSlideHeight($('.slick-active .nested-slide'));

    //verif specific Ressource
    if(currentType == "Ressource"){
      $('#eventRessource section').each(function(){
        lien  = $( this ).find("div:nth-child(2) input").val();
        nom   = $( this ).find("div:nth-child(3) input").parents('.vich-image').first().find(' .dropify-filename-inner').html();
        feedback = $(this).parents('.accordion-body').first().find('.feedbacks-embed');
        if(nom == "" && lien == ""){
          feedback.text('Vous devez fournir au moins un lien ou une image !');
          feedback.addClass('invalid-feedback-up');
          validForm = false;
        }
        else{
          feedback.text('');
        }
      });
    }
    else if(currentType == "Musicien")
    {
      pseudo = $('#musicienForm #musicien_nomScene').val();
      nom = $('#musicienForm #musicien_nom').val(); 
      prenom = $('#musicienForm #musicien_prenom').val(); 
      feedback = $('#musicienForm').parents('.slick-slide').first().find('.feedbacks');
      if( pseudo.replaceAll(' ','') == '' && nom.replaceAll(' ','') == '' && prenom.replaceAll(' ','') == ''){
        feedback.text('Vous devez fournir au moins un nom de scène ou identifier l\'artiste (nom + prenom) !');
        feedback.addClass('invalid-feedback-up');
        validForm = false;
      }
      else if( pseudo.replaceAll(' ','') == '' && ( nom.replaceAll(' ','') == '' ||prenom.replaceAll(' ','') == '' )){
        feedback.text('L\'identification de l\'artiste est imcomplète (nom + prenom) !');
        feedback.addClass('invalid-feedback-up');
        validForm = false;
      }
      else{
        feedback.text('');
      }
    }

    if(validForm){
      let parent_form;
      if ( $(spans).length > 0 ) {
        $(spans).each(function(){$(this).text('');});
        parent_form = $(spans)[0].prev('.input-group').length > 0 ? $(spans)[0] : $(spans)[0].parents('.slick-slide').first().find('.feedbacks');
        parent_form.text('');
      }

      var newtemp = HandleType(listParam,currentType);
      //fetch post data
      fetch(routeAdd,{
        headers: {
          'Content-Type': 'application/json'
        },
        method: "POST",
        body: JSON.stringify(newtemp)
      })
      .then(res => res.json())
      .then(res => {
        if(res["success"] == true){
          if ( parent_form )
          {
            parent_form.html('<i class="fas fa-check text-success"></i>');
            parent_form.addClass('valid-feedback-up').removeClass('invalid-feedback-up');
          }
          const condition = !['Evenement','Ressource','Passage'].includes(currentType);
          
          if(listeObjetCreer[currentType] === undefined){
            listeObjetCreer[currentType] = {};
          }
          if (condition)
          {
            UpdateSelect2(selectMainForm, res['newName'], res['newId']);
            listeObjetCreer[currentType][(res['newId'])] = Object.assign(res['newItem'],{"id":res['newId'],'url':res['url']});
          }
          else {
            listeObjetCreer[currentType] = res['newItem'];
          }
          // Redirection
          if ( currentSlider != null && nextSlide !=null)
          {
            if ( condition ) $(currentSlider).slick('slickGoTo', nextSlide)
            else $('#progress-next').trigger('click');
          }

          if(currentType == "Ressource") creaRecap();
        }
        else{
          console.log('erreur d\'ajout : ' + res["errorText"]);
          if ( parent_form )
          {
            parent_form.text('erreur d\'ajout : ' + res["errorText"]);
            parent_form.removeClass('valid-feedback-up').addClass('invalid-feedback-up');
          }
        }
        autoSlideHeight($('.slick-active .nested-slide'));
      })
      .catch(function(error){
        console.log(error);
      });
    }
  };

  function HandleType(listParam,currentType){
    if(currentType == "Lieu"){
      var newtemp = new Lieu($(listParam[2]).val(),$(listParam[3]).val(),$(listParam[0]).val(),$(listParam[1]).val());
      return newtemp
    }
    if(currentType == "GenreMusic"){
      var newtemp = new GenreMusical($(listParam[0]).val());
      return newtemp
    }
    if(currentType == "TypeEvenement"){
      var newtemp = new TypeEvenement($(listParam[0]).val());
      return newtemp
    }    
    if(currentType == "Etiquette"){
      var newtemp = new Etiquette($(listParam[0]).val());
      return newtemp
    }  
    if(currentType == "Label"){
      var newtemp = new Label(
        $(listParam[0]).val(),
        $(listParam[1]).val(),
        $(listParam[2]).val(),
        { 'lien':$("#label_lienLogo").val(),
          'nom':$(listParam[3]).parents('.vich-image').first().find(' .dropify-filename-inner').html(),
          'file':$(listParam[3]).parents('.vich-image').first().find('.dropify-render img').attr('src'),
        },
        );
      return newtemp
    }
    if(currentType == "Nationalité"){
      var newtemp = new Nationalite($(listParam[0]).val(),$(listParam[1]).val());
      return newtemp
    }
    if(currentType == "Instrument"){
      var newtemp = new Instrument($(listParam[0]).val());
      return newtemp
    }  
    if(currentType == "Musicien"){
      var newtemp = new Musicien(
        $(listParam[0]).val(),
        $(listParam[1]).val(),
        $(listParam[2]).val(),
        $(listParam[3]).val(),
        { 
          'lien':$("#musicien_lienImage").val(),
          'nom':$(listParam[4]).parents('.vich-image').first().find(' .dropify-filename-inner').html(),
          'file':$(listParam[4]).parents('.vich-image').first().find('.dropify-render img').attr('src'),
        },
        $(listParam[5]).val(),
        $(listParam[6]).val(),
        );
      return newtemp
    }
    if(currentType == "Groupe"){
      listeMembres = [];
      $('#groupeMembres section').each(function(){
        listeMembres.push(
          {
            'id': $( this ).find("div:nth-child(2)  select").val(),
            'actif': $( this ).find("div:nth-child(1)  input").is(':checked'),
            'Intrument': $( this ).find("div:nth-child(3)  select").val(),
          }
        )
      });

      document.querySelectorAll('#groupeMembres .add_item_link').forEach(btn => {manageSelect2("#groupeMembres",btn)});
      
      var newtemp = new Groupe(
        $(listParam[0]).val(),
        $(listParam[1]).val(),
        $(listParam[2]).contents().find('body').html(),
        $(listParam[3]).val(),
        { 
          'lien':$("#groupe_lienImage").val(),
          'nom':$(listParam[4]).parents('.vich-image').first().find(' .dropify-filename-inner').html(),
          'file':$(listParam[4]).parents('.vich-image').first().find('.dropify-render img').attr('src'),
        },
        $(listParam[5]).val(),
        $(listParam[6]).val(),
        $(listParam[7]).val(),
        listeMembres,
        //$(listParam[9]).val(),
      );
      return newtemp
    }
    if(currentType == "Evenement"){
      var newtemp = new Evenement( //typeEvenement,dateDeb,dateFin,desc,titre,genreMusicaux,lieu,img
        $(listParam[0]).val(),
        $(listParam[1]).val(),
        $(listParam[2]).val(),
        $(listParam[3]).val(),
        $(listParam[4]).val(),
        $(listParam[5]).contents().find('body').html(),
        $(listParam[6]).val(),
        $(listParam[7]).val(),
        $(listParam[8]).val(),
        { 
          'lien':$('#evenement_lien').val(),
          'nom':$(listParam[9]).parents('.vich-image').first().find(' .dropify-filename-inner').html(),
          'file':$(listParam[9]).parents('.vich-image').first().find('.dropify-render img').attr('src'),
        },
        $(listParam[10]).val(),

      );
      return newtemp
    }
    if(currentType == "Passage"){
      listePassages = [];
      $('#eventPassage section').each(function(){
        listePassages.push(
          {
            'dateDeb': $( this ).find("div:nth-child(1)  input").val(),
            'dateFin': $( this ).find("div:nth-child(2)  input").val(),
            'groupe': $( this ).find("div:nth-child(3)  select").val(),
          }
        )
      });
      return listePassages;
    }
    if(currentType == "Ressource"){
      // nom,lien,img,type,etiquettes
      listeRessources = [];
      $('#eventRessource section').each(function(){ 
        const nom_file = $( this ).find("div:nth-child(3) input").parents('.vich-image').first().find(' .dropify-filename-inner').html();
        let ressource = {
          'nom': $( this ).find("div:nth-child(1) input").val(),
          'lien': $( this ).find("div:nth-child(2) input").val(),
          'img': { 
            'nom': nom_file,
            'file': ressources[nom_file],
          },
          'type': $( this ).find("div:nth-child(4) select").val(),
          'etiquettes': $( this ).find("div:nth-child(5) select").val(),
          'credits': $( this ).find("div:nth-child(6) input").val(),
        }
        listeRessources.push(ressource);
      });
      return listeRessources;
    }
  };

  function UpdateSelect2(selector,optLabel,optValue){
    $(selector).select2('destroy');
    var newOpt = new Option(optLabel,optValue, true, true);
    $(selector).append(newOpt).trigger('change');
    $(selector).select2();
  };
  
  function creaRecap(){
    /** Titre */
    $('.event-title').text(listeObjetCreer['Evenement']['titre']);
    /** Image */
    $('.event-image').html('');
    let src = null;
    let alt = null;
    if ( listeObjetCreer['Evenement']['img'] )
    {
      if ( listeObjetCreer['Evenement']['img']['file'] ) 
      {
        src = listeObjetCreer['Evenement']['img']['file'];
        alt = listeObjetCreer['Evenement']['img']['nom'];
      }
      else 
      {
        src = listeObjetCreer['Evenement']['img'];
        alt = 'Image inaffichable';
      }
    } 
    if ( src ) $('.event-image').append(`<img src='${src}' alt='${alt}'}>`);
    else $('.event-image').text('Aucune affiche renseignée');
    /** Type */
    if ( listeObjetCreer['Evenement']['typeEvenement'] ) $('.event-type').text(listeObjetCreer['Evenement']['typeEvenement']);
    else $('.event-type').text('Aucun type renseigné');
    /** Lieu */
    let lieu = `(${listeObjetCreer['Evenement']['lieu']['cp']}) ${listeObjetCreer['Evenement']['lieu']['ville']} - ${listeObjetCreer['Evenement']['lieu']['nomBat']}`;
    if ( listeObjetCreer['Evenement']['lieu']['adresse'] ) lieu += ` - ${listeObjetCreer['Evenement']['lieu']['adresse']}`;
    $('.event-lieu').text(lieu)
    /** Dates */
    $('.event-date-debut').text(new Date(`${listeObjetCreer["Evenement"]['dateDeb']}T${listeObjetCreer["Evenement"]['heureDeb']}`).formatFR());
    $('.event-date-fin').text(new Date(`${listeObjetCreer["Evenement"]['dateFin']}T${listeObjetCreer["Evenement"]['heureFin']}`).formatFR());
    /** Genres Musicaux */
    $('.event-genres').text('Aucun genre musical renseigné');
    if ( listeObjetCreer['Evenement']["genresMusicaux"].length > 0 )
    $('.event-genres').text(listeObjetCreer['Evenement']["genresMusicaux"][0])
    for ( let i = 1; i < listeObjetCreer['Evenement']["genresMusicaux"].length ; i++)
    {
      $('.event-genres').text(
        $('.event-genres').text() + ', ' +
        listeObjetCreer['Evenement']["genresMusicaux"][i]
      );
    }
    /** Etiquettes */
    $('.event-etiquettes').text('Aucune étiquette renseignée');
    if ( listeObjetCreer['Evenement']["etiquettes"].length > 0 )
    $('.event-etiquettes').text(listeObjetCreer['Evenement']["etiquettes"][0])
    for ( let i = 1; i < listeObjetCreer['Evenement']["etiquettes"].length ; i++)
    {
      $('.event-etiquettes').text(
        $('.event-etiquettes').text() + ', ' +
        listeObjetCreer['Evenement']["etiquettes"][i]
      );
    }
    /** Description */
    if ( listeObjetCreer['Evenement']['desc'] ) $('.event-description').html(listeObjetCreer['Evenement']['desc']);
    else $('.event-description').text('Aucune description renseignée');
    /** Passages */
    $('.event-passages').html('');
    for ( let passage of listeObjetCreer['Passage'])
    {
      $('.event-passages').html(
        $('.event-passages').html() + 
        `<tr>
          <td>${passage['dateDeb'] ? new Date(passage['dateDeb']).formatFRlight() : '/'}</td>
          <td>${passage['dateDeb'] ? new Date(passage['dateFin']).formatFRlight() : '/'}</td>
          <td>${passage['groupe'].nom}</td>
        </tr>`
      );
    }
    /** Ressources */
    $('.event-ressources').html('');
    for ( let ressource of listeObjetCreer['Ressource'])
    {
      let etiquettes = '';
      if ( ressource['etiquettes'].length > 0 )
      {
        etiquettes += ressource['etiquettes'][0];

        for ( let i = 1; i < ressource['etiquettes'].length; i++ )
        {
          etiquettes += `, ${ressource['etiquettes'][i]}`;
        }
      }
      else etiquettes = '/';
      
      if ( ressource['img']['file'] )
      {
        $('.event-ressources').html(
          $('.event-ressources').html() + 
          `<tr>
            <td>${ressource['titre']}</td>
            <td>${ressource['type']}</td>
            <td>${etiquettes}</td>
          </tr>`
        );
      }
      else {
        $('.event-ressources').html(
          $('.event-ressources').html() + 
          `<tr>
            <td><a href="${ressource['img']}" target="_blank">${ressource['titre']}</a></td>
            <td>${ressource['type']}</td>
            <td>${etiquettes}</td>
          </tr>`
        );
      }
    }

    /** Entities */
    $('.entities').html('');
    for ( const [entity, objects] of Object.entries(listeObjetCreer) )
    {
      if ( !['Ressource','Passage','Evenement'].includes(entity) )
      {
        for ( const[id, object] of Object.entries(objects) )
        {
          $('.entities').append(`<li><a href='${object.url}' target="_blank">${entity}</a></li>`)
        }
      }
    }
  };

  function createEvent(){
    
    listeRessources = [];
    $('#eventRessource section').each(function(){
      listeRessources.push(
        {
          'nom': $( this ).find("div:nth-child(1)  input").val(),
          'lien': $( this ).find("div:nth-child(2)  input").val(),
          'img': { 
            'nom':$( this ).find("div:nth-child(3)  input").parents('.vich-image').first().find(' .dropify-filename-inner').html(),
            'file':$( this ).find("div:nth-child(3)  input").parents('.vich-image').first().find('.dropify-render img').attr('src'),
          },
          'type': $( this ).find("div:nth-child(4)  select").val(),
          'etiquettes': $( this ).find("div:nth-child(5)  select").val(),
          'credits': $( this ).find("div:nth-child(6)  input").val(),
        }
      )
    });

    listePassages = [];
    $('#eventPassage section').each(function(){
        listePassages.push(
          {
            'dateDeb': $( this ).find("div:nth-child(1)  input").val(),
            'dateFin': $( this ).find("div:nth-child(2)  input").val(),
            'groupe': $( this ).find("div:nth-child(3)  select").val(),
          }
        )
    });

    //récup les val
    var event_typeEvenement = $('#evenement_typeEvenement').val();
    var event_dateDeb       = $("#evenement_dateDebut").val();
    var event_heureDeb      = $("#evenement_heureDebut").val();
    var event_dateFin       = $("#evenement_dateFin").val();
    var event_heureFin      = $("#evenement_heureFin").val();
    var event_desc          = $("#cke_evenement_description iframe").contents().find('body').html();
    var event_titre         = $("#evenement_titre").val();
    var event_genreMusicaux = $("#evenement_genresMusicaux").val();
    var event_lieu          = $("#evenement_lieu").val();
    var event_img           = { 'nom':  $("#evenement_imageFile_file").parents('.vich-image').first().find(' .dropify-filename-inner').html(),
                                'file': $("#evenement_imageFile_file").parents('.vich-image').first().find('.dropify-render img').attr('src'),
                              };
    var event_etiquettes    = $("#evenement_etiquettes").val();
    var event_ressources    = listeRessources;
    var event_passages      = listePassages;

    var temp = new EvenementCmpl(event_typeEvenement,event_dateDeb,event_heureDeb,event_dateFin,event_heureFin,event_desc,event_titre,event_genreMusicaux,event_lieu,event_img,event_etiquettes,event_ressources,event_passages)
    fetch(routeAddEvent,{
      headers: {
        'Content-Type': 'application/json',
      },
      method: "POST",
      body: JSON.stringify(temp)
    })
    .then(res => res.json())
    .then(res => {
      if(res["success"] == true){
        window.location.href = res['url'];
      }
      else {
        console.log('erreur d\'ajout : '+res["errorText"]);
        if ( parent_form )
        {
          parent_form.text('erreur d\'ajout : '+res["errorText"]);
          parent_form.removeClass('valid-feedback-up').addClass('invalid-feedback-up');
        }
      }
      autoSlideHeight($('.slick-active .nested-slide'));
    })
    .catch(function(error){
      console.log(error);
    }); 
    $('.vertical-next').on('mouseup', function(){
      setTimeout(function(){
        autoSlideHeight($('.slick-active .nested-slide'));
      }, 200);
    });
  };
})