<?php
/*
Discription: This file Handle the Theme Support by WordPress Default
*/
/*function kwd_add_theme_support() {
	add_theme_support( 'custom-background');
}*/

add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );