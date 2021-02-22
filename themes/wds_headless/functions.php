<?php
/**
 * Theme functionality.
 *
 * @author WebDevStudios
 * @package wds-headless-theme
 * @since 1.0
 */

require_once 'inc/acf-pro.php';
require_once 'inc/algolia.php';
require_once 'inc/block-manager.php';
require_once 'inc/custom-post-types.php';
require_once 'inc/wordpress.php';
require_once 'inc/wpgraphql.php';

/**
 * Sets up theme defaults.
 *
 * @author WebDevStudios
 * @since 1.0
 */
function wds_theme_setup() {

	// Add support for post thumbnails.
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'nineteen-twenty', 1920, 540, true );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	// Add excerpts to pages.
	add_post_type_support( 'page', 'excerpt' );

	// Register nav menus.
	register_nav_menus(
		[
			'footer-menu'  => esc_html__( 'Footer Menu' ),
			'mobile-menu'  => esc_html__( 'Mobile Menu' ),
			'primary-menu' => esc_html__( 'Primary Menu' ),
		]
	);
}
add_action( 'after_setup_theme', 'wds_theme_setup' );

/**
 * Enqueue Block Script.
 *
 * @author WebDevStudios
 * @since 1.0
 */
function wds_enqueue_block_editor_assets() {
	wp_enqueue_script(
		'bri-blocks',
		get_stylesheet_directory_uri() . '/js/blocks.js',
		[ 'wp-blocks', 'wp-element' ],
		'1.0',
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'wds_enqueue_block_editor_assets' );
