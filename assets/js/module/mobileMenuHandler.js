export default function() {
	let Button = document.querySelector( '.menuButton' );
	let menu = document.querySelector( '.mobileMenuBox' );

	Button.addEventListener( 'click', function() {
		menu.classList.toggle( 'showme' );
	} )
}