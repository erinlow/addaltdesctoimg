<?php
/**
 * Instantiates the Addaltdesctoimg plugin
 *
 * @package Addaltdesctoimg
 */

namespace Addaltdesctoimg;

global $addaltdesctoimg_plugin;

require_once __DIR__ . '/php/class-plugin-base.php';
require_once __DIR__ . '/php/class-plugin.php';

$addaltdesctoimg_plugin = new Plugin();

/**
 * Addaltdesctoimg Plugin Instance
 *
 * @return Plugin
 */
function get_plugin_instance() {
	global $addaltdesctoimg_plugin;
	return $addaltdesctoimg_plugin;
}
