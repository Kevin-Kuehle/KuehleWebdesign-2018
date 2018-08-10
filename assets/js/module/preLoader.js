export default function() {
	let preLoaderDiv = document.querySelector( ".preLoaderDiv" );
	window.addEventListener( 'load', function() {
			document.body.removeChild( preLoaderDiv );
	} )
}