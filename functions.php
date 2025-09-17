<?php
// Theme setup
function snh_hospital_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'snh-hospital'),
        'footer'  => __('Footer Menu', 'snh-hospital'),
    ));
}
add_action('after_setup_theme', 'snh_hospital_setup');

// Enqueue styles & scripts
function snh_hospital_scripts() {
    // main theme stylesheet (style.css in root)
    wp_enqueue_style(
        'snh-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // assets/css/main.css (if exists, enqueue with cache-busting)
    $main_css_path = get_stylesheet_directory() . '/assets/css/main.css';
    if (file_exists($main_css_path)) {
        wp_enqueue_style(
            'snh-main',
            get_stylesheet_directory_uri() . '/assets/css/main.css',
            array('snh-style'),
            filemtime($main_css_path)
        );
    }

    // Hero slider JS
    wp_enqueue_script(
        'hero-slider',
        get_template_directory_uri() . '/assets/js/hero-slider.js',
        array(), // no dependency (add ['jquery'] if you use jQuery inside)
        filemtime(get_template_directory() . '/assets/js/hero-slider.js'),
        true
    );
    
}
add_action('wp_enqueue_scripts', 'snh_hospital_scripts');
// Enqueue Google Fonts
// Enqueue Google Fonts (Roboto Slab + Open Sans)
function snh_hospital_google_fonts() {
    wp_enqueue_style(
        'snh-google-fonts',
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Roboto+Slab:wght@400;600;700&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'snh_hospital_google_fonts');


