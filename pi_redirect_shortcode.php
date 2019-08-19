<?php

/**
 * The plugin bootstrap file
 *
 * Now easily redirects from a page, post or any custom post to any link or page. It redirect the watcher to a pre-characterized URL that defined in shortocde. You have part of optios likewise like content to appear, seconds and so on.
 *
 * @link              http://prontoinfosys.com/
 * @since             1.0.0
 * @package           Pi_redirect_shortcode
 *
 * @wordpress-plugin
 * Plugin Name:       Redirect Pages/Post With Shortcode
 * Plugin URI:        http://prontoinfosys.com/plugins/redirect-with-shortocode
 * Description:       Now easily redirects from a page, post or any custom post to any link or page. It redirect the watcher to a pre-characterized URL that defined in shortocde. You have part of optios likewise like content to appear, seconds and so on.
 * Version:           1.0.0
 * Author:            Pronto Infosystem LLP
 * Author URI:        http://prontoinfosys.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pi_redirect_shortcode
 * Domain Path:       /languagesWith this plugin yo can add shortcode to a page, post or any custom post. It redirects the viewer to a pre-defined URL that added in shortocde. You have lot of optios also like text to show, seconds etc.
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
define( 'PI_REDIRECT_SHORTCODE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pi_redirect_shortcode-activator.php
 */
function activate_pi_redirect_shortcode() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pi_redirect_shortcode-activator.php';
	Pi_redirect_shortcode_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pi_redirect_shortcode-deactivator.php
 */
function deactivate_pi_redirect_shortcode() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pi_redirect_shortcode-deactivator.php';
	Pi_redirect_shortcode_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pi_redirect_shortcode' );
register_deactivation_hook( __FILE__, 'deactivate_pi_redirect_shortcode' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pi_redirect_shortcode.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pi_redirect_shortcode() {

	$plugin = new Pi_redirect_shortcode();
	$plugin->run();

}
run_pi_redirect_shortcode();
