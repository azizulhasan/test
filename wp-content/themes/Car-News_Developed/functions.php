<?php
/**
 * carnews functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package carnews
 */


/**
 * Registering menu Support 
 */


function myCarnewsMenu() {

	if (function_exists('register_nav_menu')) {
		register_nav_menu( 'header_top_menu', __( 'Header Menu', 'carnews' ) );

		register_nav_menu( 'footer_menu', __( 'Footer Menu', 'carnews' ) );

	}
}

add_action('init', 'myCarnewsMenu');



/**
 * Featured Image Support
 */
add_theme_support( 'post-thumbnails', array( 'post', 'page','slider-items') );

set_post_thumbnail_size( 200, 200, true );

add_image_size( 'myFituredImage', 150,150, true );

add_image_size( 'slider-items', 1900,900, true );
add_image_size( 'banner-image', 1900,400, true );




/**
 * Widget Support
 */
function my_widgets_sidebar(){
		//home page sidebar one
		register_sidebar( array(
		'name'          =>esc_html__( 'Home Page Sidebar One', 'carnews' ),
		'description'   =>esc_html__( 'This is sidebar one description .....', 'carnews' ),
		'id'            => 'widget-home-one',
		'before_widget' => '<div class="siderbar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="sidebar-widget-title">',
		'after_title'   => '</h4> ',
	) );


		register_sidebar( array(
		//footer widget
		'name'          => esc_html__( 'Footer widget', 'carnews' ),
		'description'   =>esc_html__( 'This is footer  description .....', 'carnews' ),
		'id'            => 'footer',
		'before_widget' => '<div class="col-md-3 col-sm-6 col-xs-12"><div class="footer-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2> ',
	) );

		register_sidebar( array(
		//footer bottom contact
		'name'          => esc_html__( 'Footer Contact widget', 'carnews' ),
		'description'   =>esc_html__( 'This is footer contact  description .....', 'carnews' ),
		'id'            => 'footer-contact',
		'before_widget' => '<div class="emergency-call mrb-50">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2> ',
	) );


}

		

add_action( 'widgets_init', 'my_widgets_sidebar' );

//How to Move Comment Text  or any Field to Bottom in WordPress
function ruhul_academy_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}
 
add_filter( 'comment_form_fields', 'ruhul_academy_move_comment_field_to_bottom' );


//How to remove any Field to comment form in WordPress

function ruhul_academy_any_filed_from_wordpress( $fields ) {

	unset( $fields['author'] );
	unset($fields["url"]);

	return $fields;
}
 
add_filter( 'comment_form_fields', 'ruhul_academy_any_filed_from_wordpress' );


//admin panel extra information field
function my_show_extra_profile_fields($user) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">

		<tr>
			<th><label for="facebook">Facebook</label></th>

			<td>
				<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your facebook username. [e.g http://www.facebook.com/ruhul2s]</span>
			</td>
		</tr>
		<tr>
			<th><label for="facebook">Twitter</label></th>

			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your twitter username. [e.g http://www.twitter.com/ruhul2s]</span>
			</td>
		</tr>
		<tr>
			<th><label for="facebook">Google Plus</label></th>

			<td>
				<input type="text" name="googlePlus" id="googlePlus" value="<?php echo esc_attr( get_the_author_meta( 'googlePlus', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your googlePlus username. [e.g http://www.googlePlus.com/ruhul2s]</span>
			</td>
		</tr>

	</table>
<?php }

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );



function my_save_extra_profile_fields($user_id) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

		/* Copy and paste this line for additional fields. Make sure to change 'facebook' to the field ID. */
		update_user_meta( $user_id, 'facebook',  $_POST['facebook'] );
		update_user_meta( $user_id, 'twitter',    $_POST['twitter'] );
		update_user_meta( $user_id, 'googlePlus', $_POST['googlePlus'] );
	}

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );


//custom post
/**
 * Registering Custom Post (Picture gallery)
 */
add_action( 'init', 'slider_gallery' );
function slider_gallery() {
	register_post_type( 'slider-items',
		array(
				'labels' => array(
				'name'           => __( 'Slider' ),
				'singular_name'  => __( 'Slider' ),
				'menu_name'      => __( 'Slider Gallery' ),
				'name_admin_bar' => __( 'Add Slider' ),
				'all_items'      => __( 'All Slider' ),
				'add_new'        => __( 'Add Slider' ),
				'add_new_item'   => __( 'Add  Slider' ),
				'edit_item'      => __( 'Edit Slider' ),
				'new_item'       => __( 'New Slider' ),
				'view_item'      => __( 'View Slider' ),
				'search_items'   => __( 'Search Slider' )
			),
			'public'        => true,
			'has_archive'   => true,
			'rewrite'       => array( 'slug' => 'slider-item' ),
			'menu_position' => 9,
			'menu_icon'   => 'dashicons-products',
			'supports'      => array( 'title', 'thumbnail', 'editor' )
		)
	);
}	
/**
 * ---------------------------------------------------------------------------------------
 * Enabling Custom Post Taxonomy (Slider gallery)
 * ---------------------------------------------------------------------------------------
 */
function slider_gallery_taxonomy() {
	register_taxonomy(
		'slider_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'slider-items', //post type name
		array(
			'hierarchical' => true,
			'label' => 'Slider Category',  //Display name
			'query_var' => true,
			'rewrite' => array(
				'slug' => 'slider-category', // This controls the base slug that will display before each term
				'with_front' => true  // Don't display the category base before
			)
		)
	);
}
add_action( 'init', 'slider_gallery_taxonomy');




// Custom metabox
function slider_custom_meta() {
	add_meta_box( 'slider_meta', __( 'Others Section', 'carnews' ), 'slider_meta_callback', 'slider-items' );
}
add_action( 'add_meta_boxes', 'slider_custom_meta' );

//field
function slider_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'slider_nonce' );
	$slider_stored_meta = get_post_meta( $post->ID );
	?>
	<input type="text" name="meta-subtitle-slider" value="<?php if ( isset ( $slider_stored_meta['meta-subtitle-slider'] ) ) echo $slider_stored_meta['meta-subtitle-slider'][0]; ?>" style="width:100%;font-size:16px; margin-bottom: 15px;" placeholder="Enter Sub Title Here">
	
	<?php
}

//save field value
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
	if( isset( $_POST[ 'meta-subtitle-slider' ] ) ) {
		update_post_meta( $post_id, 'meta-subtitle-slider', sanitize_text_field( $_POST[ 'meta-subtitle-slider' ] ) );
	}


}
add_action( 'save_post', 'slider_meta_save' );

//all scripts and style load in header 
// wp enqueue script and style

function add_scripts(){
	//stylcss area
	wp_enqueue_style('style',get_stylesheet_uri());
	wp_enqueue_style('Master CSS',get_template_directory_uri().'/css/master.css','','3.2.1','all');

	//script area
	 wp_enqueue_script( 'Main Script', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array ( 'jquery' ), 1.1, true);

	 wp_enqueue_script( 'bootstrap Script', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

	 wp_enqueue_script( 'wow Script', get_template_directory_uri() . '/js/wow.min.js', array ( 'jquery' ), 1.1, true);

	 wp_enqueue_script( 'owl carousel Script', get_template_directory_uri() . '/js/owlcarousel/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);

	 wp_enqueue_script( 'UI Script', get_template_directory_uri() . '/js/jquery-ui.min.js', array ( 'jquery' ), 1.1, true);


	 wp_enqueue_script( 'mean menu Script', get_template_directory_uri() . '/js/jquery.meanmenu.js', array ( 'jquery' ), 1.1, true);

	 wp_enqueue_script( 'custom Script', get_template_directory_uri() . '/js/custom.js', array ( 'jquery' ), 1.1, true);



	 //comment replay without page refresh
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	        wp_enqueue_script( 'comment-reply' );
	    }
}
add_action('wp_enqueue_scripts','add_scripts');


//Basic shortcode register
function basic_shortcode($atts,$content=null){
	return('<span style="background:red; color:white; padding:20px;">'.$content.'</span>');
}
add_shortcode('basic','basic_shortcode');


//Basic shortcode register for youtube video
function youtube_shortcode($atts,$content=null){
	extract(shortcode_atts(array(
		"video_id"=> '',
		"width"  => '',
		"height" =>'' 
	), $atts));

?>
	<iframe width="<?php echo $width;?>" height="<?php echo $height;?>" src="https://www.youtube.com/embed/<?php echo $video_id;?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<?php	
}
add_shortcode('youtube','youtube_shortcode');


//Basic shortcode register for anykinds of box
function box_shortcode($atts,$content=null){
	extract(shortcode_atts(array(
		"text"  => '',
		"class" => ''
	), $atts));
	?>
	 <div class="<?php echo $class;?>">
	 	<?php echo $text;?>
	 </div>
	<?php
}
add_shortcode('mybox','box_shortcode');









//customizer 
//

/* Removing Customize from Appearance */
function carnews_remove_customize_page(){
	global $submenu;
	unset($submenu['themes.php'][6]); // remove customize link
}
add_action( 'admin_menu', 'carnews_remove_customize_page');


/* Adding Customizer into Menu */
function carnews_register_menu_item_for_customizer() {
	add_menu_page( 'Customizer title', 'Theme Options', 'manage_options', 'customize.php', '', '', 100 );
}
add_action( 'admin_menu', 'carnews_register_menu_item_for_customizer' );



require_once(get_template_directory()."/inc/customizer/customizer.php");

/* Removing live refresh style for customizer */
function carnews_customizer_scripts() {
	wp_enqueue_script('customizer-scripts', get_template_directory_uri().'/inc/customizer/theme-customize.js', array('jquery','customize-preview'));
}
add_action('customize_preview_init', 'carnews_customizer_scripts');

function word_count($string,$limit){
	$word = explode(' ', $string);
	$word = array_slice($word,0,$limit);
	$word = implode(' ',$word);
	return($word);

}