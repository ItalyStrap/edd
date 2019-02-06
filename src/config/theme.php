<?php
/**
 * EDD default configuration file for themes
 *
 * @link italystrap.com
 * @since 1.0.0
 *
 * @package ItalyStrap
 */

namespace ItalyStrap;

//array(
//	'remote_api_url' => 'http://easydigitaldownloads.com',
//	'theme_slug' => get_template(),
//	'item_name' => '',
//	'license' => '',
//	'version' => '',
//	'author' => '',
//	'download_id' => '',
//	'renew_url' => '',
//	'beta' => false,
//)

return [
	'config'	=> [
		'remote_api_url' => 'https://italystrap.com', // Site where EDD is hosted
//		'item_name'      => ITALYSTRAP_THEME_NAME, // Name of theme
//		'theme_slug'     => strtolower( ITALYSTRAP_THEME_NAME ), // Theme slug
//		'version'        => ITALYSTRAP_THEME_VERSION, // The current version of this theme
//		'author'         => wp_get_theme( \get_template() )->display( 'Author' ), // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	],
	'strings'	=> [
		'theme-license'             => __( 'Theme License', 'italystrap' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'italystrap' ),
		'license-key'               => __( 'License Key', 'italystrap' ),
		'license-action'            => __( 'License Action', 'italystrap' ),
		'deactivate-license'        => __( 'Deactivate License', 'italystrap' ),
		'activate-license'          => __( 'Activate License', 'italystrap' ),
		'status-unknown'            => __( 'License status is unknown.', 'italystrap' ),
		'renew'                     => __( 'Renew?', 'italystrap' ),
		'unlimited'                 => __( 'unlimited', 'italystrap' ),
		'license-key-is-active'     => __( 'License key is active.', 'italystrap' ),
		'expires%s'                 => __( 'Expires %s.', 'italystrap' ),
		'expires-never'             => __( 'Lifetime License.', 'italystrap' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'italystrap' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'italystrap' ),
		'license-key-expired'       => __( 'License key has expired.', 'italystrap' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'italystrap' ),
		'license-is-inactive'       => __( 'License is inactive.', 'italystrap' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'italystrap' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'italystrap' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'italystrap' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'italystrap' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'italystrap' ),
	],
];
