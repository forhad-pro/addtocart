<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://cubeplugin.com/
 * @since      1.0.0
 *
 * @package    Addtocart
 * @subpackage Addtocart/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Addtocart
 * @subpackage Addtocart/admin
 * @author     Cube Plugin <help@cubeplugin.com>
 */
class Addtocart_CPT {

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

	

	// Create plugin menu
	// add_menu_page('MyPlugin', 'MyPlugin', 'manage_options', 'myPluginSlug', 'callback_render_plugin_menu');

	// Create submenu with href to view custom_plugin_post_type
	
	// add_submenu_page('myPluginSlug', 'SubmenuTitle', 'SubmenuTitle', 'manage_options', $link_our_new_CPT);

    function register_my_custom_submenu_page() {

		$args['show_in_menu'] = false;
		register_post_type('add_to_cart_cpt', $args);

		$link_our_new_CPT = 'edit.php?post_type=add_to_cart_cpt';

        add_submenu_page( 'woocommerce', 'Add to Cart', 'Add to Cart', 'manage_options', $link_our_new_CPT, array( $this, 'atc_custom_submenu_page_callback' ) );
    }

    public function atc_custom_submenu_page_callback() {

        ?>
			<h1>
				<?php esc_html_e( 'Welcome to my custom admin page.', 'my-plugin-textdomain' ); ?>
			</h1>
		<?php
    }
    
}