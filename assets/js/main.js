jQuery(document).ready(function($) {
	$('.navbar-tog').click(function() {
		$('.header__block').addClass('active');
		$('.main__links').addClass('disabled');
		$('section, .main').addClass('menu-active');
	});

    $('.header__close').click(function() {
    	$('.header__block').removeClass('active');
    	$('.main__links').removeClass('disabled');
    	$('section, .main').removeClass('menu-active');
    });
});