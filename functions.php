<?php
// Add Styles and Scrips
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_script( 'default_script', get_template_directory_uri() . '/assets/js/app.min.js', [], '1.0', true );