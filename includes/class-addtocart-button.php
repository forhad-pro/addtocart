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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Add to cart button text
	 */
	function change_simple_shop_add_to_cart( $html, $product ){


		$category_ammunition = $product->get_categories();


	   if (strstr($category_ammunition, 'Ammunition')) { // Add Your Category Here 'Ammuntion'

  $html = sprintf( '<a id="read-more-btn" rel="nofollow" href="%s" data-product_id="%s"  class="button vp-btn">%s</a>',
				   esc_url( get_the_permalink() ),
				   esc_attr( $product->get_id() ),
				   esc_html(  __( 'Read More', 'woocommerce' ) )
		   );
		   $category_ammunition = $product->get_categories();
	   }

	   return $html;
   }




}
