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

        if ($('.slider').length) {
            window.scrollTo(0, ($('.slider').offset().top))
            console.log($('.slider').offset().top)
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

//map api AIzaSyBN-_YHch6wA1CzF1SEL3Yv7X49DR0UvBU

});

function initMap() {
    var spilka = {lat: 49.025248, lng: 24.361334};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: spilka
    });
    var marker = new google.maps.Marker({
      map: map,
      position: spilka,
      animation: google.maps.Animation.DROP,
      title:"Громадське об’єднання Калущини учасників бойових дій (АТО) на сході України імені Романа Шухевича"
    });
  }