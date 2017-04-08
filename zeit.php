<?php

/*
Plugin Name: Zeit
Description: Shows the local server date and time in the dashboard adminbar. Why this plugin name? Zeit means "time" in German.
Author: Ivan Lutrov
Author URI: http://lutrov.com/
Version: 2.0
Notes: This plugin provides an API to customise the default constant values. See the "readme.md" file for more.
*/

defined('ABSPATH') || die('Ahem.');

//
// Constants used by this plugin.
//
define('ZEIT_DATE_FORMAT_SHORT', _x('d-M-y H:i', 'timezone date format'));
define('ZEIT_DATE_FORMAT_LONG', _x('l, j F Y H:i T (\U\T\CP)', 'timezone date format'));

//
// Show the time.
//
add_action('wp_before_admin_bar_render', 'zeit_server_date_time');
function zeit_server_date_time() {
	global $wp_admin_bar;
	$wp_admin_bar->add_menu(array(
		'id' => 'zeit',
		'title' => sprintf('<span class="ab-label">%s</span>', date_i18n(apply_filters('zeit_date_format_short_filter', ZEIT_DATE_FORMAT_SHORT))),
		'meta' => array(
			'title' => __('Local server time is ') . date_i18n(apply_filters('zeit_date_format_long_filter', ZEIT_DATE_FORMAT_LONG))
		),
		'href' => '#'
	));
}

?>
