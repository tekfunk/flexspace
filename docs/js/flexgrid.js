(function($) {
	
// Isotope	
var $container = $('#isotope-list');
$container.isotope({
	resizable: false,
	masonry: { columnWidth: $container.width() / 100 }
});
$(window).smartresize(function(){
  $container.isotope({
   masonry: { columnWidth: $container.width() / 100 }
  });
});

} )( jQuery );