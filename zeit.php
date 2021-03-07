<?php

/*
Plugin Name: Zeit
Version: 2.4
Description: Shows the local server date and time in the dashboard adminbar. Why this plugin name? Zeit means "time" in German.
Plugin URI: https://github.com/lutrov/zeit
Copyright: 2020, Ivan Lutrov
Author: Ivan Lutrov
Author URI: http://lutrov.com/

This program is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation; either version 2 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program; if not, write to the Free Software Foundation, Inc., 51 Franklin
Street, Fifth Floor, Boston, MA 02110-1301, USA. Also add information on how to
contact you by electronic and paper mail.
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
		$wp_admin_bar->add_menu(array(
			'id' => 'zeit',
			'title' => sprintf('<span class="ab-label">%s</span>', date_i18n(apply_filters('zeit_date_format_short', ZEIT_DATE_FORMAT_SHORT))),
			'meta' => array(
				'title' => __('Local server time is ') . date_i18n(apply_filters('zeit_date_format_long', $long))
			),
			'href' => '#'
		));
	}
}

?>
