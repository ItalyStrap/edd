<?php
/**
 *	Plugin Name:	ItalyStrap EDD Updater
 *	Plugin URI:		https://italystrap.com
 *	Description:	Plugin for the updating of ItalyStrap Framework
 *	Version:		1.0.0
 *	Author:			Enea Overclokk
 *	Author URI:		https://www.overclokk.net
 *	Text Domain:	italystrap-updater
 *	License:		GPLv2 or later
 *	License URI:	http://www.gnu.org/licenses/gpl-2.0.html
 *	Domain Path:	/lang
 *
 * @package ItalyStrap
 * @since 1.0.0
 */

function italystrap_updater_init() {

	if ( 'italystrap' !== get_template() ) {
		return null;
	}

	$autoload_plugin_files = array(
		'vendor/autoload.php',
		'italystrap.php',
	);

	foreach ( $autoload_plugin_files as $file ) {
		require __DIR__ . DIRECTORY_SEPARATOR . $file;
	}

}

\add_action( 'plugins_loaded', 'italystrap_updater_init' );
