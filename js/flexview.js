(function($) {
// Flexview, a small app to preview columns and flexbox in flexspace.css.

// Parent .columns
// Flexspace CSS 'modifiers'
var flxcss = {
  "is-gapless": "code-gapless",
  "is-stacked": "code-stacked",
  "is-mobile": "code-mobile",
  "is-desktop": "code-desktop"
};
$.each( flxcss, function( key, value ) {
  $('#' + key ).change(function() {
     if($(this).is(":checked")) {
	  $('#flex-demo').addClass(' ' + key );
	  $( '.' + value ).html(' ' + key );
       return;
     }
  	$('#flex-demo').removeClass(' ' + key );
	  $( '.' + value  ).html('');
  });
});

// Flexspace flexbox 'modifiers'   
// Working on Variable in match()   
/*
var flxbx = {
  0 : "flex-direction",
  1 : "flex-wrap",
  2 : "justify-content",
  3 : "align-items",
  4 : "align-content"
};
$.each( flxbx, function( key, value ) {
  $('#' + value  ).change(function () {
	  var flx_class = ' '+$(this).val().toLowerCase();	
	  $("#flex-demo").removeClass (function (index, css) {
        match(new RegExp(value, 'i'));
    	  return (css.match (/(^|\s)flex-direction-\S+/g) || []).join(' ');
	  });
    $('#flex-demo').addClass(flx_class);
	  $( '.' + value   ).html( flx_class );
  });
});
*/


// Flexspace flexbox 'modifiers'
$('#flex-direction').change(function () {
	var flx_class = ' '+$(this).val().toLowerCase();	
	$("#flex-demo").removeClass (function (index, css) {
    	return (css.match (/(^|\s)flex-direction-\S+/g) || []).join(' ');
	});
    $('#flex-demo').addClass(flx_class);
	$( '.flex-direction' ).html( flx_class );
});
$('#flex-wrap').change(function () {
	var flx_class = ' '+$(this).val().toLowerCase();	
	$("#flex-demo").removeClass (function (index, css) {
    	return (css.match (/(^|\s)flex-wrap-\S+/g) || []).join(' ');
	});
    $('#flex-demo').addClass(flx_class);
	$( '.flex-wrap' ).html( flx_class );
});
$('#justify-content').change(function () {
	var flx_class = ' '+$(this).val().toLowerCase();	
	$("#flex-demo").removeClass (function (index, css) {
    	return (css.match (/(^|\s)justify-content-\S+/g) || []).join(' ');
	});
    $('#flex-demo').addClass(flx_class);
	$( '.justify-content' ).html( flx_class );
});
$('#align-items').change(function () {
	var flx_class = ' '+$(this).val().toLowerCase();	
	$("#flex-demo").removeClass (function (index, css) {
    	return (css.match (/(^|\s)align-items-\S+/g) || []).join(' ');
	});
    $('#flex-demo').addClass(flx_class);
	$( '.align-items' ).html( flx_class );
});
$('#align-content').change(function () {
	var flx_class = ' '+$(this).val().toLowerCase();	
	$("#flex-demo").removeClass (function (index, css) {
    	return (css.match (/(^|\s)align-content-\S+/g) || []).join(' ');
	});
	$('#flex-demo').addClass(flx_class);
	$( '.align-content' ).html( flx_class );
});

// Children .column

// Column Select
$("[id^=flv-col-]").on('click', function(){
     var matches = this.id.match(/\d+$/);
     var colnum = parseInt(matches[0]);
	$('[id^=flxb-]').removeClass( 'show-me');
	$('[id^=flxb-]').addClass( 'display-none');
	$('#flxb-'+colnum ).removeClass('display-none');
	$('#flxb-'+colnum ).addClass('show-me');
	
});
// Column Align
  $("[id^=alignself-]").change(function() {
      	var matches = this.id.match(/\d+$/);
       	var colnum = parseInt(matches[0]);
       	var flx_class = ' '+$(this).val().toLowerCase();	
	   	$('#flv-col-'+colnum).removeClass (function (index, css) {
    		return (css.match (/(^|\s)align-self-\S+/g) || []).join(' ');
		});
		$('#flv-col-'+colnum ).addClass(flx_class);			
		$('.flv-col-'+colnum).each(function() {
			var text = $(this).text().replace(/(^|\s)align-self-\S+/g, '');        
			$(this).text(text);    
		});
		$( '.flv-col-'+colnum ).append( flx_class );

  });
// Column Flex
  $("[id^=flx-]").change(function() {
      	var matches = this.id.match(/\d+$/);
       	var colnum = parseInt(matches[0]);
       	var flx_class = ' '+$(this).val().toLowerCase();	
	   	$('#flv-col-'+colnum).removeClass (function (index, css) {
    		return (css.match (/(^|\s)flex-\S+/g) || []).join(' ');
		});
		$('#flv-col-'+colnum ).addClass(flx_class);			
		$('.flv-col-'+colnum).each(function() {
			var text = $(this).text().replace(/(^|\s)flex-\S+/g, '');        
			$(this).text(text);    
		});
		$( '.flv-col-'+colnum ).append( flx_class );

  });
// Column Sizes
  $("[id^=fcol-]").change(function() {
      	var matches = this.id.match(/\d+$/);
       	var colnum = parseInt(matches[0]);
       	var flx_class = ' '+$(this).val().toLowerCase();	
	   	$('#flv-col-'+colnum).removeClass (function (index, css) {
    		return (css.match (/(^|\s)is-+\d+-\d*/g) || []).join(' ');
		});
		$('#flv-col-'+colnum).removeClass ('is-full is-narrow is-narrow-desktop');
		$('#flv-col-'+colnum ).addClass(flx_class);	
		$('.flv-col-'+colnum).each(function() {
			var text = $(this).text().replace(/.is-narrow-desktop|.is-narrow|.is-full|.is-+\d+-\d*/g, '');        
			$(this).text(text);    
		});
		$( '.flv-col-'+colnum ).append( flx_class );

  });
// Column Offsets
  $("[id^=fcoloff-]").change(function() {
      	var matches = this.id.match(/\d+$/);
       	var colnum = parseInt(matches[0]);
       	var flx_class = ' '+$(this).val().toLowerCase();       		
	   	$('#flv-col-'+colnum).removeClass (function (index, css) {
    		return (css.match (/(^|\s)is-offset-\S+/g) || []).join(' ');
		});
		$('#flv-col-'+colnum ).addClass(flx_class);		
		$('.flv-col-'+colnum).each(function() {
        	var text = $(this).text().replace(/\s+is-offset-+\d+-\d*/g, '');
	        $(this).text(text);        
		});
		$('.flv-col-'+colnum).append(flx_class);
  });

} )( jQuery );
