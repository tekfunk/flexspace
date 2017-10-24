(function($) {
	
// Code Clipboard		
new Clipboard('.button');


$(document).ready(function(){
	$('.loading').delay(100).fadeOut('fast'); 
});

// Mod tab switcher
$('.mod-footer a').on('click', function(){
	var tab_id = $(this).attr('data-tab');
    var post_id = $(this).attr('data-post');
    $(this).siblings('.is-active').removeClass('is-active');
    $('#'+post_id).children().filter('.is-active').removeClass('is-active');
    $(this).addClass('is-active');
    $('#'+post_id).children().filter('#'+tab_id).addClass('is-active');
});

// Toggle - Full Window Toggle for mobile menus, more info, etc.
// Check for click to toggle window.
$("[class^=toggle-btn-]").on('click', function(event) {
	event.preventDefault();
	$('html').toggleClass('disable-scroll');
	$('body').toggleClass('toggle-window-open');
});
// Check for ESC key to close.
$(document).keyup(function(event) {
	if (event.keyCode == 27) {
		if ($('body').hasClass('main-nav-open')) {
			$('html').removeClass('disable-scroll');
			$('body').removeClass('main-nav-open');
		} 			
	}
});

$('.fd-in-down').on('click', function(event) {
  $(this).addClass('anime');
});
$('.fd-in-right').on('click', function(event) {
  $(this).addClass('anime');
});
$('.fd-in-up').on('click', function(event) {
  $(this).addClass('anime');
});
$('.fd-in-left').on('click', function(event) {
  $(this).addClass('anime');
});




} )( jQuery );