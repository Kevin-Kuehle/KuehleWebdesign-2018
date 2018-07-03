<footer class="footer">
    <div class="logo">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logos/logo_w.svg' ?>" alt="Kühle-Webdesign Logo">
    </div>
    <div class="footerMenu">
		<?php wp_nav_menu( [
			'menu_class'     => 'footerMenu',
			'container'      => '',
			'theme_location' => 'footerMenu'
		] ); ?>
    </div>
    <div class="flyToTop"></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>