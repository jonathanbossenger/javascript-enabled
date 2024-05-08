<?php
// enqueue assets/theme.js
add_action( 'wp_enqueue_scripts', 'javascript_enabled_theme_js' );
function javascript_enabled_theme_js() {
	wp_enqueue_script(
		'theme-js',
		get_template_directory_uri() . '/js/theme.js',
		array(),
		'1.0.0',
		true
	);
}
