<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_head', 'blog_favicon' );
function blog_favicon() {
//	echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_stylesheet_directory_uri() . '/images/favicon.ico" />' . "\n";
}

add_action( 'wp_footer', 'adds_footer' );
function adds_footer() {
//	wp_enqueue_script( 'main-js', get_theme_file_uri() . '/js/main.js', true );
//	wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/5025074fc9.js', true );
}

/**
 * Implement the core functions
 */
require trailingslashit( get_stylesheet_directory() ) . 'inc/core.php';
