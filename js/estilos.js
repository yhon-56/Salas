
	$(document).ready(function(){
	var altura = $('#menu').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('#menu').addClass('menu-fixed');
		} else {
			$('#menu').removeClass('menu-fixed');
		}
	});
 
});

	$(window).scroll(function() {
		if ($("#menu").offset().top > 200) {
			$("#menu").addClass("bg-inverse");
		} else {
			$("#menu").removeClass("bg-inverse");
		}
	});
