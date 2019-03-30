( function( $ ) {
	wp.customize( 'header_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.header' ).css( 'background-color', newval );
		} );
	} );
}) (jQuery);