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


if ( ! function_exists( 'pistache_support' ) ) :

	/**
	 * Add theme support.
	 */
	function pistache_support() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'dark-editor-style' );
				// Enqueue editor styles.
		add_editor_style( 'style.css' );

	
	}
	add_action( 'after_setup_theme', 'pistache_support' );

endif;

if ( ! function_exists( 'pistache_styles' ) ) :


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
			get_template_directory_uri() . '/assets/theme.css',
			[],
			PISTACHE_VERSION
		);
	}
	add_action( 'wp_enqueue_scripts', 'pistache_styles' );


endif ; 


/* Bg color Editor Issue  */


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

