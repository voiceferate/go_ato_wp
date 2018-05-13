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


});
