<?php if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access directly.

// Set a unique slug-like ID
$prefix = '_addtocart_options';

// Create options
CSF::createOptions(
	$prefix,
	array(
		'framework_title'   => 'Add to Cart',
		'sticky_header'     => false,
		'menu_title'        => 'Add to Cart',
		'show_bar_menu'     => false,
		'menu_slug'         => 'edit.php?post_type=add_to_cart_cpt',
		'show_network_menu' => false,
		'theme'             => 'light',
		'class'             => 'add-to-cart-options',
	)
);
