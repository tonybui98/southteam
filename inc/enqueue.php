<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$theme_version = '1.1.1';

		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $theme_version);
    wp_enqueue_style( 'main-styles', get_stylesheet_directory_uri() . '/style.css', array());
		wp_enqueue_style( 'font-awesome-styles', get_stylesheet_directory_uri() . '/css/all.css', array());
		wp_enqueue_style( 'carousel-styles', get_stylesheet_directory_uri() . '/css/carousel.css', array());
		wp_enqueue_script( 'react-production-scripts', get_template_directory_uri() . '/js/umd/react.production.min.js', array(), $theme_version, true);
		wp_enqueue_script( 'react-dom-scripts', get_template_directory_uri() . '/js/umd/react-dom.production.min.js', array(), $theme_version, true);
		wp_enqueue_script( 'react-router-scripts', get_template_directory_uri() . '/js/umd/react-router-dom.min.js', array(), $theme_version, true);
		wp_enqueue_script( 'babel-scripts', get_template_directory_uri() . '/js/babel.js', array(), $theme_version, true);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
