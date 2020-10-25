<?php
//
//
//
function simple_theme_setup(){
	//Featured Image Support
	add_theme_support('post_thumbnails');
	//Menus
	register_nav_menus(array(
			'primary'		=> __('Primaire Menu')
	));
}

add_action('after_setup_theme', 'simple_theme_setup');

//
//
//Excerpt Length
function set_excerpt_length(){
	return 70;
}

add_filter('excerpt_length', 'set_excerpt_length');

//
//
//
