<?php

/* sets predefined Post Thumbnail dimensions */

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	
	//default thumbnail size
	add_image_size( 'book-thumb', 100, 120, true );
	add_image_size( 'book-thumb-big', 160, 192, true );
    add_image_size( 'thumb-normal', 260, 160, true );	
	add_image_size( 'thumb-high', 260, 325, true );
    add_image_size( 'thumb-wide', 525, 160, true );
    add_image_size( 'blog-thumb', 640, 220, true );
		
};

// NOTE: You need to regenerate all thumbnails if you modified the default thumbnails size
// Regenerate Thumbnails Plugin: http://wordpress.org/extend/plugins/regenerate-thumbnails/

?>