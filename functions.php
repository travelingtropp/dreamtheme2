<?php

if ( ! function_exists( 'dream_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Shape 1.0
 */
function dream_setup() {
 
    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for the Aside Post Format
     */
    add_theme_support( 'post-formats', array( 'aside' ) );
 
    /**
     * This theme uses wp_nav_menu() in one location.
     */
    register_nav_menus( array(
        'Top' => __( 'Top Menu', 'dream' ),
        'Social' => __( 'Social Menu', 'dream' ),
        'Primary' => __( 'Primary', 'dream' ),
        'Footer' => __( 'Footer Menu', 'dream' ),
    ) );
}
endif; // shape_setup
add_action( 'after_setup_theme', 'dream_setup' );

/*Add css*/
add_action( 'wp_enqueue_scripts', 'wpse_my_style' );
function wpse_my_style(){
  wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/style.css' );
}  

/*Bootstrap*/

function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


