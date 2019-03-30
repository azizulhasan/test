<?php 
 
 function get_car_news_css_js(){

 	// css file

wp_enqueue_style( 'master', get_template_directory_uri().'/css/master.css',array(), '1.0.0','all') ;

wp_enqueue_style( 'custom', get_template_directory_uri().'/css/custom.css',array(), '1.0.0','all') ;






 	// js file enqueue

 wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array('jquery'), 'v2.2.4', true );

 wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), 'v3.3.7', true );


wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), 'v1.1.2', true );

wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/owlcarousel/owl.carousel.min.js', array(), 'v2.2.1', true );



wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), 'v1.11.4', true );

wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), 'v2.0.3', true );



wp_enqueue_script( 'counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), true );

wp_enqueue_script( 'accordian-a2r', get_template_directory_uri() . '/js/accordian-a2r.js', array(), true );

wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/js/jquery.meanmenu.js', array(), 'v2.0.8', true );


wp_enqueue_script( 'skill-bars', get_template_directory_uri() . '/js/skill.bars.jquery.js', array(), true );


wp_enqueue_script( 'filterizr', get_template_directory_uri() . '/js/jquery.filterizr.min.js', array(), true );

wp_enqueue_script( 'filterize-controls', get_template_directory_uri() . '/js/filterize-controls.js', array(),  true );


wp_enqueue_script( 'magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), 'v1.1.0 ', true );

wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );










 }

 add_action('wp_enqueue_scripts','get_car_news_css_js');








 ?>