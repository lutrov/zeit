<?php

/*
Plugin Name: Zeit
Description: Shows the local server date, time & timezone in the dashboard adminbar. Why this plugin name? Zeit means "time" in German.
Author: Ivan Lutrov
Version: 1.1
*/

defined('ABSPATH') || die('Ahem.');

//
// Constants used by this plugin.
//
define('ZEIT_DATE_FORMAT_SHORT', _x('d-M-y H:i', 'timezone date format'));
define('ZEIT_DATE_FORMAT_LONG', _x('l, j F Y H:i T', 'timezone date format'));

//
// Show the time.
//
function zeit_server_date_time() {
	global $wp_admin_bar;
	$timezone_format = _x('Y-m-d G:i:s', 'timezone date format');
	$wp_admin_bar->add_menu(array('id' => 'zeit', 'title' => date_i18n(ZEIT_DATE_FORMAT_SHORT), 'href' => false, 'meta' => array('title' => __('Local server time is ') . date_i18n(ZEIT_DATE_FORMAT_LONG))));
}
add_action('wp_before_admin_bar_render', 'zeit_server_date_time');

?>