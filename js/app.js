$(document).ready(function(){
	$('.tooltipped').tooltip({delay: 50});
	$('.carousel').carousel({
		indicators: true
	});
	$('.modal').modal();
	$('select').material_select();
	$('.carousel.carousel-slider').carousel({fullWidth: true});
});

