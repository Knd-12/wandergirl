
<?php 

function theme_prefix_setup() {
	
	// Add featured image support
  add_theme_support( 'post-thumbnails' );
	
	// Add custom logo
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );
