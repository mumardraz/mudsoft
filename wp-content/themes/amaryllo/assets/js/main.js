/* Main scripts file. */

window.mp = {
	Behavior: {},
	Settings: {},
	Functions: {},
	runBehaviors: function() {}
};

jQuery.fn.extend({
	makeClass: function(className) {
		for (var i = 0, len = this.length; i < len; i++) {
			this.removeClass(className);
			this.addClass(className);
		}
	}
});

/**
 * Default (base) behavior
 */
mp.Behavior.default = function(context) {
	jQuery('html').removeClass('no-js');
}

/**
 * Execute all Behaviors.
 */
mp.runBehaviors = function(context) {
	if (typeof context == 'undefined') context = document;
	var behaviors = Object.keys(mp.Behavior);
	for (var i = 0, len = behaviors.length; i < len; i++) {
		mp.Behavior[behaviors[i]](context);
	}
}
/**
 * Run All behaviors on document ready.
 */
jQuery(document).ready(function() {
	mp.runBehaviors(document);
});


(function($) {
	/**
	* Slider on main page
	*/
	mp.Behavior.homeSlider = function(context) {
		var slideshow_speed = $("#slideshow_speed").val();
		var animation_speed = $("#animation_speed").val();
		var autoscroll = $("#autoscroll").val();
		if(autoscroll=='yes') { 
			var autoplay = slideshow_speed;
		}
		else {
			var autoplay = false;
		}	
		var $sliderContainer = $('.slider').find('.slider-container');
		if($sliderContainer.length) {
            $sliderContainer.owlCarousel({
				slideSpeed : animation_speed,
				paginationSpeed : 400,
				singleItem:true,
				autoPlay:autoplay,
                items:1,
                responsive: true,
                itemsDesktop: [979,1],
                itemsDesktopSmall: [979,1],
                itemsTablet: [768,1],
                itemsTabletSmall: 1,
                itemsMobile: 1
            });

		}
	}
	mp.Behavior.testimonialsSlider = function(context) {

		var $sliderContainer = $('.testimonials-block').find('.slider-container');
		if($sliderContainer.length) {
            $sliderContainer.owlCarousel({
                items: 3,
                itemsDesktop: [979,3],
                itemsDesktopSmall: [979,3],
                itemsTablet: [768,3],
                itemsTabletSmall: [768,3],
                itemsMobile: [767,1],
                pagination: false,
                navigation: true,
                navigationText: ['',''],
                addClassActive: true,
                afterMove: function(){
                    addOpacity();
                },
                afterInit: function(){
                    $activeFirstSlide = $sliderContainer.find('.owl-item.active:eq( 0 )');
                    $activeLastSlide = $sliderContainer.find('.owl-item.active:eq( 2 )');
                    $activeFirstSlide.addClass('middle-opacity');
                    $activeLastSlide.addClass('middle-opacity');
                }
            });

            var addOpacity = function addOpacitySlides(){
                $itemsWithOpacity = $sliderContainer.find('.middle-opacity');
                $itemsWithOpacity.removeClass('middle-opacity');
                $activeFirstSlide = $sliderContainer.find('.owl-item.active:eq( 0 )');
                $activeLastSlide = $sliderContainer.find('.owl-item.active:eq( 2 )');
                $activeFirstSlide.addClass('middle-opacity');
                $activeLastSlide.addClass('middle-opacity');

            }
		}
	}

    mp.Behavior.testimonialsTextSlider = function(context) {
        var $testimonialsTextContainer = $('#testimonials-text-container');
        if($testimonialsTextContainer.length) {
            $testimonialsTextContainer.owlCarousel({
                items: 1,
                pagination: false,
                navigation: true,
                navigationText: ['',''],
                itemsDesktop: [979,1],
                itemsDesktopSmall: [979,1],
                itemsTablet: [768,1],
                itemsTabletSmall: [768,1],
                itemsMobile: [767,1]
            });
        }
    }
    mp.Behavior.responsiveMenu = function(context) {
        var $nav = $('.menu-top-mob-container');
        if($nav.length) {
            var _width = $(window).width();
            function subMenuClass($el){
                $el.parent('li').addClass('has-sub-menu');
            }
            subMenuClass($('.sub-menu'));
            subMenuClass($('.children'));
            function mobileMenu(){
                var $nav = $('.menu-top-mob-container');
                var $hasSubMenu = $nav.find('.has-sub-menu a');
                $('.icon-menu').on('click', function(e){
                    $(this).toggleClass('active');
                    e.preventDefault();
                    $nav.find('.header-menu').toggle(300);
                });
            }
            if(_width < 768){
                mobileMenu();
            }
        }
    }
    mp.Behavior.sortPortfolio = function(context){
        var $portfolioContainer = $('.latests-block');
        if($portfolioContainer.length){
            $('#portfolio-container').mixItUp();
        }
    }

})(jQuery)
