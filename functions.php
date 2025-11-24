<?php
/**
 * Travel Landing Theme Functions
 * 
 * @package Travel_Landing
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme Setup
 */
function travel_landing_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    
    // Register navigation menu
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'travel-landing' ),
    ) );
}
add_action( 'after_setup_theme', 'travel_landing_setup' );

/**
 * Enqueue styles and scripts
 */
function travel_landing_enqueue_assets() {
    // Enqueue main stylesheet
    wp_enqueue_style(
        'travel-landing-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
    
    // Enqueue main JavaScript only if file exists
    $js_file = get_template_directory() . '/assets/js/main.js';
    if ( file_exists( $js_file ) ) {
        wp_enqueue_script(
            'travel-landing-script',
            get_template_directory_uri() . '/assets/js/main.js',
            array(),
            wp_get_theme()->get( 'Version' ),
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'travel_landing_enqueue_assets' );

/**
 * Get navigation menu HTML
 */
function travel_landing_get_nav_menu() {
    if ( has_nav_menu( 'primary' ) ) {
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => 'nav',
            'container_class' => 'nav',
            'menu_class'     => 'nav__list',
            'fallback_cb'    => false,
        ) );
    } else {
        // Fallback menu
        echo '<nav class="nav">';
        echo '<ul class="nav__list">';
        echo '<li><a href="#hero" class="nav__link">Home</a></li>';
        echo '<li><a href="#destinations" class="nav__link">Destinations</a></li>';
        echo '<li><a href="#booking" class="nav__link">Book Now</a></li>';
        echo '<li><a href="#about" class="nav__link">About</a></li>';
        echo '</ul>';
        echo '</nav>';
    }
}

/**
 * Custom excerpt length
 */
function travel_landing_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'travel_landing_excerpt_length' );

/**
 * Custom excerpt more
 */
function travel_landing_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'travel_landing_excerpt_more' );
