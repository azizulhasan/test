
 <!-- ------------------------------------------------- 
	1.while loop
 --------------------------------------------------  -->
			<?php if(have_posts()):
			   while (have_posts()):the_post(); ?> 
			        <div class="while-content">
			        	<h1> <?php the_title(); ?></h1>
			        </div>

			 <?php endwhile;
			     else:
			        echo 'there is no content';
			      endif;
		?>

<!-- ------------------------------------------------- 
	2.the_excerpt();
 --------------------------------------------------  -->
<?php  

		// front page write
		the_excerpt();

		// read more --------------------------
		function new_excerpt_more($more) {
		    return '';
		}
		add_filter('excerpt_more', 'new_excerpt_more',15 );

		function the_excerpt_more_link( $excerpt ){
		    $post = get_post();
		    $excerpt .= '<a href="'. get_permalink($post->ID) . '"></a>';
		    return $excerpt;
		}
		add_filter( 'the_excerpt', 'the_excerpt_more_link', 15 );
		?>

<!-- ------------------------------------------------- 
	3.comments_popup_link();
 --------------------------------------------------  -->
		 <?php echo comments_popup_link('No Comments','1 Comment','% Comments','my_comment','Comment Off'); ?>

 <!-- ------------------------------------------------- 
	4.register_nav_menus();
 --------------------------------------------------  -->
		 <!-- backend -->
		 <?php 
		function ourThemeSetup(){
		register_nav_menus(array(
		'primary'=> __('Main Menu'),
			));

		}
		add_action('init','ourThemeSetup');

		  ?>

		<!-- fron end -->
		   <?php $args=array(
		        'theme_location'=>'primary',
		         'container_class'=>'main-navigation',
		         'items_wrap'=>'<ul  class="main-menu">%3$s</ul>',
					);
		  wp_nav_menu($args); ?>

  <!-- ------------------------------------------------- 
	5.the_post_thumbnail();
 --------------------------------------------------  -->

	  <?php add_theme_support('post-thumbnails',array('post','page'));
	  set_post_thumbnail_size(200,200, true) ; //for post image size

	  add_image_size('my_image',290,400, true); //for croping the uploaded image.
	  //for single page you can add more image like this 



	  ?>
     <!-- fron end -->
	  <?php echo the_post_thumbnail('my_image',

                        array('class'=>'hasan'

                    )); ?>


<!-- ------------------------------------------------- 
	6.require_once();
 --------------------------------------------------  -->
	<?php require_once(get_template_directory().'/inc/enqueue.php'); ?>

<!-- ------------------------------------------------- 
	7.wp_enqueue_style(),
 --------------------------------------------------  -->
		<?php 
	function get_car_news_css_js(){

		 	// css file

		wp_enqueue_style( 'master', get_template_directory_uri().'/css/master.css',array(), '1.0.0','all') ;
		   // js file

		 wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array('jquery'), 'v2.2.4', true );
		 }

		 add_action('wp_enqueue_scripts','get_car_news_css_js');


		 ?>
		


<!-- ------------------------------------------------- 
	8.search form();
 --------------------------------------------------  -->
	<form class="" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">


<input name="s" id="s"  class="search-field" placeholder="Search" value="<?php the_search_query(); ?>" type="search">

<button  type="submit"><i class="fa fa-search"></i></button>

                                
     </form>
<!-- ------------------------------------------------- 
	9.register_sidebar();
 --------------------------------------------------  -->
		<?php  

function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );






		?>
		
<!-- ------------------------------------------------- 
	10.get_categories();
 --------------------------------------------------  -->


 <!-- categories with description, and count -->
<?php
              					$categories = get_categories( array(
                                    'orderby' => 'name',
                                    'order'   => 'ASC'
                                ) );
                                 
                                foreach( $categories as $category ) {
                                    $category_link = sprintf( 
'<a href="%1$s" alt="%2$s">%3$s</a>',
                                        esc_url( get_category_link( $category->term_id ) ),
                                        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                                        esc_html( $category->name )
                                    );
                                     
                                    echo '<p>' . sprintf( esc_html__( 'Category: %s', 'textdomain' ), $category_link ) . '</p> ';
                                    echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
                                    echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';
                                } 
                                ?>   


                <!-- categories with description, and count -->                 		
		 					              
		 <?php 
                                $categories = get_categories( array(
                                    'orderby' => 'name',
                                    'parent'  => 0
                                ) );
                                 
                                foreach ( $categories as $category ) {
                                    printf( '<a href="%1$s">%2$s</a><br />',
                                        esc_url( get_category_link( $category->term_id ) ),
                                        esc_html( $category->name )
                                    );
                                }
                                 ?>
		<?php  ?>


<!-- ------------------------------------------------- 
	11.require_once();
 --------------------------------------------------  -->
		<?php $args = array(
			'type'            => 'monthly',
			'limit'           => '',
			'format'          => 'html', 
			'before'          => '',
			'after'           => '',
			'show_post_count' => false,
			'echo'            => 1,
			'order'           => 'DESC',
		    'post_type'     => 'post'
		);
		wp_get_archives( $args ); ?>


		
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php 

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
			}}



		 ?>

		 <?php if (function_exists("pagination")) {    pagination($additional_loop->max_num_pages);} ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>


<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>

<!-- ------------------------------------------------- 
	7.require_once();
 --------------------------------------------------  -->
		<?php  ?>
		<?php  ?>
		<?php  ?>








