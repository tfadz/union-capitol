jQuery(function($) {
	function homeHero () {
    $('.headline-change').each(function() {
      $(this).css('top',
        $('.headline-start').offset().top - $(this).closest('.hero-row').offset().top);
    });
  };
	
	function imageTwoCol () {
    $('.image-two-col__content h2').each(function() {
      $(this).css('top',$('.image-two-col__media h2').offset().top - $(this).closest('.image-two-col-row').offset().top);
    });
  };
	
	
	function hero () {
    $('.content-block .headline').each(function() {
      $(this).css('top', $('.feature-hero h1').offset().top - $(this).closest('.marvin').offset().top);
    });
  };
	
	
	function contentList () {
		$('.content-list-section h2.headline').each(function() {
			$(this).css('top',$('.feature-hero.secondary h1').offset().top - $(this).closest('.content-list-section').offset().top);
		});
	};
	
	function contentIndustry () {
		$('.content-industry-section h2.headline').each(function() {
			$(this).css('top',$('.feature-hero.secondary h1').offset().top - $(this).closest('.content-industry-section').offset().top);
		});
	};
	
	function contentBusiness () {
		$('.content-business-section h2.headline').each(function() {
			$(this).css('top',$('.feature-hero.secondary h1').offset().top - $(this).closest('.content-business-section').offset().top);
		});
	};

  $(document).scroll(function() {
    homeHero();
		imageTwoCol();
		hero();
		contentList();
		contentIndustry(); 
		contentBusiness(); 
  });

  homeHero();
	imageTwoCol();
	hero();
	contentList();
	contentIndustry();
	contentBusiness();
});