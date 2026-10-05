<?php
/**
 * Risk Verifier Theme Functions and definitions
 *
 * @package RiskVerifier
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function riskverifier_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Register primary navigation menu
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'riskverifier' ),
        'footer'  => esc_html__( 'Footer Services Menu', 'riskverifier' ),
    ) );

    // HTML5 markup support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
}
add_action( 'after_setup_theme', 'riskverifier_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function riskverifier_scripts() {
    // Google Fonts: Exo & Roboto
    wp_enqueue_style( 'riskverifier-fonts', 'https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap', array(), null );

    // Font Awesome 6
    wp_enqueue_style( 'riskverifier-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );

    // Main Theme Stylesheet
    wp_enqueue_style( 'riskverifier-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Theme JS
    wp_enqueue_script( 'riskverifier-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'riskverifier_scripts' );
