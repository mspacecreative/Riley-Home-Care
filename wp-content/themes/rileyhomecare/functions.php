<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

function footer_scripts() {
	
	wp_register_script('my-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('my-scripts');
}

function remove_some_widgets(){

	unregister_sidebar( 'sidebar-5' );
}

// ACTIONS
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action('init', 'footer_scripts');
add_action( 'widgets_init', 'remove_some_widgets', 11 );