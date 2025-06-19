<?php

function business_agency_enqueue_assets() {
    wp_enqueue_style('business-agency-style', get_stylesheet_uri());
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
