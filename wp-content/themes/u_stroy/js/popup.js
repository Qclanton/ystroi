$(document).ready(function() {
  $(".test-popup-link").magnificPopup({type:'image'});
  
  $(".owl-carousel").owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
//    autoplay: true,
//    autoplayTimeout: 5000,
    navText: "",
    responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:5,
          nav:true
      },
      1000:{
          items:5,
          nav:true
      }
    }
});
  
});
