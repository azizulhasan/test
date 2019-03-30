<?php
/* Customizer Main */
function carnews_customizer($wp_customize) {

	$wp_customize->remove_section('nav');
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('title_tagline');
    $wp_customize->remove_panel('widgets');
	
	/* ================================================================= */
	/* ------------------------ Panel :: Header ------------------------ */
	/* ================================================================= */
    $wp_customize->add_panel('panel_1', array(
        'priority' => 9,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Header', 'carnews'),
        'description' => 'dddd',
    ));	

	
	/* ======================== section ======================== */
	$wp_customize -> add_section('section_1', array(
		'title'     => 'Logos',
		'priority'  => 5,
		'panel' => 'panel_1'
	));
	
	/* ----------- settings and control ----------- */
	$wp_customize -> add_setting('logo', array(
		'default'   => '',
		'transport' => 'refresh'
	));		
	$wp_customize -> add_control(
		new WP_Customize_Image_Control($wp_customize,'logo',array(
			'section'   => 'section_1',
			'label'     => 'Upload Your Logo'
		))
	);
	

	/* ======================== section ======================== */
	$wp_customize -> add_section('section_2', array(
		'title'     => 'Favicon',
		'priority'  => 6,
		'panel' => 'panel_1'
	));

	/* ----------- settings and control ----------- */
	$wp_customize -> add_setting('favicon', array(
		'default'   => '',
		'transport' => 'refresh'
	));		
	$wp_customize -> add_control(
		new WP_Customize_Image_Control($wp_customize,'favicon',array(
			'section'   => 'section_2',
			'label'     => 'Upload Your Favicon'
		))
	);


	/* ======================== section ======================== */
	$wp_customize -> add_section('section_3', array(
		'title'     => 'Header Text',
		'priority'  => 7,
		'panel' => 'panel_1'
	));
	/* ----------- settings and control ----------- */

	$wp_customize -> add_setting('header_phone', array(
		'default'   => '',
		'transport' => 'postMessage'
	));
	$wp_customize -> add_control('header_phone', array(
		'section'   => 'section_3',
		'label'     => 'Header Phone Number ',
		'type'      => 'text'
	));	


	$wp_customize -> add_setting('header_email', array(
		'default'   => '',
		'transport' => 'postMessage'
	));
	$wp_customize -> add_control('header_email', array(
		'section'   => 'section_3',
		'label'     => 'Header Email Address ',
		'type'      => 'text'
	));	


	/* ================================================================= */
	/* ------------------------ Panel :: Header ------------------------ */
	/* ================================================================= */
    $wp_customize->add_panel('panel_2', array(
        'priority' => 9,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Color', 'carnews'),
        'description' => 'dddd',
    ));	


	/* ======================== section ======================== */
	$wp_customize -> add_section('section_4', array(
		'title'     => 'Header Color',
		'priority'  => 9,
		'panel' => 'panel_2'
	));
	/* ----------- settings and control ----------- */
	$wp_customize -> add_setting('header_bg_color', array(
		'default'   => '#ffffff ',
		'transport' => 'postMessage'
	));
	$wp_customize -> add_control(
		new WP_Customize_color_Control($wp_customize,'header_bg_color',array(
			'section'   => 'section_4',
			'label'     => 'Header Background Color'
		))
	);

	
}
add_action('customize_register', 'carnews_customizer');
