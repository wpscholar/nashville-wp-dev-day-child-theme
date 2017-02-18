<?php

add_action( 'wp_enqueue_scripts', 'tsc_wp_enqueue_scripts' );

function tsc_wp_enqueue_scripts() {
	wp_enqueue_style( 'twentyseventeen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'twentyseventeen-child-style', get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'after_setup_theme', 'tsc_after_setup_theme' );

function tsc_after_setup_theme() {
	register_nav_menu( 'evergreen-content', __( 'Evergreen Menu', 'twentyseventeen-child' ) );
}

add_action( 'widgets_init', 'tsc_widget_init' );

function tsc_widget_init() {
	register_sidebar(
		array(
			'id'          => 'footer-widget-area',
			'name'        => __( 'Footer Widget Area', 'twentyseventeen-child' ),
			'description' => __( 'Adds a widget.', 'twentyseventeen-child' ),
		)
	);
}