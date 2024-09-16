<?php
/*
Plugin Name: Divi Carousel Lite
Plugin URI:  https://diviepic.com/
Description: A simple carousel for Divi.
Version: 2.0.0
Author: DiviEpic
Author URI:  https://diviepic.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: divi-carousel-lite
Domain Path: /languages
*/

if (!defined('ABSPATH')) {
    exit;
}

define('DCL_PLUGIN_VERSION', '2.0.0');
define('DCL_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('DCL_PLUGIN_URL', plugin_dir_url(__FILE__));
define('DCL_PLUGIN_ASSETS', trailingslashit(DCL_PLUGIN_URL . 'assets'));
define('DCL_PLUGIN_FILE', __FILE__);
define('DCL_PLUGIN_BASE', plugin_basename(__FILE__));

require_once 'plugin.php';
