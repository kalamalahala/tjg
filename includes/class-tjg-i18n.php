<?php

	/**
	 * Define the internationalization functionality
	 *
	 * Loads and defines the internationalization files for this plugin
	 * so that it is ready for translation.
	 *
	 * @link       https://tkml.dev/
	 * @since      1.0.0
	 *
	 * @package    Tjg
	 * @subpackage Tjg/includes
	 */

	/**
	 * Define the internationalization functionality.
	 *
	 * Loads and defines the internationalization files for this plugin
	 * so that it is ready for translation.
	 *
	 * @since      1.0.0
	 * @package    Tjg
	 * @subpackage Tjg/includes
	 * @author     Tyler Karle <admin@tkml.dev>
	 */
	class Tjg_i18n {


		/**
		 * Load the plugin text domain for translation.
		 *
		 * @since    1.0.0
		 */
		public function load_plugin_textdomain() {

			load_plugin_textdomain(
				'tjg',
				false,
				dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
			);

		}


	}
