<?php


add_action( 'wp_enqueue_scripts', 'kathn_enque_scripts' );


function kathn_enque_scripts() {

	// add child theme CSS
	$parent_style = 'theme-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));

	// add child theme JS
	wp_enqueue_script('kathn-js', get_stylesheet_directory_uri() . '/js/kathn.js', array( 'jquery' ));
}