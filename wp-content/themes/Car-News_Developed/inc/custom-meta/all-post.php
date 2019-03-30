<?php

function soho_portfolio_custom_meta() {
	add_meta_box( 'soho_portfolio_meta', __( 'Other Section', 'soho-portfolio-textdomain' ), 'soho_portfolio_meta_callback', 'post' );
}
add_action( 'add_meta_boxes', 'soho_portfolio_custom_meta' );


function soho_portfolio_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'soho_portfolio_nonce' );
	$soho_portfolio_stored_meta = get_post_meta( $post->ID );
	?>
	<input type="text" name="meta_technology_use_portfolio" id="meta-text" value="<?php if ( isset ( $soho_portfolio_stored_meta['meta_technology_use_portfolio'] ) ) echo $soho_portfolio_stored_meta['meta_technology_use_portfolio'][0]; ?>" style="width:100%;font-size:24px;" placeholder="Enter Technology Use Here">
	
	<input type="text" name="meta_website_url_portfolio" id="meta-text" value="<?php if ( isset ( $soho_portfolio_stored_meta['meta_website_url_portfolio'] ) ) echo $soho_portfolio_stored_meta['meta_website_url_portfolio'][0]; ?>" style="width:100%;font-size:24px;" placeholder="Enter Website URL Here">
	
	<input type="text" name="meta_work_end_date_portfolio" id="meta-text" value="<?php if ( isset ( $soho_portfolio_stored_meta['meta_work_end_date_portfolio'] ) ) echo $soho_portfolio_stored_meta['meta_work_end_date_portfolio'][0]; ?>" style="width:100%;font-size:24px;" placeholder="Enter Work End Date Here">
	
	<?php
}

function soho_portfolio_meta_save( $post_id ) {
 
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'soho_portfolio_nonce' ] ) && wp_verify_nonce( $_POST[ 'soho_portfolio_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}
 
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta_technology_use_portfolio' ] ) ) {
		update_post_meta( $post_id, 'meta_technology_use_portfolio', sanitize_text_field( $_POST[ 'meta_technology_use_portfolio' ] ) );
	}
	
	if( isset( $_POST[ 'meta_website_url_portfolio' ] ) ) {
		update_post_meta( $post_id, 'meta_website_url_portfolio', sanitize_text_field( $_POST[ 'meta_website_url_portfolio' ] ) );
	}
	
	if( isset( $_POST[ 'meta_work_end_date_portfolio' ] ) ) {
		update_post_meta( $post_id, 'meta_work_end_date_portfolio', sanitize_text_field( $_POST[ 'meta_work_end_date_portfolio' ] ) );
	}
}
add_action( 'save_post', 'soho_portfolio_meta_save' );