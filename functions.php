<?php
/**
 * Fonctions du thème Shasitter.
 *
 * @package Shasitter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Configuration générale du thème.
 */
function shasitter_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'primary' => __( 'Menu principal', 'shasitter' ),
			'footer'  => __( 'Menu footer', 'shasitter' ),
		)
	);
}
add_action( 'after_setup_theme', 'shasitter_theme_setup' );

/**
 * Chargement des assets.
 */
function shasitter_enqueue_assets() {
	wp_enqueue_style(
		'shasitter-google-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Space+Grotesk:wght@400;500;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'shasitter-style',
		get_stylesheet_uri(),
		array( 'shasitter-google-fonts' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'shasitter_enqueue_assets' );
