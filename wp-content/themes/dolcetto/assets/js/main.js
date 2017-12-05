jQuery(document).ready(function($) {
    var $sliderContainer = $('.mainContainer').find('.slider');
    if($sliderContainer.length) {
        $sliderContainer.owlCarousel({
            paginationSpeed : 400,
            singleItem:true,
            items:1,
            responsive: true,
            itemsDesktop: [979,1],
            itemsDesktopSmall: [979,1],
            itemsTablet: [768,1],
            itemsTabletSmall: 1,
            itemsMobile: 1
        });

    }

    var $sliderWelcome = $('.welcome-slider');
    if($sliderWelcome.length) {
        $sliderWelcome.owlCarousel({
            navigation : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            autoPlay : 3000
        });
    }

    $(".top-page2").each(function () {
        var img = $(this).find("img"); // Get my img elem
        var pic_real_width, pic_real_height;
        $("<img/>") // Make in memory copy of image to avoid css issues
            .attr("src", $(img).attr("src"))
            .load(function () {
                pic_real_width = this.width; // Note: $(this).width() will not
                pic_real_height = this.height; // work for in memory images.
                img.css({
                    'width': pic_real_width,
                    'marginLeft': -pic_real_width / 2,
                    'left': '50%',
                    'position': 'absolute'
                });
            });
    });

    $(".mobile-click").click(function(){
        $(this).next("ul").toggle();
    });

    $('.go-top').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
    });

});