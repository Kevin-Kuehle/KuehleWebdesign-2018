<?php
require 'inc/ThemeSupport.php';
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

function kwd_enqueue_my_scripts_and_styles() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'default_script', get_template_directory_uri() . '/assets/js/app.min.js', [], '1.0', true );
	wp_enqueue_style( 'KWD_GoogleFonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Open+Sans:300,400,600,700|Roboto:300,400,500,700,900', [], '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'kwd_enqueue_my_scripts_and_styles' );