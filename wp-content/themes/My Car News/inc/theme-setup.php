<?php 
function ourThemeSetup(){

	
	register_nav_menus(array(

	'primary'=> __('Main Menu'),
	));

add_theme_support('post-thumbnails',array('post','page','slider'));
	 set_post_thumbnail_size(290,250, true) ; //for post image size
	  add_image_size('my_image',350,300, true); //for single page you can add more image like this 

	  add_image_size('my_mini_image',100,50, true);
	   add_image_size('related_image',200,150, true);
	   add_image_size('slider_image',1900,900, true);

}
add_action('after_setup_theme','ourThemeSetup');

/*--------------------------------------------
	2.register sidebar();
---------------------------------------------*/



function CarNews_Widgets() {
    register_sidebar( array(
    'name' => esc_html__( 'Main Sidebar', 'CarNews' ),
    'id' => 'sidebar_1',
    'description' => esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'CarNews' ),

	'before_widget' => '<div class="sidebar-widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="sidebar-widget-title">',
	'after_title'   => '</h4>',
    ) );




    // footer Widgets

    register_sidebar( array(
    'name' => esc_html__( 'Footer Widget', 'CarNews' ),
    'id' => 'footer_widget',
    'description' => esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'CarNews' ),

	'before_widget' => ' <div class="col-md-3 col-sm-6 col-xs-12"><div class="footer-widget">',
	'after_widget'  => '</div></div>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
    ) );


   
}
add_action( 'widgets_init', 'CarNews_Widgets' );






/*--------------------------------------------
	2.register sidebar();
---------------------------------------------*/
/* Custom Pagination */
		function pagination($pages = '', $range = 4){ 
		    $showitems = ($range * 2)+1;        
			global $paged;     
			if(empty($paged)) $paged = 1;      
			if($pages == ''){         
				global $wp_query;         
				$pages = $wp_query->max_num_pages;         
				if(!$pages){$pages = 1;}
			}
			if(1 != $pages){
				echo "<div class=\"pagination\"><span>Page No- ".$paged." of ".$pages."</span>";
				
				if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
					echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
				
				if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
				
				for ($i=1; $i <= $pages; $i++){
					if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
						echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";             
						}
				} 
				if ($paged < $pages && $showitems < $pages) 
					echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next Page &rsaquo;</a>";           if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last Page &raquo;</a>";
				echo "</div>\n";
}};



/*--------------------------------------------
	3.register_post_type(); Register a Slider post type.
---------------------------------------------*/

function Carnews_Slider_init() {
	$labels = array(
		'name'               => _x( 'Sliders', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Slider', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Sliders', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Slider', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Slider', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Slider', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Slider', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Slider', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Sliders', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Sliders', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Sliders:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No sliders found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No sliders found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		
		'labels'             => $labels,
         'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider-image' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 3,
		
		'supports'=>array('title','thumbnail','editor'),
	);

	register_post_type( 'slider', $args );
}
add_action( 'after_setup_theme', 'Carnews_Slider_init' );


/*--------------------------------------------
	3.register_taxonomy(); 
---------------------------------------------*/


function create_slider_category() {
	register_taxonomy(
		'slider_cat',
		'slider',
		array(
			'label' => __( 'Slider Category' ),
			'rewrite' => array( 'slug' => 'slider-category' ),
			'hierarchical' => true,
		)
	);
	register_taxonomy(
		'slider_tag',
		'slider',
		array(
			'label' => __( 'Slider Tag' ),
			'rewrite' => array( 'slug' => 'slider-tag' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'after_setup_theme', 'create_slider_category' );



/*--------------------------------------------
	3.1 add_shortcode(); video show  
---------------------------------------------*/
function youtube_video_shortcode($atts, $content=null){
extract(shortcode_atts(array('video_id'=>' ', 'width'=>' ', 'height'=>' '),$atts));?>



	<iframe width="<?php echo $width ?>" height="<?php echo $height ?>" src="https://www.youtube.com/embed/<?php echo $video_id ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php 

}
add_shortcode('youTube','youtube_video_shortcode' );

/*--------------------------------------------
	3.2 add_shortcode(); box creating  
---------------------------------------------*/

function box_shortcode($atts, $content=null){
	extract(shortcode_atts(array('text'=>' ', 'class'=>' '),$atts));?>



	<div class="<?php echo $class; ?> ">
		

		<?php echo $text; ?>
	</div>
<?php 

}
add_shortcode('my_box','box_shortcode' );


/*--------------------------------------------
	3.2 add_shortcode(); box creating  
---------------------------------------------*/









 ?>


