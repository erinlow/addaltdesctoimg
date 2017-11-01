<?php
/**
*  Automatically generates alt text for images
*
* @package Addaltdesctoimg
*
*/

namespace Addaltdesctoimg;

/**
* Generate missing alt text class.
*
* @package Addaltdesctoimg
*/

class Generate_Alt_Text {

	public $plugin;

	public function __construct( $plugin ){
		$this->plugin = $plugin;
		$this->hook_auto_alt_fix_1();
		$this->hook_auto_alt_fix_2();

	}

	private function hook_auto_alt_fix_1() {
		add_filter('image_send_to_editor', array( $this, 'auto_alt_fix_1'), 9, 2);

	}

	public function auto_alt_fix_1($html, $id) {
		return str_replace('alt=""','alt="'.get_the_title($id).'"',$html);
	}

	private function hook_auto_alt_fix_2() {
		add_filter('wp_get_attachment_image_attributes', array( $this, 'auto_alt_fix_2'), 9, 2);

	}

	public function auto_alt_fix_2($attributes, $attachment){
		if ( !isset( $attributes['alt'] ) || '' === $attributes['alt'] ) {
		$attributes['alt']=get_the_title($attachment->ID);
		}
		return $attributes;
	}

}


?>