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
	}

	// A Custom function for get an option
	// if ( ! function_exists( 'atc_get_option' ) ) {
	public function atc_get_option( $option = '', $default = null ) {

		$options = get_option( '_addtocart_options' ); // Attention: Set your unique id of the framework
		return ( isset( $options[ $option ] ) ) ? $options[ $option ] : $default;
	}
	// }
	// echo atc_get_option( 'opt-text', 'default value' );
	// var_dump(atc_get_option( 'atc_txt_simple_products' ));

	/**
	 * Add to cart button text
	 */
	public function atcb_replace_single_text( $text, $product = null ) {

		// return $text = 'Kinna lon';
		$text = 'Kinna lon';

		$button_prev = '&raquo; ' . $text;
		$button_next = '&laquo; ' . $text;

		return $button_prev;
	}

	// public function atcb_replace_loop_text( $text, $product = null ) {

	// return $text = 'Baiccha lon';
	// }

	public function atcb_replace_loop_text( $name, $product = null ) {
		global $uatcOptions;

		if ( $product == null ) {
			// if the passed in product is null, try to get the product from global variable
			global $product;

			if ( $product == null ) {
				return $name;
			}
		}
		$type = $product->get_type();

		// create a log channel
		// $log = new Logger('name');
		// $log->pushHandler(new StreamHandler(plugin_dir_path(__FILE__). '/your.log', Logger::WARNING));
		//
		// $log->error('Type is: '.  $type);

		switch ( $type ) {

			case 'simple':
				return $name = '⟳ ' . $this->atc_get_option( 'atc_txt_simple_products' );
			break;

			case 'variable':
				return $name = 'variable lon';
			break;

			case 'grouped':
				return $name = 'grouped lon';
			break;

			case 'external':
				return $name = 'external lon';
			break;

			case 'booking':
				return $name = 'booking lon';
			break;

			default:
				return $name;
		}

	}


	/**
	 * How to remove any hook.
	 */
	function remove_hooks() {
		//
		// hook
		/**
		 * Remove product price from single page
		 * Reference: plugins\woocommerce\templates\content-single-product.php
		 */
		// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	}


}
