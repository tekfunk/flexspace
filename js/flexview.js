(function($) {
// Flexspace Liveview

// Flexbox

$('#is-gapless').change(function() {
   if($(this).is(":checked")) {
	$('#flex-demo').addClass(' is-gapless');
	$( '.code-gapless' ).html(' is-gapless');
      return;
   }
	$('#flex-demo').removeClass(' is-gapless');
	$( '.code-gapless' ).html('');
});
$('#is-stacked').change(function() {
   if($(this).is(":checked")) {
	$('#flex-demo').addClass(' is-stacked');
	$( '.code-stacked' ).html(' is-stacked');
      return;
   }
	$('#flex-demo').removeClass(' is-stacked');
	$( '.code-stacked' ).html('');
});
$('#is-mobile').change(function() {
   if($(this).is(":checked")) {
	$('#flex-demo').addClass(' is-mobile');
	$( '.code-mobile' ).html(' is-mobile');
      return;
   }
	$('#flex-demo').removeClass(' is-mobile');
	$( '.code-mobile' ).html('');
});
$('#is-desktop').change(function() {
   if($(this).is(":checked")) {
	$('#flex-demo').addClass(' is-desktop');
	$( '.code-desktop' ).html(' is-desktop');
      return;
   }
	$('#flex-demo').removeClass(' is-desktop');
	$( '.code-desktop' ).html('');
});

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

$("[id^=flv-col-]").on('click', function(){
     var matches = this.id.match(/\d+$/);
     var colnum = parseInt(matches[0]);
	$('[id^=flxb-]').removeClass( 'show-me');
	$('[id^=flxb-]').addClass( 'display-none');
	$('#flxb-'+colnum ).removeClass('display-none');
	$('#flxb-'+colnum ).addClass('show-me');
	
});
// Column Flex
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
