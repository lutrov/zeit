# Zeit

Shows the local server date and time in the dashboard adminbar. Why this plugin name? Zeit means "time" in German.

## Copyright and License

This project is licensed under the [GNU GPL](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html), version 2 or later.

## Documentation

This plugin provides an API to to customise the default constant values and control the output short and long date formats. See these examples:

	// ---- Change the Zeit plugin short date format.
	add_filter('zeit_date_format_short', 'custom_zeit_date_format_short_filter');
	function custom_zeit_date_format_short_filter($format) {
		return 'd-M-y H:i';
	}

	// ---- Change the Zeit plugin long date format.
	add_filter('zeit_date_format_long', 'custom_zeit_date_format_long_filter');
	function custom_zeit_date_format_long_filter($format) {
		return 'l, j F Y g:ia';
	}

## Professional Support

If you need professional plugin support from me, the plugin author, contact me via my website at http://lutrov.com
