<?php
/**
 * Created by PhpStorm.
 * User: fisso
 * Date: 29/01/2019
 * Time: 17:01
 */

add_filter( 'italystrap_theme_updater', function ( array $edd_config ) {

	$item_name = 'EDD Theme Updater';

	$config = [
		'config'	=> [
			'remote_api_url' => 'https://demo.italystrap.it',
			'item_name'      => $item_name, // The title of the product
			'theme_slug'     => 'theme-slug', // The slug of the product
			'version'        => '0.0.0', // The current version of this theme
			'author'         => wp_get_theme( get_template() )->display( 'Author' ), // The author of this theme
			'beta'           => false, // Optional, set to true to opt into beta versions
		],
		'strings'	=> [
			'theme-license'             => sprintf(
				__( '%s License', 'italystrap' ),
				$item_name
			),
		],
	];

//	$edd_config[0]['config']['remote_api_url'] = 'https://demo.italystrap.it';

	$edd_config[] = $config;

//	$edd_config[1]['config']['remote_api_url'] = 'https://demo.italystrap.it';

	return $edd_config;
} );