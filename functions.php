<?php

function business_agency_enqueue_assets() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'business_agency_enqueue_assets');

function business_agency_setup_theme() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu'
    ]);
}
add_action('after_setup_theme', 'business_agency_setup_theme');

// Register custom post type, Projects
function register_project_post_type() {
    register_post_type('project', [
        'labels' => [
            'name' => 'Projects',
            'singular_name' => 'Project',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'projects'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-portfolio',
    ]);
}
add_action('init', 'register_project_post_type');

function business_agency_enqueue_swiper() {
    // CSS Swiper
    wp_enqueue_style(
        'swiper-bundle', 
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),         
        '11.0.0'         
    );

    // JS Swiper
    wp_enqueue_script(
        'swiper-bundle',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),        
        '11.0.0',        
        true             
    );
}
add_action( 'wp_enqueue_scripts', 'business_agency_enqueue_swiper' );
