<?php

function slider_custom_meta() {
	add_meta_box( 'slider_meta', __( 'Slider URL Section', 'slider-textdomain' ), 'slider_meta_callback', 'slider-items' );
}
add_action( 'add_meta_boxes', 'slider_custom_meta' );


function slider_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'slider_nonce' );
	$slider_stored_meta = get_post_meta( $post->ID );
	?>
	<input type="text" name="meta-url-slider" id="meta-text" value="<?php if ( isset ( $slider_stored_meta['meta-url-slider'] ) ) echo $slider_stored_meta['meta-url-slider'][0]; ?>" style="width:100%;font-size:24px;" placeholder="Enter Slider URL Here">
	
	<input type="text" name="meta-website-slider-bg" id="meta-text" value="<?php if ( isset ( $slider_stored_meta['meta-website-slider-bg'] ) ) echo $slider_stored_meta['meta-website-slider-bg'][0]; ?>" style="width:100%;font-size:24px;" placeholder="Background Color Code Here">
	
	<?php
}

function slider_meta_save( $post_id ) {
 
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'slider_nonce' ] ) && wp_verify_nonce( $_POST[ 'slider_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}
 
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-url-slider' ] ) ) {
		update_post_meta( $post_id, 'meta-url-slider', sanitize_text_field( $_POST[ 'meta-url-slider' ] ) );
	}
	
	 if( isset( $_POST[ 'meta-website-slider-bg' ] ) ) {
		update_post_meta( $post_id, 'meta-website-slider-bg', sanitize_text_field( $_POST[ 'meta-website-slider-bg' ] ) );
	} 
}
add_action( 'save_post', 'slider_meta_save' );