<?php
/**
 * Plugin Name: Addaltdesctoimg
 * Description: ...
 * Version: 0.1
 * Author: Investors (Author Name)
 * Text Domain: addaltdesctoimg
 * Domain Path: /languages
 *
 * @package Addaltdesctoimg
 */

if ( version_compare( phpversion(), '5.3', '>=' ) ) {
	require_once __DIR__ . '/instance.php';
} else {
	if ( defined( 'WP_CLI' ) ) {
		WP_CLI::warning( _addaltdesctoimg_php_version_text() );
	} else {
		add_action( 'admin_notices', '_addaltdesctoimg_php_version_error' );
	}
}

/**
 * Admin notice for incompatible versions of PHP.
 */
function _addaltdesctoimg_php_version_error() {
	printf( '<div class="error"><p>%s</p></div>', esc_html( _addaltdesctoimg_php_version_text() ) );
}

/**
 * String describing the minimum PHP version.
 *
 * @return string
 */
function _addaltdesctoimg_php_version_text() {
	return __( 'Addaltdesctoimg plugin error: Your version of PHP is too old to run this plugin. You must be running PHP 5.3 or higher.', 'addaltdesctoimg' );
}
