<?php
/**
 * Electronics Store Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'ELECTRONICS_STORE_VERSION', '1.0.0' );
define( 'ELECTRONICS_STORE_DIR', get_template_directory() );
define( 'ELECTRONICS_STORE_URI', get_template_directory_uri() );

// Include setup file
require_once( ELECTRONICS_STORE_DIR . '/inc/setup.php' );

// ====================================
// Theme Setup
// ===================================="}}]

function electronics_store_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'electronics-store-featured', 300, 200, true );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo', array(
        'height' => 100,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true,
    ) );
    add_theme_support( 'woocommerce' );
    
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'electronics-store' ),
        'footer' => __( 'Footer Menu', 'electronics-store' ),
    ) );
    
    load_theme_textdomain( 'electronics-store', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'electronics_store_setup' );

// ====================================
// Enqueue Styles & Scripts
// ====================================
function electronics_store_styles() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap' );
    wp_enqueue_style( 'electronics-store-style', get_stylesheet_uri(), array(), ELECTRONICS_STORE_VERSION );
}
add_action( 'wp_enqueue_scripts', 'electronics_store_styles' );

function electronics_store_scripts() {
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'electronics_store_scripts' );

// ====================================
// Register Widget Areas
// ====================================
function electronics_store_widgets() {
    register_sidebar( array(
        'name' => __( 'Primary Sidebar', 'electronics-store' ),
        'id' => 'primary-sidebar',
        'description' => __( 'Main sidebar for posts and pages', 'electronics-store' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => __( 'Footer Widget Area', 'electronics-store' ),
        'id' => 'footer-sidebar',
        'description' => __( 'Footer widget area', 'electronics-store' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s col-md-3 col-sm-6">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'electronics_store_widgets' );

// ====================================
// Excerpt Filters
// ====================================
function electronics_store_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'electronics_store_excerpt_length' );

function electronics_store_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'electronics_store_excerpt_more' );

// ====================================
// Theme Customizer
// ====================================
function electronics_store_customize_register( $wp_customize ) {
    // Colors Section
    $wp_customize->add_section( 'electronics_store_colors', array(
        'title' => __( 'Theme Colors', 'electronics-store' ),
        'priority' => 30,
    ) );
    
    // Primary Color
    $wp_customize->add_setting( 'electronics_store_primary_color', array(
        'default' => '#3bb614',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'electronics_store_primary_color',
        array(
            'label' => __( 'Primary Color', 'electronics-store' ),
            'section' => 'electronics_store_colors',
        )
    ) );
    
    // Text Color
    $wp_customize->add_setting( 'electronics_store_text_color', array(
        'default' => '#777777',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'electronics_store_text_color',
        array(
            'label' => __( 'Text Color', 'electronics-store' ),
            'section' => 'electronics_store_colors',
        )
    ) );
    
    // Heading Color
    $wp_customize->add_setting( 'electronics_store_heading_color', array(
        'default' => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'electronics_store_heading_color',
        array(
            'label' => __( 'Heading Color', 'electronics-store' ),
            'section' => 'electronics_store_colors',
        )
    ) );
    
    // Typography Section
    $wp_customize->add_section( 'electronics_store_typography', array(
        'title' => __( 'Typography', 'electronics-store' ),
        'priority' => 31,
    ) );
    
    $wp_customize->add_setting( 'electronics_store_font_size', array(
        'default' => '14',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'electronics_store_font_size', array(
        'label' => __( 'Body Font Size (px)', 'electronics-store' ),
        'section' => 'electronics_store_typography',
        'type' => 'select',
        'choices' => array(
            '12' => '12px',
            '13' => '13px',
            '14' => '14px',
            '15' => '15px',
            '16' => '16px',
        ),
    ) );
    
    // Contact Section
    $wp_customize->add_section( 'electronics_store_contact', array(
        'title' => __( 'Contact Information', 'electronics-store' ),
        'priority' => 33,
    ) );
    
    $wp_customize->add_setting( 'electronics_store_phone', array(
        'default' => '(800) 234-5678',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'electronics_store_phone', array(
        'label' => __( 'Phone Number', 'electronics-store' ),
        'section' => 'electronics_store_contact',
    ) );
    
    $wp_customize->add_setting( 'electronics_store_address', array(
        'default' => '8901 Marmora Road, Glasgow, D04 89GR',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    
    $wp_customize->add_control( 'electronics_store_address', array(
        'label' => __( 'Address', 'electronics-store' ),
        'section' => 'electronics_store_contact',
        'type' => 'textarea',
    ) );
    
    $wp_customize->add_setting( 'electronics_store_email', array(
        'default' => 'info@example.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    
    $wp_customize->add_control( 'electronics_store_email', array(
        'label' => __( 'Email Address', 'electronics-store' ),
        'section' => 'electronics_store_contact',
        'type' => 'email',
    ) );
    
    // Social Section
    $wp_customize->add_section( 'electronics_store_social', array(
        'title' => __( 'Social Media', 'electronics-store' ),
        'priority' => 34,
    ) );
    
    $socials = array(
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'youtube' => 'YouTube',
        'instagram' => 'Instagram',
        'pinterest' => 'Pinterest',
    );
    
    foreach ( $socials as $key => $label ) {
        $wp_customize->add_setting( 'electronics_store_' . $key, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_customize->add_control( 'electronics_store_' . $key, array(
            'label' => $label . ' ' . __( 'URL', 'electronics-store' ),
            'section' => 'electronics_store_social',
        ) );
    }
}
add_action( 'customize_register', 'electronics_store_customize_register' );

// ====================================
// Custom CSS Output
// ====================================
function electronics_store_custom_styles() {
    $primary_color = get_theme_mod( 'electronics_store_primary_color', '#3bb614' );
    $text_color = get_theme_mod( 'electronics_store_text_color', '#777777' );
    $heading_color = get_theme_mod( 'electronics_store_heading_color', '#333333' );
    $font_size = get_theme_mod( 'electronics_store_font_size', '14' );
    
    $css = '<style type="text/css">';
    $css .= 'a, .widget a { color: ' . esc_attr( $primary_color ) . '; }';
    $css .= '.btn-primary { background-color: ' . esc_attr( $primary_color ) . '; }';
    $css .= '.btn-primary:hover { background-color: ' . esc_attr( $primary_color ) . '; opacity: 0.8; }';
    $css .= '.widget-title { border-bottom-color: ' . esc_attr( $primary_color ) . '; }';
    $css .= 'body { color: ' . esc_attr( $text_color ) . '; font-size: ' . intval( $font_size ) . 'px; }';
    $css .= 'h1, h2, h3, h4, h5, h6, .site-title { color: ' . esc_attr( $heading_color ) . '; }';
    $css .= '.navbar-nav > li > a:hover { color: ' . esc_attr( $primary_color ) . '; }';
    $css .= '</style>';
    
    echo $css;
}
add_action( 'wp_head', 'electronics_store_custom_styles' );

// ====================================
// Admin Menu
// ====================================
function electronics_store_admin_menu() {
    add_menu_page(
        __( 'Theme Options', 'electronics-store' ),
        __( 'Theme Options', 'electronics-store' ),
        'manage_options',
        'electronics-store-options',
        'electronics_store_options_page',
        'dashicons-palette',
        65
    );
}
add_action( 'admin_menu', 'electronics_store_admin_menu' );

function electronics_store_options_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    ?>
    <div class="wrap">
        <h1><?php _e( 'Electronics Store Theme', 'electronics-store' ); ?></h1>
        
        <div style="background: white; padding: 20px; border-radius: 5px; max-width: 800px; margin-top: 20px;">
            <h2><?php _e( 'Quick Setup Guide', 'electronics-store' ); ?></h2>
            
            <h3><?php _e( 'Step 1: Customize Your Theme', 'electronics-store' ); ?></h3>
            <p><?php _e( 'Visit the customizer to set colors, typography, and contact information:', 'electronics-store' ); ?></p>
            <p><a href="<?php echo admin_url( 'customize.php' ); ?>" class="button button-primary"><?php _e( 'Go to Customizer', 'electronics-store' ); ?></a></p>
            
            <h3><?php _e( 'Step 2: Create Navigation Menu', 'electronics-store' ); ?></h3>
            <p><?php _e( 'Create your main navigation menu and assign it to the Primary Menu location:', 'electronics-store' ); ?></p>
            <p><a href="<?php echo admin_url( 'nav-menus.php' ); ?>" class="button button-primary"><?php _e( 'Go to Menus', 'electronics-store' ); ?></a></p>
            
            <h3><?php _e( 'Step 3: Create Important Pages', 'electronics-store' ); ?></h3>
            <p><?php _e( 'Create these pages and add them to your menu:', 'electronics-store' ); ?></p>
            <ul>
                <li><?php _e( 'Home', 'electronics-store' ); ?></li>
                <li><?php _e( 'About Us', 'electronics-store' ); ?></li>
                <li><?php _e( 'Services', 'electronics-store' ); ?></li>
                <li><?php _e( 'Products/Shop', 'electronics-store' ); ?></li>
                <li><?php _e( 'Contact', 'electronics-store' ); ?></li>
                <li><?php _e( 'Blog', 'electronics-store' ); ?></li>
            </ul>
            <p><a href="<?php echo admin_url( 'post-new.php?post_type=page' ); ?>" class="button button-primary"><?php _e( 'Create New Page', 'electronics-store' ); ?></a></p>
            
            <h3><?php _e( 'Step 4: Add Widgets', 'electronics-store' ); ?></h3>
            <p><?php _e( 'Add widgets to your sidebars for additional functionality:', 'electronics-store' ); ?></p>
            <p><a href="<?php echo admin_url( 'widgets.php' ); ?>" class="button button-primary"><?php _e( 'Go to Widgets', 'electronics-store' ); ?></a></p>
            
            <h3><?php _e( 'Step 5: Create Blog Posts', 'electronics-store' ); ?></h3>
            <p><?php _e( 'Start creating blog posts to engage your audience:', 'electronics-store' ); ?></p>
            <p><a href="<?php echo admin_url( 'post-new.php' ); ?>" class="button button-primary"><?php _e( 'Create New Post', 'electronics-store' ); ?></a></p>
            
            <h3><?php _e( 'Step 6: Install WooCommerce (Optional)', 'electronics-store' ); ?></h3>
            <p><?php _e( 'For e-commerce functionality, install the WooCommerce plugin:', 'electronics-store' ); ?></p>
            <p><a href="<?php echo admin_url( 'plugin-install.php?s=woocommerce' ); ?>" class="button button-primary"><?php _e( 'Install WooCommerce', 'electronics-store' ); ?></a></p>
            
            <h3><?php _e( 'Theme Features', 'electronics-store' ); ?></h3>
            <ul>
                <li>✓ <?php _e( 'Fully Responsive Design', 'electronics-store' ); ?></li>
                <li>✓ <?php _e( 'Multiple Widget Areas', 'electronics-store' ); ?></li>
                <li>✓ <?php _e( 'Theme Customizer', 'electronics-store' ); ?></li>
                <li>✓ <?php _e( 'WooCommerce Compatible', 'electronics-store' ); ?></li>
                <li>✓ <?php _e( 'Search Engine Optimized', 'electronics-store' ); ?></li>
                <li>✓ <?php _e( 'Custom Colors & Typography', 'electronics-store' ); ?></li>
                <li>✓ <?php _e( 'Custom Menu Locations', 'electronics-store' ); ?></li>
                <li>✓ <?php _e( 'Custom Logo Support', 'electronics-store' ); ?></li>
            </ul>
        </div>
    </div>
    <?php
}

// ====================================
// WooCommerce Support
// ====================================
if ( class_exists( 'WooCommerce' ) ) {
    add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
}

// ====================================
// Helper Function for Theme Mods
// ====================================
function electronics_store_get_phone() {
    return get_theme_mod( 'electronics_store_phone', '(800) 234-5678' );
}

function electronics_store_get_address() {
    return get_theme_mod( 'electronics_store_address', '8901 Marmora Road, Glasgow, D04 89GR' );
}

function electronics_store_get_email() {
    return get_theme_mod( 'electronics_store_email', 'info@example.com' );
}

function electronics_store_get_social( $social ) {
    return get_theme_mod( 'electronics_store_' . $social, '' );
}
