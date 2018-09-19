<?php
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.ndigitals.com/
 * @since      1.0.0
 *
 * @package    Endowp_Oembed
 * @subpackage Endowp_Oembed/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Endowp_Oembed
 * @subpackage Endowp_Oembed/includes
 * @author     Nolte Digital Solutions <support@ndigitals.com>
 */
class Endowp_Oembed_I18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'endowp-oembed',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
