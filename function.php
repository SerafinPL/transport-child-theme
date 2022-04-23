<?php

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.7.15');
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_filter( 'woocommerce_billing_fields', 'wc_unrequire_wc_phone_field');
function wc_unrequire_wc_phone_field( $fields ) {
$fields['billing_phone']['required'] = false;
return $fields;
}


function rosaproject_scripts()
{
	wp_enqueue_style('rosaproject-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('rosaproject-style', 'rtl', 'replace');

	wp_enqueue_script('rosa-navigation', get_template_directory_uri() . '/js/navi.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('rosa-woocustomize', get_template_directory_uri() . '/js/wooCustomizer.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('rosa-welcome', get_template_directory_uri() . '/js/welcome.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('rosa-MainPAge', get_template_directory_uri() . '/js/mainPage.min.js', array('jquery'), _S_VERSION, true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'rosaproject_scripts');

?>