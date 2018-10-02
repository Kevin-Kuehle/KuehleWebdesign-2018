import mobileNavHandler from './module/mobileMenuHandler';
import preLoaderHandler from './module/preLoader';
import smooth_scrollHandler from './module/smoothScroll';

document.addEventListener( 'DOMContentLoaded', function() {
	mobileNavHandler();
	preLoaderHandler();
	smooth_scrollHandler();
} );