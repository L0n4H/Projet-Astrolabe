const progressBar = document.getElementById("progress-bar");
const progressNext = document.getElementById("progress-next");
const progressPrev = document.getElementById("progress-prev");
const steps = document.querySelectorAll(".step");
let active = 1;
const $ = require('jquery');

$(progressPrev).hide();

//Navigation de la barre de progression
progressNext.addEventListener("click", () => {
    active++;
    if (active > steps.length) {
        active = steps.length;
    }
    updateProgress();
});

progressPrev.addEventListener("click", () => {
    active--;
    if (active < 1) {
        active = 1;
    }
    updateProgress();
});

const updateProgress = () => {
    // ajout élément actif
    steps.forEach((step, i) => {
      if (i < active) {
        step.classList.add("active");
      } else {
        step.classList.remove("active");
      }
    });
    // largeur de la barre
    progressBar.style.width = 
      ((active - 1) / (steps.length - 1)) * 100 + "%";
    // active/desctive les boutons
    if (active === 1) {
      $(progressPrev).hide();
    }else {
      $(progressPrev).show();
    }
  };

for (let i = 0; i < steps.length; i++) {
    const step = steps[i];
      step.addEventListener('click',function(){
        if(active>i+1){ //seul le retour en arrière est possible via la timeline
          $('#mainSlide').slick('slickGoTo',i);
          active= i+1;  
          updateProgress();
        }
    })
}