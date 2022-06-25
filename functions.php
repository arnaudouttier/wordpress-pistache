<?php
/**
 * Pistache functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pistache
 * @since Pistache 1.0
 */


/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */
function pistache_styles() {
	wp_enqueue_style(
		'pistache-styles',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'pistache_styles' );
