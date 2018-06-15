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
        <div class="claim"><h1>Kühle-Webdesign in Berlin <strong>erstellt für Ihr Unternehmen eine responsive
                    Webseite</strong>, die Ihre Marketingstrategie wirkungsvoll unterstützt.</h1></div>
        <div class="leistungen">
            <ul class="greenCheck">
                <li>item-1</li>
                <li>item-2</li>
                <li>item-3</li>
                <li>item-4</li>
            </ul>
        </div>

    </div>
    <div class="bottomBar">
        <div class="callToAction">
            <div class="phone"><span class="icon-phone"></span>(030) 915 75 222</div>
            <div class="anfrageSenden"><a class="btn btn-1" href="#"><b>Anfrage</b> Senden</a></div>
        </div>
        <span class="scrollDown icon-angle-double-down"></span>
    </div>
</header>