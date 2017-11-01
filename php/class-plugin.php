<?php
/**
 * Bootstraps the Addaltdesctoimg plugin.
 *
 * @package Addaltdesctoimg
 */

namespace Addaltdesctoimg;

/**
 * Main plugin bootstrap file.
 */
class Plugin extends Plugin_Base {

	/**
	 * Initiate the plugin resources.
	 *
	 * Priority is 9 because WP_Customize_Widgets::register_settings() happens at
	 * after_setup_theme priority 10. This is especially important for plugins
	 * that extend the Customizer to ensure resources are available in time.
	 *
	 * @action after_setup_theme, 9
	 */
	/**
	 * Plugin constructor.
	 */
	public function __construct() {
		parent::__construct();

		// Initiate classes.
		$classes = array(
			new Generate_Alt_Text( $this ),
		);

		// Add classes doc hooks.
		foreach ( $classes as $instance ) {
			$this->add_doc_hooks( $instance );
		}
	}
}

