jQuery(document).ready(function(){
    jQuery(".owl-carousel").owlCarousel({
      stagePadding: 0,
      loop:true,
      margin:10,
      nav: false,
      autoplay: true,
      slideTransition: 'linear',
      autoplayTimeout: 2000,
      autoplaySpeed: 1000,
      autoplayHoverPause: true,
      responsive:{
          0:{
              items:4
          },
          600:{
              items:6
          },
          1000:{
              items:5
          }
      }
  })
    });



    