(function($) {

// Isotope	
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

// Flexbox live preview
$('#flex-direction').change(function () {
	var flx_class = $(this).val().toLowerCase();	
	$("#flex-demo").removeClass (function (index, css) {
    	return (css.match (/(^|\s)flex-direction-\S+/g) || []).join(' ');
	});
    $('#flex-demo').addClass(flx_class);
	$( '.flex-direction' ).html( flx_class );
});
$('#flex-wrap').change(function () {
	var flx_class = $(this).val().toLowerCase();	
	$("#flex-demo").removeClass (function (index, css) {
    	return (css.match (/(^|\s)flex-wrap-\S+/g) || []).join(' ');
	});
    $('#flex-demo').addClass(flx_class);
	$( '.flex-wrap' ).html( flx_class );
});
$('#justify-content').change(function () {
	var flx_class = $(this).val().toLowerCase();	
	$("#flex-demo").removeClass (function (index, css) {
    	return (css.match (/(^|\s)justify-content-\S+/g) || []).join(' ');
	});
    $('#flex-demo').addClass(flx_class);
	$( '.justify-content' ).html( flx_class );
});
$('#align-items').change(function () {
	var flx_class = $(this).val().toLowerCase();	
	$("#flex-demo").removeClass (function (index, css) {
    	return (css.match (/(^|\s)align-items-\S+/g) || []).join(' ');
	});
    $('#flex-demo').addClass(flx_class);
	$( '.align-items' ).html( flx_class );
});
$('#align-content').change(function () {
	var flx_class = $(this).val().toLowerCase();	
	$("#flex-demo").removeClass (function (index, css) {
    	return (css.match (/(^|\s)align-content-\S+/g) || []).join(' ');
	});
    $('#flex-demo').addClass(flx_class);
	$( '.align-content' ).html( flx_class );
});
$('#reload-flex').on('click', function(){
    $('#flex-demo').removeClass();
	$('#flex-demo').addClass('columns'); 
	var empty = '';
	$( '.flex-classes' ).html( empty );
});

} )( jQuery );
