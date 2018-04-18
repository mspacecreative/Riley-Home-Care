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

function scripts_styles() {
	
	wp_enqueue_script( 'slick-script', get_stylesheet_directory_uri() . '/js/slick.min.js', array(), '1.0', true );
	wp_enqueue_script('slick-script');
	
	wp_register_script('my-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
	wp_enqueue_script('my-scripts');
	
	wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array(), null, true);
	wp_enqueue_script('fontawesome');
	
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), null );
	wp_enqueue_style('slick-theme');
	
	wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/css/slick.css', array(), null );
	wp_enqueue_style('slick');
	
}

function remove_some_widgets(){

	unregister_sidebar( 'sidebar-5' );
}

function two_third_column($atts, $content = null)
{
    return '<div class="two_third_gutter">' . $content . '</div>';
}

function one_third_column($atts, $content = null)
{
    return '<div class="one_third_gutter">' . $content . '</div>';
}

// ACTIONS
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action('init', 'scripts_styles');
add_action( 'widgets_init', 'remove_some_widgets', 11 );
add_shortcode('two_third_gutter', 'two_third_column');
add_shortcode('one_third_gutter', 'one_third_column');