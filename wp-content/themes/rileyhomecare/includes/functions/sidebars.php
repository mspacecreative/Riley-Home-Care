<?php
function et_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Sidebar', 'Divi' ),
		'id' => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="et_pb_widget %2$s">',
		'after_widget' => '</div> <!-- end .et_pb_widget -->',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Contact Information', 'Divi' ),
		'id' => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="fwidget et_pb_widget %2$s">',
		'after_widget' => '</div> <!-- end .fwidget -->',
		'before_title' => '<h4 class="title">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Email Subscription Form', 'Divi' ),
		'id' => 'sidebar-3',
		'before_widget' => '<div id="%1$s" class="fwidget et_pb_widget %2$s">',
		'after_widget' => '</div> <!-- end .fwidget -->',
		'before_title' => '<h4 class="title">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Site Summary', 'Divi' ),
		'id' => 'sidebar-4',
		'before_widget' => '<div id="%1$s" class="fwidget et_pb_widget %2$s">',
		'after_widget' => '</div> <!-- end .fwidget -->',
		'before_title' => '<h4 class="title">',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'et_widgets_init' );