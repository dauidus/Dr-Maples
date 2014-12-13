// JavaScript Document

jQuery.noConflict();
jQuery(document).ready(function(){
	


/*-----------------------------------------------------------------------------------*/
/* Featured Slider Setup (SlidesJS) */
/*-----------------------------------------------------------------------------------*/
jQuery( window ).load( function() {

if ( jQuery( '#featured-slider' ).length ) {
	/* Setup dynamic variables. */
	var autoInterval = parseInt( woo_slider_settings.auto ) * 1000;
	var speed = parseInt( woo_slider_settings.speed * 1000 );
	var effect = woo_slider_settings.effect;
	var hoverPause = woo_slider_settings.hoverpause;
	var nextPrev = woo_slider_settings.nextprev;
	var pagination = woo_slider_settings.pagination;
	var autoHeight = woo_slider_settings.autoheight;
	
	if ( hoverPause == 'true' ) { hoverPause = true; } else { hoverPause = false; }
	if ( nextPrev == 'true' ) { nextPrev = true; } else { nextPrev = false; }
	if ( pagination == 'true' ) { pagination = true; } else { pagination = false; }
	if ( autoHeight == 'true' ) { autoHeight = true; } else { autoHeight = false; }
	
	if ( effect != 'slide' && effect != 'fade' ) { effect = 'slide'; } // Sanity check.


	if ( jQuery( '#featured-slider .slide' ).length > 1 ) {

		jQuery( '#featured-slider' ).slides({
			autoHeight: autoHeight,
			effect: effect,		
			hoverPause: hoverPause,
			play: autoInterval,		
			slideSpeed: speed, 
			fadeSpeed: speed, 
			crossfade: false,
			generateNextPrev: nextPrev,
			generatePagination: pagination
		});
	
	} else {
		jQuery( '#featured-slider .slide' ).fadeIn();
	}
}

});
		

	
	//ALT STYLING FOR LIST WIDGETS
	
	jQuery('.widget_woo_specials li:odd, .widget_woo_staff li:odd').addClass('alt');
	
	
	//CLEAR FORM FIELD ON FOCUS
	
	var name = jQuery('.location .text input.txt').val();
	
	if (name == '') { jQuery('.location .text input.txt').val('Name') };
	
	jQuery('.location .text input.txt').focus(function() {
		var val = jQuery(this).val();
		if(val == 'Enter your starting address'){	jQuery(this).val(''); }
	});
	
	jQuery('.location .text input.txt').blur(function() {
		var val = jQuery(this).val();
		if(val == ''){	jQuery(this).val('Enter your starting address'); }
	});
	
	//RESERVATION CONFIRMATION MODAL BUTTONS
	
	jQuery('.ui-dialog-buttonpane button:contains(Cancel)').addClass('inactive');
	
	//STAFF WIDGET AVATAR
	
	jQuery('.widget_woo_staff img.avatar').each(function(){
		jQuery(this).addClass('thumb');
	});
	
	//BUSINESS HOURS WIDGET
	
	jQuery('.widget-wootable-businesshours li:last').css('border-bottom','none');
	
});