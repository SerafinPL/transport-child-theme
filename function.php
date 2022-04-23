<?php

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.7.15');
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   // wp_enqueue_script('rosa-navigation', get_template_directory_uri() . '/js/navi.js', array('jquery'), _S_VERSION, true);
   wp_enqueue_script( 'custom-js', get_bloginfo( 'stylesheet_directory' ) . 'js/navi.js', array( 'jquery' ),'',true );
}




	
