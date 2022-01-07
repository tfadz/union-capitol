jQuery(function($) {
  						

  var controller = new ScrollMagic.Controller();

  new ScrollMagic.Scene({
   triggerElement: ".block-content",
   duration: 500,
  })
  .setPin(".headline-start")
  .addTo(controller);
  
  
  var imageTwocol = new ScrollMagic.Controller();
  new ScrollMagic.Scene({
   triggerElement: ".image-two-col__media h2",
   duration: 620
  })
  .setPin(".image-two-col__media h2")
  // .addIndicators()
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
   duration: 750,
  })
  .setPin(".feature-hero .feature-hero-main h1")
  .addTo(hero);
});
  