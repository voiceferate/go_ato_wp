$(function() {

	// Custom JS
	$(window).on('load', function () {
        console.log('prldr')
        var $preloader = $('#p_prldr'),
            $svg_anm   = $preloader.find('.svg_anm');
        $svg_anm.fadeOut();
        $preloader.delay(500).fadeOut('slow');
    })

    $(document).on('click', '.hamburger--collapse', function(){
        $(this).toggleClass('is-active');
        $('.header-mnu').toggleClass('side-showed')
    })

    $('.main-nav li').magnificPopup({
        type: 'inline',
        closeOnContentClick: true
    });

    $(document).ready(function() {

        var a = $('#recent-posts-3 li');
        console.log(a)
        for (var val of a) {
            console.log($(val).find('span'))
            $(val).find('a').append($(val).find('span'))
        }

        $('.owl-carousel').owlCarousel({
            smartSpeed: 1500,    
            responsiveClass:true,
            autoplay: true,
            autoplayTimeout: 5000,
            checkVisible: false,
            responsive:{
                0:{
                    items: 1,
                    nav: false,
                    loop: true,

                },
                600:{
                    items: 1,
                    nav: false,
                    loop: true
                },
                1000:{
                    items: 1,
                    nav: false,
                    loop: true,
                    autoplay: true
                }
            }
        })
    });



});
