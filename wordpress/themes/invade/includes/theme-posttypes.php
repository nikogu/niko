<?php

//Add book Post Type

function tj_create_post_type_book() {
	$labels = array(
		'name' => __( 'book Items','themejunkie'),
		'singular_name' => __( 'book','themejunkie' ),
		'add_new' => __('Add New','themejunkie'),
		'add_new_item' => __('Add New book','themejunkie'),
		'edit_item' => __('Edit book','themejunkie'),
		'new_item' => __('New book','themejunkie'),
		'view_item' => __('View book','themejunkie'),
		'search_items' => __('Search book','themejunkie'),
		'not_found' =>  __('No book found','themejunkie'),
		'not_found_in_trash' => __('No book found in Trash','themejunkie'),
		'parent_item_colon' => ''
	  );
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail','custom-fields','excerpt','comments')
	  ); 
	  
	  register_post_type(__( 'book', 'themejunkie' ),$args);
}

function tj_build_taxonomies(){
    
	$args = array(
		"hierarchical" => true, 
		"label" => __( "book Types", 'themejunkie' ), 
		"singular_label" => __( "book Type", 'themejunkie' ), 
		"rewrite" => array('slug' => 'book-type', 'hierarchical' => true), 
		"public" => true
	);
    
	register_taxonomy(__( "book-type", 'themejunkie' ), array(__( "book", 'themejunkie' )), $args); 
}

function tj_book_edit_columns($columns){  

        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => __( 'book Item Title', 'themejunkie' ),
            "type" => __( 'type', 'themejunkie' )
        );  
  
        return $columns;  
}

function tj_book_custom_columns($column){  
        global $post;  
        switch ($column)  
        {    
            case __( 'type', 'themejunkie' ):  
                echo get_the_term_list($post->ID, __( 'book-type', 'themejunkie' ), '', ', ','');  
                break;
        }  
}

add_action( 'init', 'tj_create_post_type_book' );

add_action( 'init', 'tj_build_taxonomies', 0 );

add_filter("manage_edit-book_columns", "tj_book_edit_columns");

add_action("manage_posts_custom_column",  "tj_book_custom_columns");


?>