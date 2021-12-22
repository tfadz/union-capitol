var unionFunctions = (function($) {

  var init = function() {
    hero();
    videoSlider();
    mobileMenu();
    modals();
    tabs();
  },
  
  hero = function() {

  },
  
  tabs = function() {
    
    $('.nav.nav-tabs > li:first-child > a').addClass('active');
  }

  videoSlider = function() {
    $('.video-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      arrows: false,
      dots: true,
      swipe: true,
      cssEase: 'ease-in-out',
      speed: 350,
      infinite: true,
      fade: false
  });


  $('.video-slider .slick-current').find('.card').addClass('show');
  $('.video-slider .slick-current').find('.featured-img-wrapper figure').addClass('active');
  
  $('.video-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $('.slick-current').find('.card').removeClass('show');
    $('.slick-current').find('.featured-img-wrapper figure').removeClass('active');
  });

  $('.video-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
     $('.slick-current').find('.card').addClass('show');
     $('.slick-current').find('.featured-img-wrapper figure').addClass('active');

  });
  },
  
  mobileMenu = function() {
    $('.hamburger-box').click(function (e) {
      e.preventDefault();
      $(this).toggleClass('active');
      $(this).find('.hamburger').toggleClass('active');
      $('.nav-modal').toggleClass('active');
      $('.menu-mobile').toggleClass('show');
    });

    $('li.menu-item-has-children').click(function (e) {
      $(this).find('.sub-menu').toggle();
    });
  },
  
    modals = function() {
    // This triggers the vimeo video modal for the featured cards
     $('.play-video').click(function(event) {
        // $(this).next().clone().appendTo(".modal-wrapper").addClass('active');
       $(this).parent().next().find('.modal').clone().appendTo(".modal-wrapper").addClass('active');

       $('.modal-wrapper').addClass('active');
        event.stopPropagation();

     });

     $('.img-open').click(function(event) {
       $(this).find('.modal').clone().appendTo(".modal-wrapper").addClass('active');
       $('.modal-wrapper').addClass('active');
        event.stopPropagation();

     });

     $('.modal-wrapper .close-modal').click(function(event) {
      $(this).parent().removeClass('active');
      $('.modal-wrapper .modal').remove();
      event.stopPropagation();
     });

    

    $("body").click(function(){
      $('.modal-wrapper').removeClass('active');
      $('.modal-wrapper .modal').remove();
    });

  }


  function logoSwitch () {
    $('.headline-change').each(function() {
      $(this).css('top',
        $('.headline-start').offset().top - $(this).closest('.hero-row').offset().top);
    });
  };

  $(document).scroll(function() {
    logoSwitch(); 
  });

  logoSwitch();
  
  AOS.init({
  	  offset: 200,
  	  once: false,
  	  duration: 700,
  	  easing: 'ease-in-out',
  	  delay: 50,
  	  disable: 'mobile'
  })

return {
  init:init
};

})(jQuery);

jQuery(document).ready(unionFunctions.init );

