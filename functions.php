<?php
function mural_style()
{
wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.css'));
wp_enqueue_style('style', get_theme_file_uri('/css/style.css'));
wp_enqueue_style('dark', get_theme_file_uri('/css/swiper.css'));

wp_enqueue_style('interior-design', get_theme_file_uri('/assets/construction.css'));

wp_enqueue_style('dark', get_theme_file_uri('/css/dark.css'));
wp_enqueue_style('font-icons', get_theme_file_uri('/css/font-icons.css'));
wp_enqueue_style('animate', get_theme_file_uri('/css/animate.css'));
wp_enqueue_style('magnific-popup', get_theme_file_uri('/css/magnific-popup.css'));
wp_enqueue_style('fonts', get_theme_file_uri('/assets/css/fonts.css'));
wp_enqueue_style('responsive', get_theme_file_uri('/css/responsive.css'));

wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery.js'), [], '', true);
wp_enqueue_script('plugins', get_theme_file_uri('/js/plugins.js'), ['jquery'], '', true);
wp_enqueue_script('functions', get_theme_file_uri('/js/functions.js'), ['jquery', 'plugins'], '', true);
}

add_action('wp_enqueue_scripts',  'mural_style');

function mural_customize($wp_customize)
{
    $wp_customize->add_section('header_setting', array(
        'title' => 'Header',
    ));

    $wp_customize->add_setting('logo_mural', array(
        'default' => get_theme_file_uri('/images/logo.png'),
    ));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_control', array(
		'label' => 'Upload Logo',
		'section' => 'header_setting',
		'settings' => 'logo_mural',
		'button_labels' => array(
			'select' => 'Select Logo',
			'remove' => 'Remove Logo',
			'change' => 'Change Logo'
		)
	)));

	$wp_customize->add_setting('telp_mural', array(
		'default' => '(62) 21 1111 1111',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'telp_control', array(
		'label' => 'Telepon',
		'section' => 'header_setting',
		'settings' => 'telp_mural',
		'type' => 'tel',
	)));

	$wp_customize->add_setting('email_mural', array(
		'default' => 'fuad@inginjadiprogrammer.com',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'email_control', array(
		'label' => 'Email',
		'section' => 'header_setting',
		'settings' => 'email_mural',
		'type' => 'email',
	)));

}

add_action('customize_register', 'mural_customize');


function mural_post_type()
{
	register_post_type('slider', array(
		'public' => true,
		'supports' => array('title'),
		'labels' => array(
			'name' => 'Sliders',
			'add_new_item' => 'Add New Slider',
			'edit_item' => 'Edit Slider',
			'all_items' => 'All Sliders'
		),
		'menu_icon' => 'dashicons-images-alt'

	));
}


add_action('init', 'mural_post_type');

function mural_support()
{
    add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 150, 150, true );
	add_image_size( 'small-size',320 , 213, true );
	add_image_size( 'medium-size',720 , 480, true );
	add_image_size( 'large-size', 1440, 960, true );
}


add_action('after_setup_theme', 'mural_support');

function menu_register()
{
    register_nav_menu('primary', 'Primary Navigation');
}

add_action('init', 'menu_register');


?>