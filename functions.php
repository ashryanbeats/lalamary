<?php

//This theme uses wp_nav_nemu() in one location
function lalamary_setup() {
	register_nav_menu('main', 'Main menu');
	show_admin_bar(false);
	add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'lalamary_setup');

// Register Custom Navigation Walker for Bootstrap collapsible navigation
require_once('wp_bootstrap_navwalker.php');


function lalamary_styles()
{
    wp_register_style('lalamary', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('lalamary'); // Enqueue it
}
add_action('wp_enqueue_scripts', 'lalamary_styles'); // Add Theme Stylesheet

/*function lalamary_scripts() {
	wp_register_script('buttons', get_template_directory_uri() . '/scripts/buttons.js' );
	wp_enqueue_script( 'buttons', get_template_directory_uri() . '/scripts/buttons.js' );
}
add_action( 'wp_enqueue_scripts', 'lalamary_scripts' ); */
	


//Below are the widget areas
function lalamary_widgets_init(){
	register_sidebar (array(
		'name' => __('Footer widgets', 'lalamary'),
		'id' => 'footer-widgets', 
		'description' => __('Widgets appear in the footer wells', 'lalamary'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="col-md-4"><div class="well well-lg">',
		'after_widget' => '</div></div></aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		)
	);
}
add_action('widgets_init', 'lalamary_widgets_init');

//set the blog thumb size
add_image_size( 'main-thumb', 700, 700, true );
add_image_size( 'jumbo', 1140, 300, true );
add_image_size('product-details', 500, 9999);

//make the add_image_size image user-selectable with a name
add_filter( 'image_size_names_choose', 'lalamary_custom_sizes' );
function lalamary_custom_sizes( $sizes ) {
	return array_merge( $sizes, array(
    'main-thumb' => __('Main Thumb'),
    'jumbo' => __('Jumbotron'),
    'product-details' => __('商品の詳細内容サイズ')
	) );
}

//adds the "... Read more" link on the end of the_excerpt()
function new_excerpt_more( $more ) {
	return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">続きを読む</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


?>