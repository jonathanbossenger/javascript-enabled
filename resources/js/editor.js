import apiFetch from '@wordpress/api-fetch';

(function() {
	apiFetch( { path: '/wp/v2/posts' } ).then( posts => {
		console.log( posts );
	} );
})(); // Outputs: "Hello, World!"