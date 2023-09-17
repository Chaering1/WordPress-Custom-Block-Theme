<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CHBLOCK
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function chblock_styles() {
	wp_enqueue_style(
		'chblock-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'chblock_styles' );

if ( ! function_exists( 'chblock_setup' ) ) {
	function chblock_setup() {
		add_theme_support( 'wp-block-styles' );
	}
}
add_action( 'after_setup_theme', 'chblock_setup' );