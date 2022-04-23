<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'parenthandle' ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
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

