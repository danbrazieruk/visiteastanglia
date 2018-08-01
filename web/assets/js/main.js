// Global page load
$(document).ready(function(){

	// hide .navbar first
	$('.navbar-brand').addClass('hidden');

	// fade in .navbar-brand
	$(function () {
		$(window).scroll(function () {

			// set distance user needs to scroll before we fadeIn navbar
			if ($(this).scrollTop() > 130) {

				$('.navbar-brand').removeClass('hidden');

			} else {

				$('.navbar-brand').addClass('hidden');
			}
		});
	});
});