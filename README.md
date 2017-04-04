# Zeit

Shows the local server date and time in the dashboard adminbar. Why this plugin name? Zeit means "time" in German.

## Professional Support

If you need professional plugin support from me, the plugin author, contact me via my website at http://lutrov.com

## Copyright and License

This project is licensed under the [GNU GPL](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html), version 2 or later.

## Documentation

This plugin provides an API to to customise the default constant values and control the output short and long date formats.

See these examples:

	// ---- Change the Zeit plugin short date format.
	add_filter('zeit_date_format_short_filter', 'custom_zeit_date_format_short_filter');
	function custom_zeit_date_format_short_filter($format) {
		return 'd-M-y H:i';
	}

	// ---- Change the Zeit plugin long date format.
	add_filter('zeit_date_format_long_filter', 'custom_zeit_date_format_long_filter');
	function custom_zeit_date_format_long_filter($format) {
		return 'l, j F Y g:ia';
	}

Or if you're using a custom site plugin (you should be), do it via the `plugins_loaded` hook instead:

	// ---- Change the Zeit plugin constant values.
	add_action('plugins_loaded', 'custom_zeit_filters');
	function custom_zeit_filters() {
		// Change the short date format.
		add_filter('zeit_date_format_short_filter', 'custom_zeit_date_format_short_filter');
		function custom_zeit_date_format_short_filter($format) {
			return 'd-M-y H:i';
		}
		// ---- Change the long date format.
		add_filter('zeit_date_format_long_filter', 'custom_zeit_date_format_long_filter');
		function custom_zeit_date_format_long_filter($format) {
			return 'l, j F Y g:ia';
		}
	}

Note, this second approach will _not_ work from your theme's `functions.php` file.
