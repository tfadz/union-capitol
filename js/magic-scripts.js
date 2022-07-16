jQuery(function($) {

	if (window.matchMedia('(min-width: 1025px)').matches) {
		var $bp = $('.page-template-page-business');
		var $sp = $('.page-template-page-strategy');
		var $tp = $('.page-template-page-team');

		if ($bp[0]) {

			var hero = new ScrollMagic.Controller();
			new ScrollMagic.Scene({
					triggerElement: ".feature-hero-main",
					duration: $('.content-block-wrapper').outerHeight(true),
				})
				.setPin(".feature-hero .feature-hero-main h1")
				//.addIndicators()
				.addTo(hero);
				
		} else if ($sp[0]) {
			var hero = new ScrollMagic.Controller();
			new ScrollMagic.Scene({
					triggerElement: ".feature-hero-main",
					duration: $('.content-block-wrapper').outerHeight(true) + 160,
				})
				.setPin(".feature-hero .feature-hero-main h1")
			  //.addIndicators()
				.addTo(hero);
		} else {
			var hero = new ScrollMagic.Controller();
			new ScrollMagic.Scene({
					triggerElement: ".feature-hero-main",
					duration: $('.content-block-wrapper').outerHeight(true) + 150,

				})
				.setPin(".feature-hero .feature-hero-main h1")
				//.addIndicators()
				.addTo(hero);

		}
	}

	// Homepage Hero Desktop Settings
	if (window.matchMedia('(min-width: 1025px)').matches) {

		var controller = new ScrollMagic.Controller();
		new ScrollMagic.Scene({
			triggerElement: ".block-content",
			duration: 500,
		})
		.setPin(".headline-start")
		.addTo(controller);
	}

	

	// Desktop Settings
	if (window.matchMedia('(min-width: 1025px)').matches) {
		var imageTwocol = new ScrollMagic.Controller();
		new ScrollMagic.Scene({
			triggerElement: ".image-two-col__media h2",
			duration: 620
		})
		.setPin(".image-two-col__media h2")
		.addTo(imageTwocol);
	}




	var imageTwocolFade = new ScrollMagic.Controller();
	if (window.matchMedia('(min-width: 1025px)').matches) {

		// tween = TweenMax.to(".image-two-col__media h2", .6, {opacity: 1});
		new ScrollMagic.Scene({
				triggerElement: ".image-two-col__media",
			})
			.setClassToggle('.image-two-col__media h2', 'show')
			// .setTween(tween)
			.addTo(imageTwocolFade);
	}



	// Hero Secondary - Desktop Secondary Hero Settings
	if (window.matchMedia('(min-width: 1025px)').matches) {

		var heroSecondary = new ScrollMagic.Controller();
		new ScrollMagic.Scene({
				triggerElement: ".feature-hero.secondary .feature-hero-main",
				duration: 700,
			})
			.setPin(".feature-hero.secondary .feature-hero-main h1")
			// .addIndicators()
			.addTo(heroSecondary);
	}


	if (window.matchMedia('(min-width: 1025px)').matches) {

		var heroSecondaryFade = new ScrollMagic.Controller();
		new ScrollMagic.Scene({
				triggerElement: ".feature-hero.secondary",
			})
			.setClassToggle('.feature-hero.secondary h1', 'show')
			// .setTween(tween)
			.addTo(heroSecondaryFade);
	}
});