<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pistache
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'PISTACHE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support.
 */
function pistache_setup() {
	add_theme_support( 'wp-block-styles' );

}
add_action( 'after_setup_theme', 'pistache_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function pistache_styles() {
	wp_enqueue_style(
		'pistache-style',
		get_stylesheet_uri(),
		[],
		PISTACHE_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'pistache_styles' );


/* Bg color Editor Issue  */


add_theme_support( 'editor-styles' );
add_theme_support( 'dark-editor-style' );
add_action( 'admin_head', function () { 
	?>
		<style>
			.editor-styles-wrapper{
				max-width : 70%!important;
				margin-inline :  auto!important;
			}
			.edit-site-visual-editor{
				background-color : #ffffff!important;
			}
		</style>
	<?php 
} );

