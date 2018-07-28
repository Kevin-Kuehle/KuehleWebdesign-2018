<?php
require 'inc/ThemeSupport.php';
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// Add Styles and Scrips
function kwd_enqueue_my_scripts_and_styles() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'default_script', get_template_directory_uri() . '/assets/js/app.min.js', [], '1.0', true );
	wp_enqueue_script( 'mainFont', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700', [], '1.0', true );
	wp_enqueue_script( 'titleFont', 'https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700', [], '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'kwd_enqueue_my_scripts_and_styles' );

//Menus
function add_kwd_menus() {

}
