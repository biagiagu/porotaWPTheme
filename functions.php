<?php

$textDomain = 'wp-porota';

//add theme support
add_theme_support( 'title-tag');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );



// load in our CSS
function wpporota_enqueue_styles() {

    wp_enqueue_style( 'porota-style-css', get_stylesheet_directory_uri().'/style.css', [], time(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'wpporota_enqueue_styles');



// reister menu locations
register_nav_menus( [
    'main-menu' => esc_html__('mami Menu', $textDomain),
    'footer-menu' => esc_html__('pie Menu', $textDomain),
    'header-menu' => esc_html__('cabeza Menu', $textDomain),
    'nav-menu' => esc_html__('Navegacion Menu', $textDomain),
    'agus' => esc_html__('Agustin Menu', $textDomain),

] );


// Setup Widget Areas
function porota_widgets_init(){

    register_sidebar( [
        'name'          => esc_html__( 'Main Sidebar', 'porota' ),
        'id'            => 'main-sidebar',
        'description'   => esc_html__( 'Add widgets para la sidebar aqui!', 'porota' ),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ] );


}

add_action( 'widgets_init', 'porota_widgets_init' )




?>