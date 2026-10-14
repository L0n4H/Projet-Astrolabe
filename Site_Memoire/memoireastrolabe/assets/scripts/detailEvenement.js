const $ = require('jquery');

require('slick-carousel');
require('select2');

import PhotoSwipeLightbox from '/node_modules/photoswipe/dist/photoswipe-lightbox.esm.js';
import 'bootstrap/js/dist/modal';
import { initAllSelect2 } from './utils';


const lightbox = new PhotoSwipeLightbox({
  // may select multiple "galleries"
  gallerySelector: '#gallery',

  // Elements within gallerySelector (slides)
  childSelector: 'a',

  showHideAnimationType: 'zoom',  
  showAnimationDuration: 500,

  // Include PhotoSwipe Core
  // and use absolute path (that starts with http(s)://)
  pswpModule: () => import('/node_modules/photoswipe/dist/photoswipe.esm.js'),

  // Include CSS file,
  // (if you haven't included in via <link>)
  pswpCSS: import('/node_modules/photoswipe/dist/photoswipe.css'),
});

lightbox.on('initialZoomIn', () => {
  $(".pswp__img").css('visibility','hidden')
  $(".pswp__zom-wrap").css('object-fit','contain');
  $(".pswp__img").css('object-fit','contain')
})

lightbox.on('initialZoomInEnd', (index,item) => { 
  setTimeout(function(){
    $(".pswp__img").css('visibility','visible')
  }, 500);
}),

lightbox.init();

$(function() {
  
  initAllSelect2();

  $('.select2').select2({
    multiple: false,
    dropdownParent: $("#addRessource")
  });

  var lien = $("#ressource_lien");
  var file = $("#ressource_file_file");

  lien.on('input', (e) => {
    if(lien.val()) {
      file.parents('.vich-image').parent().hide();
    } else {
      file.parents('.vich-image').parent().show();
    }
  });

  $(".dropify").on('dropify.afterClear', function(event, element){
    lien.parent().show();
  });

  file.on('change', (e) => {
    if(file.val()) {
      lien.parent().hide();
    } else {
      lien.parent().show();
    }
  });


  $("#ressourceForm").on('submit',function(e) {
    if (!lien.val() && !file.val()) {
      e.preventDefault();
      $("span.invalid-feedback").text('Vous devez insérer un lien ou une image !')
        .attr('style', 'margin:auto !important; width: auto !important; display: block;');
    } else {
      $("span.invalid-feedback").text('');
    }
  });
});


$('.responsive-carousel').slick({
    dots: true,
    infinite: false,
    vertical: false,
    speed: 300,
    prevArrow: '<button type="button" class="slick-btn btn prev"><</button>',
    nextArrow: '<button type="button" class="slick-btn btn next">></button>',
    mobileFirst: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    responsive : [
      {
        breakpoint: 576,
        settings : {
          slidesToScroll: 3,
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 769,
        settings : {
          slidesToScroll: 4,
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 992,
        settings : {
          slidesToScroll: 5,
          slidesToShow: 5,
        }
      },
      {
        breakpoint: 1400,
        settings : {
          slidesToScroll: 6,
          slidesToShow: 6,
        }
      }
    ]
});