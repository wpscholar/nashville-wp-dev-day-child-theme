<?php

add_action( 'wp_enqueue_scripts', 'tsc_wp_enqueue_scripts' );

function tsc_wp_enqueue_scripts() {
	wp_enqueue_style( 'twentyseventeen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'twentyseventeen-child-style', get_stylesheet_directory_uri() . '/style.css' );
}