<?php
/**
 * EQMax theme setup.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus( array( 'primary' => __( 'Primary Menu', 'eqmax' ) ) );
} );

add_action( 'wp_enqueue_scripts', function () {
	$dir = get_template_directory();
	$uri = get_template_directory_uri();

	if ( file_exists( $dir . '/assets/css/main.css' ) ) {
		wp_enqueue_style( 'eqmax-main', $uri . '/assets/css/main.css', array(), filemtime( $dir . '/assets/css/main.css' ) );
	}
	if ( file_exists( $dir . '/assets/js/main.js' ) ) {
		wp_enqueue_script( 'eqmax-main', $uri . '/assets/js/main.js', array(), filemtime( $dir . '/assets/js/main.js' ), true );
	}
} );
