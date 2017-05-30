<?php

/**
 * Theme setup
 */
function theme_setup() {
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'theme_setup' );

/**
 * Clean up wp_head
 */
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Add assets
 */
function theme_enqueue_scripts() {
	// Styles
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), null );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1' );
	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), null );

	// Scripts
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jquery' ), '3.3.5', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1', true );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
