<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
function custom_override_checkout_fields($fields)
 {
 unset($fields['billing']['billing_address_2']);
 $fields['billing']['billing_company']['placeholder'] = 'Business Name';
 $fields['billing']['billing_company']['label'] = 'Business Name';
 $fields['billing']['billing_first_name']['placeholder'] = 'First Name'; 
 $fields['shipping']['shipping_first_name']['placeholder'] = 'First Name';
 $fields['shipping']['shipping_last_name']['placeholder'] = 'Last Name';
 $fields['shipping']['shipping_company']['placeholder'] = 'Company Name'; 
 $fields['billing']['billing_last_name']['placeholder'] = 'Last Name';
 $fields['billing']['billing_email']['placeholder'] = 'Email Address ';
 $fields['billing']['billing_phone']['placeholder'] = 'Phone ';
 return $fields;
 }
?>

