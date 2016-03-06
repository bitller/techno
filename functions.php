<?php

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

function techno_resources() {
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/stylesheets/bootstrap.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/stylesheets/style.css');
}

add_action('wp_enqueue_scripts', 'techno_resources');

register_nav_menus([
    'primary' => __('Primary')
]);

add_action( 'after_setup_theme', 'setup_theme' );

function setup_theme() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'featured-size', 700, 200, true );
}


function my_get_image_size( $name ) {
    global $_wp_additional_image_sizes;

    if ( isset( $_wp_additional_image_sizes[$name] ) )
        return $_wp_additional_image_sizes[$name];

    return false;
}
