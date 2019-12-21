<?php

/**
 * Functionalities of Add to cart button.
 */
class Addtocart_Button {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of this plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

		// Get options
		// $options = get_option( '_addtocart_options' ); // unique id of the framework
		// echo '<pre>';
		// var_dump($options);
		// echo '</pre>';

		// echo '<pre>';
		// var_dump( $this->atc_get_option( 'atc_simple_fieldset' )['atc_simple_icon'] );
		// echo '</pre>';
	}

	/**
	 * A Custom function for get an option
	 *
	 * @param string $option
	 * @param [type] $default
	 * @return void
	 */
	public function atc_get_option( $option = '', $default = null ) {

		$options = get_option( '_addtocart_options' );
		return ( isset( $options[ $option ] ) ) ? $options[ $option ] : $default;
	}

	/**
	 * Add to cart button text.
	 * For single page.
	 * All products.
	 *
	 * @param [type] $text
	 * @param [type] $product
	 * @return void
	 */
	// public function atcb_replace_single_text( $text, $product = null ) {

	// return $text = 'Kinna lon';
	// $text = 'Kinna lon';

	// $button_prev = '&raquo; ' . $text;
	// $button_next = '&laquo; ' . $text;

	// return $button_prev;
	// }

	// public function atcb_replace_loop_text( $name, $product = null ) {

	// 	global $uatcOptions;

	// 	if ( $product == null ) {
	// 		// if the passed in product is null, try to get the product from global variable
	// 		global $product;

	// 		if ( $product == null ) {
	// 			return $name;
	// 		}
	// 	}
	// 	$type = $product->get_type();

	// 	switch ( $type ) {

	// 		case 'simple':
	// 			// echo $this->atc_get_option( 'atc_simple_fieldset' )['atc_simple_txt'];
	// 			// return '<i class="fa fa-facebook"></i> ' . $this->atc_get_option( 'atc_simple_fieldset' )['atc_simple_txt'];
	// 			break;

	// 		case 'variable':
	// 			return $name = 'variable lon';
	// 			break;

	// 		case 'grouped':
	// 			return $name = 'grouped lon';
	// 			break;

	// 		case 'external':
	// 			return $name = 'external lon';
	// 			break;

	// 		case 'booking':
	// 			return $name = 'booking lon';
	// 			break;

	// 	}

	// }

	/**
	 * Create new button.
	 * All Products.
	 *
	 * @return void
	 */
	function atcb_new_add_to_cart() {
		global $product;
		$type = $product->get_type();
		$link = $product->get_permalink();
		switch ( $type ) {

			case 'simple':
				echo '<a href="' . esc_url( $link ) . '" class="button addtocartbutton"><i class="fa fa-shopping-bag"></i> ' . $this->atc_get_option( 'atc_simple_fieldset' )['atc_simple_txt'] . '</a>';
				break;

			case 'variable':
				// echo 'variable lon';
				echo '<a href="' . $link . '" data-quantity="1" class="button product_type_' . $type . ' add_to_cart_button ajax_add_to_cart" data-product_id="15" data-product_sku="woo-beanie" aria-label="Add “Beanie” to your cart" rel="nofollow">Add to cart</a>';
				break;

			case 'grouped':
				echo 'grouped lon';
				break;

			case 'external':
				echo 'external lon';
				break;

			case 'booking':
				echo 'booking lon';
				break;

			default:
				echo '<a href="' . $link . '" class="button addtocartbutton"><i class="fa fa-shopping-bag"></i> ALL</a>';
				break;
		}
	}

	/**
	 * Remove Add to Cart Button.
	 * All Products.
	 */
	function remove_hooks() {
		/**
		 * Remove product price from single page
		 * Reference: plugins\woocommerce\templates\content-single-product.php
		 */
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
	}

}
