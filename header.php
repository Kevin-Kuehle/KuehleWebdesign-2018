<!doctype html>
<html
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">

<header class="header">
    <div class="topBar">
        <div class="logo"></div>
        <div class="menu"> <?php
			wp_nav_menu( [
				'menu_class'     => 'mainMenu',
				'container'      => '',
				'theme_location' => 'mainMenu'
			] );
			?> </div>
        <div class="info"></div>
        <div class="mobileMenuButton">
            <span class="icon-view-list"></span>
        </div>
    </div>
    <div class="mobileMenuContainer showme">
		<?php
		wp_nav_menu( [
			'menu_class'     => 'mobileMenu',
			'container'      => '',
			'theme_location' => 'mobileMenu'
		] );
		?>
    </div>
    <div class="title"><h1>Worauf warten Sie noch ? Verlieren Sie keine Zeit und lassen Sie sich Ihre eigene Webseite erstellen bei Kühle-Webdesign</h1></div>
</header>