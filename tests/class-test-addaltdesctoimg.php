<?php
/**
 * Test_Addaltdesctoimg
 *
 * @package Addaltdesctoimg
 */

namespace Addaltdesctoimg;

/**
 * Class Test_Addaltdesctoimg
 *
 * @package Addaltdesctoimg
 */
class Test_Addaltdesctoimg extends \WP_UnitTestCase {

	/**
	 * Test _addaltdesctoimg_php_version_error().
	 *
	 * @see _addaltdesctoimg_php_version_error()
	 */
	public function test_addaltdesctoimg_php_version_error() {
		ob_start();
		_addaltdesctoimg_php_version_error();
		$buffer = ob_get_clean();

		$this->assertContains( '<div class="error">', $buffer );
	}

	/**
	 * Test _addaltdesctoimg_php_version_text().
	 *
	 * @see _addaltdesctoimg_php_version_text()
	 */
	public function test_addaltdesctoimg_php_version_text() {
		$this->assertContains( 'Addaltdesctoimg plugin error:', _addaltdesctoimg_php_version_text() );
	}
}
