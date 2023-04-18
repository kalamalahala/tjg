<?php

	/**
	 * The plugin bootstrap file
	 *
	 * This file is read by WordPress to generate the plugin information in the plugin
	 * admin area. This file also includes all the dependencies used by the plugin,
	 * registers the activation and deactivation functions, and defines a function
	 * that starts the plugin.
	 *
	 * @link              https://tkml.dev/
	 * @since             1.0.0
	 * @package           Tjg
	 *
	 * @wordpress-plugin
	 * Plugin Name:       The Johnson Group
	 * Plugin URI:        https://thejohnson.group
	 * Description:       Central plug-in for The Johnson Group. Includes hooks, filters, and other modifications to core WordPress functionality as well as Gravity Forms.
	 * Version:           1.0.0
	 * Author:            Tyler Karle
	 * Author URI:        https://tkml.dev/
	 * License:           GPL-2.0+
	 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
	 * Text Domain:       tjg
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
	const TJG_VERSION = '0.1.0';

	/**
	 * The code that runs during plugin activation.
	 * This action is documented in includes/class-tjg-activator.php
	 */
	function activate_tjg(): void {
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-tjg-activator.php';
		Tjg_Activator::activate();
	}

	/**
	 * The code that runs during plugin deactivation.
	 * This action is documented in includes/class-tjg-deactivator.php
	 */
	function deactivate_tjg(): void {
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-tjg-deactivator.php';
		Tjg_Deactivator::deactivate();
	}

	register_activation_hook( __FILE__, 'activate_tjg' );
	register_deactivation_hook( __FILE__, 'deactivate_tjg' );

	/**
	 * The core plugin class that is used to define internationalization,
	 * admin-specific hooks, and public-facing site hooks.
	 */
	require plugin_dir_path( __FILE__ ) . 'includes/class-tjg.php';

	/**
	 * Begins execution of the plugin.
	 *
	 * Since everything within the plugin is registered via hooks,
	 * then kicking off the plugin from this point in the file does
	 * not affect the page life cycle.
	 *
	 * @since    1.0.0
	 */
	function run_tjg(): void {

		$plugin = new Tjg();
		$plugin->run();

	}

	// Launch
	run_tjg();
