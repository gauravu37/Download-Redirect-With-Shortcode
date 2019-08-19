<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://prontoinfosys.com/
 * @since      1.0.0
 *
 * @package    Pi_redirect_shortcode
 * @subpackage Pi_redirect_shortcode/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Pi_redirect_shortcode
 * @subpackage Pi_redirect_shortcode/includes
 * @author     Pronto Infosystem LLP <info@prontoinfosys.com>
 */
class Pi_redirect_shortcode_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'pi_redirect_shortcode',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
