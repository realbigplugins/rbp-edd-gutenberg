<?php
/**
 * Plugin Name: RBP EDD Gutenberg
 * Description: Enables the block editor on EDD's "Downloads" post type
 * Version: 1.0.0
 * Text Domain: rbp-edd-gutenberg
 * Author: Real Big Marketing
 * Author URI: http://realbigmarketing.com
 * Contributors: joelyoder
 * GitHub Plugin URI: realbigplugins/rbp-edd-gutenberg
 * GitHub Branch: master
 */

if ( ! defined( 'ABSPATH' ) ) {
    die;
}

function rbp_edd_show_in_rest( $args ) {
	$args['show_in_rest'] = true;
	return $args;
}
add_filter( 'edd_download_post_type_args', 'rbp_edd_show_in_rest' );