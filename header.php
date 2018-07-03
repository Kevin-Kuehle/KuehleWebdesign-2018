<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">
<noscript>
    <div class="info">
        <h1>Javascript ist Dealtiviert</h1>
        <p>Diese Webseite ist nur mit <b>Javascript</b> nutzbar. Bitte aktivieren Sie Javascript.</p>
    </div>

</noscript>
<!--/* @TODO: Datenschutz & Cockies tag here and remove from DOM with Javascript if klick ok */-->
<header class="header">
    <div class="topBar">
        <div class="logo"><img src="<?php echo get_template_directory_uri() . '/assets/images/logos/logo_w.svg' ?>" alt="Kühle-Webdesign Logo"></div>
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
    <div class="mobileMenuContainer">
		<?php
		wp_nav_menu( [
			'menu_class'     => 'mobileMenu',
			'container'      => '',
			'theme_location' => 'mobileMenu'
		] );
		?>
    </div>
    <div class="infoBox">
        <div class="claim"><h1>Erreichen Sie <strong>mehr Kunden</strong> mit <b>Ihrer</b> Webseite, <br>
                die zu <b>Ihrer Zielgruppe</b> und <b>Leistungen</b> passt.</h1></div>
        <div class="leistungen">
            <ul class="greenCheck">
                <li>Mehr Kunden erreichen</li>
                <li>Von der Kongurrenz Abheben</li>
                <li>Professionelles Auftreten</li>
            </ul>
        </div>

    </div>
    <div class="bottomBar">
        <div class="callToAction">
            <span class="label">zu den Themen</span>
            <div class="buttons">
                <a href="#" class="btn btn-3">item-1</a><a href="#" class="btn btn-3">item-2</a><a href="#" class="btn btn-3">item-3</a><a href="#" class="btn btn-3">item-4</a><a href="#"
                                                                                                                                                                                   class="btn btn-3">item-5</a>
            </div>
        </div>
        <span class="scrollDown icon-angle-double-down"></span>
    </div>
</header>