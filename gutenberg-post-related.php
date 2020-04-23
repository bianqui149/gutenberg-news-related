<?php
/**
 * Plugin Name: Gutenberg Post Selector Related
 * Description: gutenberg block post selector
 * Text Domain: gutenberg-plugin-feature
 * Author: Bianqui Julián
 * Version:  1.0.0
 */

defined( 'ABSPATH' ) || exit;
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'post-selector/plugin.php';
