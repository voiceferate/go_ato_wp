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

    $(document).on('click', '.partners-item', function(){
        window.location.replace($(this).data().partner)
    })
    

    $('.mfp-src').magnificPopup({
        type: 'inline',
        closeOnContentClick: true
    });

    $(document).ready(function() {

        var a = $('#recent-posts-3 li');
        for (var val of a) {
            $(val).find('a').append($(val).find('span'))
        }

        window.scrollTo(0, ($('.slider').offset().top))
        console.log($('.slider').offset().top)

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
