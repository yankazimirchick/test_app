const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    visibilityFullFit: true,
    slidesPerView: 4,
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: "auto",
        slidesOffsetBefore:40,
        loopedSlides:2
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 4,
      }
    },
    
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable:true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
      dragSize:50,
      draggable: true,
    },
  });
  //togle list
  var details = document.querySelectorAll("details");
  for(i=0;i<details.length;i++) {
    details[i].addEventListener("toggle", accordion);
  }
  function accordion(event) {
    if (!event.target.open) return;
      var details = event.target.parentNode.children;
      for(i=0;i<details.length;i++) {
        if (details[i].tagName != "DETAILS" || 
           !details[i].hasAttribute('open') || 
           event.target == details[i]) {
           continue;
        }
        details[i].removeAttribute("open");
      }
  }