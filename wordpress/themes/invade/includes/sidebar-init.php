<?php

// Register Widgets
function tj_widgets_init() {

	// Blog Sidebar
	register_sidebar( array (
		'name' => __( 'Blog Sidebar', 'themejunkie' ),
		'id' => 'blog-sidebar',
		'description' => __( 'Blog Sidebar', 'themejunkie' ),
		'before_widget' => '<div id="%1$s" class="widget clear %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	));

	// Portfolio Sidebar
	register_sidebar( array (
		'name' => __( 'Portfolio Sidebar', 'themejunkie' ),
		'id' => 'protfolio-sidebar',
		'description' => __( 'Porfolio Sidebar', 'themejunkie' ),
		'before_widget' => '<div id="%1$s" class="widget clear %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	));

	// Single Post Sidebar
	register_sidebar( array (
		'name' => __( 'Single Sidebar', 'themejunkie' ),
		'id' => 'single-sidebar',
		'description' => __( 'Single Sidebar', 'themejunkie' ),
		'before_widget' => '<div id="%1$s" class="widget clear %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	));

	// Page Sidebar
	register_sidebar( array (
		'name' => __( 'Page Sidebar', 'themejunkie' ),
		'id' => 'page-sidebar',
		'description' => __( 'Page Sidebar', 'themejunkie' ),
		'before_widget' => '<div id="%1$s" class="widget clear %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	));
	
}
add_action( 'init', 'tj_widgets_init' );

?>