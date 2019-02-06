<?php
/**
 * Created by PhpStorm.
 * User: fisso
 * Date: 04/02/2019
 * Time: 11:18
 */

namespace ItalyStrap\EDD\Theme;


class Updater_Manager {

	private $configs = [];

	function __construct( array $configs ) {
		$this->configs = $configs;
	}

	/**
	 * @param array $config
	 *
	 * @return array
	 */
	private function merge_with_default( array $config ) {

		$default = (array) require __DIR__ . '/../config/theme.php';

		foreach ( $config as $k => $v ) {
			$config[ $k ] = array_merge( $default[ $k ], $v );
		}

		return $config;
	}

	/**
	 *
	 */
	public function register() {

		static $done = null;

		foreach ( $this->configs as $key => $config ) {

			$config = $this->merge_with_default( $config );

			if ( $done === $config['config']['theme_slug'] ) {
				continue;
			}

			$done = $config['config']['theme_slug'];

			try {
				Updater_Factory::create( $config );
			} catch ( \InvalidArgumentException $exception ) {
				add_action( 'admin_notices', function () use ( $exception ) {
					printf(
						'<div class="error"><p>%s</p></div>',
						$exception->getMessage()
					);
				} );
			}
		}
	}
}