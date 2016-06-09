(function($) {
	
	


// initialize Isotope	
var $container = $('#isotope-list')
$container.isotope({
	resizable: false,
	masonry: { columnWidth: $container.width() / 100 }
});

$(window).smartresize(function(){
  $container.isotope({
    masonry: { columnWidth: $container.width() / 100 }
  });
});

$(document).ready(function(){
	$(".loading").delay(100).fadeOut('fast'); 
});


  $('.mod-footer a').on('click', function(){
      var tab_id = $(this).attr('data-tab');
      var post_id = $(this).attr('data-post');
      // remove is-active
      $(this).siblings('.is-active').removeClass('is-active');
      $('#'+post_id).children().filter('.is-active').removeClass('is-active');
      // add is-active
      $(this).addClass('is-active');
      $('#'+post_id).children().filter('#'+tab_id).addClass('is-active');
});




} )( jQuery );
