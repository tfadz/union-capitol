jQuery(function($) {

	function homeHero() {
		var $hc = $('.headline-change');
		if ($hc[0]) {
			if (window.matchMedia('(min-width: 1025px)').matches) {

				$('.headline-change').each(function() {
					$(this).css('top',
						$('.headline-start').offset().top - $(this).closest('.hero-row').offset().top);
				});
			}
		}

	};

	function imageTwoCol() {
		if (window.matchMedia('(min-width: 1025px)').matches) {

			$('.image-two-col__content h2').each(function() {
				$(this).css('top', $('.image-two-col__media h2').offset().top - $(this).closest('.image-two-col-row').offset().top);
			});
		}
	};

	function contentBusiness() {
		var $cbs = $('.content-business-section h2.headline');
		if ($cbs[0]) {
			if (window.matchMedia('(min-width: 1025px)').matches) {

				$('.content-business-section h2.headline').each(function() {
					$(this).css('top', $('.feature-hero.secondary h1').offset().top - $(this).closest('.content-business-section').offset().top);
				});
			}
		}

	};

	function hero() {
		var $cb = $('.content-block .headline');
		if (window.matchMedia('(min-width: 1025px)').matches) {

			if ($cb[0]) {
				$('.content-block .headline').each(function() {
					var $fh = $('.feature-hero');
					if ($fh[0]) {
						$(this).css('top', $('.feature-hero h1').offset().top - $(this).closest('.marvin').offset().top - 100);
					}
				});
			}
		}
	};

	function heroTeam() {
		var $team = $('.page-template-page-team');
		if (window.matchMedia('(min-width: 1025px)').matches) {

			if ($team[0]) {
				$('.page-template-page-team .content-block .headline').each(function() {
					$(this).css('top', $('.feature-hero h1').offset().top - $(this).closest('.marvin').offset().top - 120);
				});
			}
		}
	};


	function contentList() {
		var $cls = ('.content-list-section');
		if (window.matchMedia('(min-width: 1025px)').matches) {

			if ($cls[0]) {
				$('.content-list-section h2.headline').each(function() {
					$(this).css('top', $('.feature-hero.secondary h1').offset().top - $(this).closest('.content-list-section').offset().top);
				});
			}
		}
	};

	function contentIndustry() {
		if (window.matchMedia('(min-width: 1025px)').matches) {

			$('.content-industry-section h2.headline').each(function() {
				$(this).css('top', $('.feature-hero.secondary h1').offset().top - $(this).closest('.content-industry-section').offset().top);
			});
		}
	};



	$(document).scroll(function() {
		if (typeof homeHero === "function") {
			homeHero();
		}
		if (typeof imageTwoCol === "function") {
			imageTwoCol();
		}
		if (typeof hero === "function") {
			hero();
		}
		if (typeof heroTeam === "function") {
			heroTeam();
		}
		if (typeof contentList === "function") {
			contentList();
		}
		if (typeof contentIndustry === "function") {
			contentIndustry();
		}
		if (typeof contentBusiness === "function") {
			contentBusiness();
		}
	});

});