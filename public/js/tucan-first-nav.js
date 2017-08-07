alert("hola");
$(document).ready(function(){
	var altura = $('.top-nav').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.top-nav').addClass('menu-fixed');
		} else {
			$('.top-nav').removeClass('menu-fixed');
		}
	});
 
});