jQuery(function($) {
  // window.setTimeout(function() { $('.desktop.navigation .menu-primary-container').addClass('show');}, 100);

  var controller = new ScrollMagic.Controller();

  new ScrollMagic.Scene({
   triggerElement: ".hero-img",
   duration: 500,
  })
  .setPin(".headline-start")
  .addTo(controller);
  
  
  var imageTwocol = new ScrollMagic.Controller();
  new ScrollMagic.Scene({
   triggerElement: ".image-two-col__media h2",
   duration: 600,
  })
  .setPin(".image-two-col__media h2")
  .addTo(imageTwocol);
  
  var imageTwocolFade = new ScrollMagic.Controller();
  // tween = TweenMax.to(".image-two-col__media h2", .6, {opacity: 1});
  new ScrollMagic.Scene({
   triggerElement: ".image-two-col__media",
   
  })
  .setClassToggle('.image-two-col__media h2', 'show')
  // .setTween(tween)
  .addTo(imageTwocolFade);
  
  var hero = new ScrollMagic.Controller();
  new ScrollMagic.Scene({
   triggerElement: ".feature-hero-main .feature-hero-main",
   duration: 700,
  })
  .setPin(".feature-hero .feature-hero-main h1")
  .addTo(hero);
});
  