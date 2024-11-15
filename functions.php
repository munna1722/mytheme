<?php
//add_theme suppport

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', [ 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customizer-selective-refresh-widgets' );
add_theme_support( 'starter-content' );


//load in css
function mytheme_enqueue_style() {

    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
   
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );


 
//register Menu Location
register_nav_menus( [
    'main-menu' => esc_html__('Main Menu', 'mytheme'),
] );

// setup widget area
 function mytheme_widgets_init() {
  register_sidebar([
    'name'          => esc_html__( 'Main Sideber', 'mytheme'),
    'id'            => 'main-sidebar',
    'description'   => esc_html__( 'add widgets for main sideber here', 'mytheme'),
    'before_widget' => '<section class ="widget">',
    'after_widget'  => '<section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ]);
 }
 add_action( 'widgets_init', 'mytheme_widgets_init' );





?>