<!doctype html>
<html
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">
<header class="header">
    <div class="topBar">
        <div class="logo icon-logo"></div>
        <div class="menu"> <?php
			wp_nav_menu( [
				'menu_class'     => 'mainMenu',
				'container'      => '',
				'theme_location' => 'mainMenu'
			] );
			?> </div>
        <div class="info"></div>
        <div class="mobileMenu">mobile menü</div>
    </div>
</header>