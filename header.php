<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="preLoaderDiv" style="height:100%; width: 100%;background-color: white; position: fixed; top: 0;left: 0;z-index: 99999">

</div>
<noscript>
    <div class="info">
        <h1>Javascript ist Dealtiviert</h1>
        <p>Diese Webseite ist nur mit <b>Javascript</b> nutzbar. Bitte aktivieren Sie Javascript.</p>
    </div>

</noscript>
<!--/* @TODO: Datenschutz & Cockies tag here and remove from DOM with Javascript if klick ok */-->
<header class="header">
    <div class="topBar">
        <div class="menuButton">
            <span class="icon-menu"></span>menü
        </div>
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logos/logo_w.svg' ?>" alt="Webseiten erstellen lassen bei Kühle-Webdesign">
        </div>
        <div class="mainMenu">
			<?php
			wp_nav_menu( [
				'menu_class'     => 'mainMenu',
				'container'      => '',
				'theme_location' => 'mainMenu'
			] ); ?>
        </div>
        <div class="mobileMenuBox">
			<?php
			wp_nav_menu( [
				'menu_class'     => 'mobileMenu',
				'container'      => '',
				'theme_location' => 'mobileMenu'
			] ); ?>
        </div>
        <div class="infoButton"><span class="icon-info-circle"></span></div>
        <div class="infoBox"><span class="icon-phone"></span><span class="phone">030 - 91575222</span></div>
    </div>
</header>