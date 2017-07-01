<?php

/*
Plugin Name: Zeit
Description: Shows the local server date and time in the dashboard adminbar. Why this plugin name? Zeit means "time" in German.
Author: Ivan Lutrov
Author URI: http://lutrov.com/
Version: 2.1
Notes: This plugin provides an API to customise the default constant values. See the "readme.md" file for more.
*/

defined('ABSPATH') || die('Ahem.');

//
// Constants used by this plugin.
//
define('ZEIT_DATE_FORMAT_SHORT', 'd-M-y H:i');
define('ZEIT_DATE_FORMAT_LONG', 'l, j F Y H:i T');

//
// Show the time.
//
add_action('wp_before_admin_bar_render', 'zeit_server_date_time');
function zeit_server_date_time() {
	global $wp_admin_bar;
	if (is_admin() == true) {
		$long = ZEIT_DATE_FORMAT_LONG;
		if (substr(date($long), -3) <> 'UTC') {
			$long = sprintf('%s (\U\T\CP)', $long);
		}
		$wp_admin_bar->add_menu(array(
			'id' => 'zeit',
			'title' => sprintf('<span class="ab-label">%s</span>', date(apply_filters( 'zeit_date_format_short_filter', ZEIT_DATE_FORMAT_SHORT))),
			'meta' => array(
				'title' => __('Local server time is ') . date(apply_filters('zeit_date_format_long_filter', $long))
			),
			'href' => '#'
		));
	}
}

?>
