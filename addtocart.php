<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://cubeplugin.com/
 * @since             1.0.0
 * @package           Addtocart
 *
 * @wordpress-plugin
 * Plugin Name:       Add to Cart
 * Plugin URI:        https://cubeplugin.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Cube Plugin
 * Author URI:        https://cubeplugin.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       addtocart
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ADDTOCART_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-addtocart-activator.php
 */
function activate_addtocart() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-addtocart-activator.php';
	Addtocart_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-addtocart-deactivator.php
 */
function deactivate_addtocart() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-addtocart-deactivator.php';
	Addtocart_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_addtocart' );
register_deactivation_hook( __FILE__, 'deactivate_addtocart' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-addtocart.php';

/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once plugin_dir_path( __FILE__ ) . 'admin/cmb2/init.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/example-functions.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_addtocart() {

	$plugin = new Addtocart();
	$plugin->run();

}
run_addtocart();