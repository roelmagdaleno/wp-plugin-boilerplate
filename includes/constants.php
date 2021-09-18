<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The plugin version.
 *
 * @since {{version}}
 */
define( 'PLUGIN_VERSION', '{{version}}' );

/**
 * The plugin slug.
 *
 * @since {{version}}
 */
define( 'PLUGIN_SLUG', '{{slug}}' );

/**
 * The plugin directory path.
 *
 * @since {{version}}
 */
define( 'PLUGIN_PATH', plugin_dir_path( __DIR__ ) );

/**
 * The plugin directory link.
 *
 * @since {{version}}
 */
define( 'PLUGIN_URL', plugin_dir_url( __DIR__ ) );
