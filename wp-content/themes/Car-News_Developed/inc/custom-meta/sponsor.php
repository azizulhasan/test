<?php

function arefin030201_portfolio_custom_meta() {
	add_meta_box( 'sponsor_meta', __( 'Other Sponsor Section', 'sponsor-textdomain' ), 'sponsor_meta_callback', 'sponsor-items' );
}
add_action( 'add_meta_boxes', 'arefin030201_portfolio_custom_meta' );


function sponsor_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'sponsor_nonce' );
	$sponsor_stored_meta = get_post_meta( $post->ID );
	?>
	<input type="text" name="meta-url-sponsor" id="meta-text" value="<?php if ( isset ( $sponsor_stored_meta['meta-url-sponsor'] ) ) echo $sponsor_stored_meta['meta-url-sponsor'][0]; ?>" style="width:100%;font-size:24px;" placeholder="Enter Sponsor URL Here">
	
	<!--<input type="text" name="meta-website-portfolio" id="meta-text" value="<?php if ( isset ( $sponsor_stored_meta['meta-website-portfolio'] ) ) echo $sponsor_stored_meta['meta-website-portfolio'][0]; ?>" style="width:100%;font-size:24px;" placeholder="Enter Website URL Here">-->
	
	<?php
}

function sponsor_meta_save( $post_id ) {
 
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'sponsor_nonce' ] ) && wp_verify_nonce( $_POST[ 'sponsor_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}
 
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-url-sponsor' ] ) ) {
		update_post_meta( $post_id, 'meta-url-sponsor', sanitize_text_field( $_POST[ 'meta-url-sponsor' ] ) );
	}
	
	/* if( isset( $_POST[ 'meta-website-portfolio' ] ) ) {
		update_post_meta( $post_id, 'meta-website-portfolio', sanitize_text_field( $_POST[ 'meta-website-portfolio' ] ) );
	} */
}
add_action( 'save_post', 'sponsor_meta_save' );