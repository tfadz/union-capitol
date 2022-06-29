jQuery(function($) {
  
  if (window.matchMedia('(min-width: 769px)').matches) {
    var $bp = $('.page-template-page-business');
    var $sp = $('.page-template-page-strategy');
    var $tp = $('.page-template-page-team');
    
    if($bp[0]) {
      var hero = new ScrollMagic.Controller();
      new ScrollMagic.Scene({
       triggerElement: ".feature-hero-main",
       duration: $('.content-block-wrapper').outerHeight(true) +20,
      })
      .setPin(".feature-hero .feature-hero-main h1")
      //.addIndicators()
      .addTo(hero);
    }
    
    else if($sp[0]) {
      var hero = new ScrollMagic.Controller();
      new ScrollMagic.Scene({
       triggerElement: ".feature-hero-main",
       duration: $('.content-block-wrapper').outerHeight(true) + 140,
      })
      .setPin(".feature-hero .feature-hero-main h1")
      // .addIndicators()
      .addTo(hero);
    }
    
    else {
      var hero = new ScrollMagic.Controller();
      new ScrollMagic.Scene({
       triggerElement: ".feature-hero-main",
       duration: $('.content-block-wrapper').outerHeight(true) + 50,
       
      })
      .setPin(".feature-hero .feature-hero-main h1")
      // .addIndicators()
      .addTo(hero);
      
    }
    
  }
  						
  // Homepage Hero Desktop Settings
  if (window.matchMedia('(min-width: 769px)').matches) {

  var controller = new ScrollMagic.Controller();

  new ScrollMagic.Scene({
   triggerElement: ".block-content",
   duration: 500,
  })
  .setPin(".headline-start")
  .addTo(controller);
}

  // Mobile Settings
  if (window.matchMedia('(max-width: 768px)').matches) {

  var controller = new ScrollMagic.Controller();

  new ScrollMagic.Scene({
   triggerElement: ".block-content",
   duration: 350,
  })
  .setPin(".headline-start")
  .addTo(controller);
  }
  
  
  // Desktop Settings
  if (window.matchMedia('(min-width: 769px)').matches) {
    var imageTwocol = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
     triggerElement: ".image-two-col__media h2",
     duration: 620
    })
    .setPin(".image-two-col__media h2")
    .addTo(imageTwocol);
  }
  
  // Mobile Settings
  if (window.matchMedia('(max-width: 768px)').matches) {
    var imageTwocol = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
     triggerElement: ".image-two-col__media h2",
     duration: 200
    })
    .setPin(".image-two-col__media h2")
    .addTo(imageTwocol);
  }

  
  var imageTwocolFade = new ScrollMagic.Controller();
  // tween = TweenMax.to(".image-two-col__media h2", .6, {opacity: 1});
  new ScrollMagic.Scene({
   triggerElement: ".image-two-col__media",
  })
  .setClassToggle('.image-two-col__media h2', 'show')
  // .setTween(tween)
  .addTo(imageTwocolFade);
  
  

  
  // Hero - Mobile Hero Settings
  if (window.matchMedia('(max-width: 768px)').matches) {
    var hero = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
     triggerElement: ".feature-hero-main .feature-hero-main",
     duration: 360,
    })
    .setPin(".feature-hero .feature-hero-main h1")
    //.addIndicators()
    .addTo(hero);
  }
  
  
  
  
// Hero Secondary - Desktop Secondary Hero Settings
if (window.matchMedia('(min-width: 769px)').matches) {
  
  var heroSecondary = new ScrollMagic.Controller();
  new ScrollMagic.Scene({
   triggerElement: ".feature-hero.secondary .feature-hero-main",
   duration: 700,
  })
  .setPin(".feature-hero.secondary .feature-hero-main h1")
  // .addIndicators()
  .addTo(heroSecondary);
}

// Hero Secondary - Mobile Secondary Hero Settings
if (window.matchMedia('(max-width: 768px)').matches) {
  
  var heroSecondary = new ScrollMagic.Controller();
  new ScrollMagic.Scene({
   triggerElement: ".feature-hero.secondary .feature-hero-main",
   duration: 380,
  })
  .setPin(".feature-hero.secondary .feature-hero-main h1")
  // .addIndicators()
  .addTo(heroSecondary);
}



var heroSecondaryFade = new ScrollMagic.Controller();
new ScrollMagic.Scene({
 triggerElement: ".feature-hero.secondary",
})
.setClassToggle('.feature-hero.secondary h1', 'show')
// .setTween(tween)
.addTo(heroSecondaryFade);
});
  