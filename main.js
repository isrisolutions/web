$(document).ready(function(){
	$('header .content').click(function(){
		if($('.links').hasClass('open')){
			$('.links').removeClass('open');
		}
		else{
			$('.links').addClass('open');
		}
	});
	$( "header .content .links").click(function( event ) {
  		event.stopPropagation();
	});
	$( "header .content .header-logo").click(function( event ) {
  		event.stopPropagation();
	});

	image_path = $('.image-section').attr('aria-label');
	$('.image-section').css('background-image','url("' + image_path + '")');
});