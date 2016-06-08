new Clipboard('.button');

( function( $ ) {
	var body, masthead, menuToggle, siteNavigation, socialNavigation, siteHeaderMenu, resizeTimer;

	var $container = $('#isotope-list').imagesLoaded().always(function(instance) {
		console.log('all images loaded');
	}).done(function(instance) {
		console.log('all images successfully loaded');
		$container.isotope({
			itemSelector: '.item',
			masonry:{
				gutter: 0,
			columnWidth: 100,}
		});
	}).fail(function() {
		console.log('all images loaded, at least one is broken');
	}).progress(function(instance, image) {
		var result = image.isLoaded ? 'loaded' : 'broken';
		var $item = $(image.img).parent();
		$item.removeClass('is-loading');
		console.log('image is ' + result + ' for ' + image.img.src);
	});
	//Add the class selected to the item that is clicked, and remove from the others
	var $optionSets = $('#filters'),
		$optionLinks = $optionSets.find('a');
		$optionLinks.click(function() {
		var $this = $(this);
		// don't proceed if already selected
		if ($this.hasClass('selected')) {
			return false;
		}
		var $optionSet = $this.parents('#filters');
		$optionSets.find('.selected').removeClass('selected');
		$this.addClass('selected');
		//When an item is clicked, sort the items.
		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector
		});
		return false;
	});



$(document).ready(function(){

		$("#hero-load").delay(100).fadeOut('fast'); 
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
});




} )( jQuery );
