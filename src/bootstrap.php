<?php
declare(strict_types=1);

namespace ItalyStrap\EDD;

use ItalyStrap\EDD\Theme\Updater_Manager;

if ( ! \function_exists( 'add_action' ) ) {
	return null;
}
/**
 * This is a means of catching errors from the activation method above and displyaing it to the customer
 */
function notices() {
	if ( \array_key_exists( 'sl_theme_activation', $_GET ) && ! empty( $_GET['message'] ) ) {

		switch( $_GET['sl_theme_activation'] ) {

			case 'false':
				$message = \urldecode( $_GET['message'] );
				\printf(
					'<div class="error"><p>%s</p></div>',
					$message
				);

				break;

			case 'true':
			default:

				break;

		}
	}
}

\add_action( 'admin_notices', __NAMESPACE__ . '\notices' );

/**
 *
 */
function register() {

	/**
	 * @var array $configs
	 */
	$configs = (array) apply_filters( 'italystrap_theme_updater_config', [] );

	$register = new Updater_Manager( $configs );
	$register->register();
}

\add_action( 'after_setup_theme', __NAMESPACE__ . '\register' );
