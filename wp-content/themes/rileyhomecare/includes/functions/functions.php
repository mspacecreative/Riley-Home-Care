<?php
class $MyChildTheme extends Traction {
    function tweak_functions() {
        global $themename, $shortname, $et_store_options_in_one_row, $default_colorscheme;
        	$themename = 'Divi';
        	$shortname = 'divi';
        	$et_store_options_in_one_row = true;
        
        	$default_colorscheme = "Default";
        
        	$template_directory = get_template_directory();
        	
        	$stylesheet_directory = get_stylesheet_directory();
        
        	require_once( $template_directory . '/core/init.php' );
        
        	et_core_setup( get_template_directory_uri() );
        
        	if ( '3.0.61' === ET_CORE_VERSION ) {
        		require_once $template_directory . '/core/functions.php';
        		require_once $template_directory . '/core/components/init.php';
        		et_core_patch_core_3061();
        	}
        
        	require_once( $template_directory . '/epanel/custom_functions.php' );
        
        	require_once( $template_directory . '/includes/functions/choices.php' );
        
        	require_once( $template_directory . '/includes/functions/sanitization.php' );
        
        	require_once( $stylesheet_directory . '/includes/functions/sidebars.php' );
        
        	load_theme_textdomain( 'Divi', $template_directory . '/lang' );
        
        	require_once( $template_directory . '/epanel/core_functions.php' );
        
        	require_once( $template_directory . '/post_thumbnails_divi.php' );
        
        	include( $template_directory . '/includes/widgets.php' );
        
        	register_nav_menus( array(
        		'primary-menu'   => esc_html__( 'Primary Menu', 'Divi' ),
        		'secondary-menu' => esc_html__( 'Secondary Menu', 'Divi' ),
        		'footer-menu'    => esc_html__( 'Footer Menu', 'Divi' ),
        	) );
        
        	// don't display the empty title bar if the widget title is not set
        	remove_filter( 'widget_title', 'et_widget_force_title' );
        
        	remove_filter( 'body_class', 'et_add_fullwidth_body_class' );
        
        	add_action( 'wp_enqueue_scripts', 'et_add_responsive_shortcodes_css', 11 );
        
        	// Declare theme supports
        	add_theme_support( 'title-tag' );
        
        	add_theme_support( 'post-formats', array(
        		'video', 'audio', 'quote', 'gallery', 'link'
        	) );
        
        	add_theme_support( 'woocommerce' );
        	add_theme_support( 'wc-product-gallery-zoom' );
        	add_theme_support( 'wc-product-gallery-lightbox' );
        	add_theme_support( 'wc-product-gallery-slider' );
        
        	add_theme_support( 'customize-selective-refresh-widgets' );
        
        	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
        
        	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
        	add_action( 'woocommerce_before_main_content', 'et_divi_output_content_wrapper', 10 );
        
        	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
        	add_action( 'woocommerce_after_main_content', 'et_divi_output_content_wrapper_end', 10 );
        
        	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
        
        	// deactivate page templates and custom import functions
        	remove_action( 'init', 'et_activate_features' );
        
        	remove_action('admin_menu', 'et_add_epanel');
        
        	// Load editor styling
        	add_editor_style( 'css/editor-style.css' );
        
        	// Load unminified scripts based on selected theme options field
        	add_filter( 'et_load_unminified_scripts', 'et_divi_load_unminified_scripts' );
        
        	// Load unminified styles based on selected theme options field
        	add_filter( 'et_load_unminified_styles', 'et_divi_load_unminified_styles' );
    }
}