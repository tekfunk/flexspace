new Clipboard('.button');

$(document).ready(function(){

		$(".loading").delay(100).fadeOut('fast'); 
	});

  // smartresize for responsive isotope
(function($,sr){
 
  var debounce = function (func, threshold, execAsap) {
      var timeout;
 
      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null; 
          };
 
          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);
 
          timeout = setTimeout(delayed, threshold || 100); 
      };
  }
	// smartresize 
	jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };
 
})(jQuery,'smartresize');



	
var $container = $('#isotope-list')
// initialize Isotope
$container.isotope({
  // options...
  //resizable: false, // disable normal resizing
  // set columnWidth to a percentage of container width
  masonry: { columnWidth: $container.width() / 100, gutter: 0}
});





$(document).ready(function(){
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


$(window).smartresize(function(){
  $container.isotope({
    // update columnWidth to a percentage of container width
    masonry: { columnWidth: $container.width() / 100 }
  });
});


} )( jQuery );
