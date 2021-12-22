jQuery(function($) {
  // window.setTimeout(function() { $('.desktop.navigation .menu-primary-container').addClass('show');}, 100);

  var controller = new ScrollMagic.Controller();

  new ScrollMagic.Scene({
   triggerElement: ".row-start",
   duration: 500,
  })
  .setPin(".headline-start")
  .addTo(controller);
  
  
  // var controller2 = new ScrollMagic.Controller();
  // // tween = TweenMax.to(".image-two-col__media h2", .2, {color: "#004279"});
  // 
  // new ScrollMagic.Scene({
  //  triggerElement: ".image-two-col__media",
  //  duration: 800,
  // })
  // .setPin(".image-two-col__media h2")
  // // .setTween(tween)
  // .addTo(controller2);
});
  