<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

namespace ItalyStrap\EDD\Theme;

use InvalidArgumentException;

/**
 * Theme_Updater_Factory
 */
class Updater_Factory {

	/**
	 * Create instance
	 */
	public static function create( array $edd_config ) {

		if ( ! array_key_exists( 'config', $edd_config ) ) {
			throw new InvalidArgumentException( 'The key "config" does not exists' );
		}

		if ( ! array_key_exists( 'strings', $edd_config ) ) {
			throw new InvalidArgumentException( 'The key "strings" does not exists' );
		}

		$keys = [
			'item_name',
			'theme_slug',
			'version',
			'author'
		];

		foreach ( $keys as $value ) {
			if ( ! array_key_exists(  $value, $edd_config['config'] ) ) {
				throw new InvalidArgumentException( sprintf(
					'You have to provide a value for "%s" in EDD config for this theme.',
					$value
				) );
			}
		}

		return new Updater_Admin( $edd_config['config'], $edd_config['strings'] );
	}
}
