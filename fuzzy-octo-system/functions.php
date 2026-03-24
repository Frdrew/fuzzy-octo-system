<?php
if (! defined('ABSPATH')) { exit; }

define('CWC_THEME_VER', '1.0.0');

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', ['height' => 120, 'width' => 120, 'flex-height' => true, 'flex-width' => true]);
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    register_nav_menus([
        'primary' => __('Primary Menu', 'cwc-clovis'),
        'footer'  => __('Footer Menu', 'cwc-clovis'),
    ]);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('cwc-clovis-style', get_stylesheet_uri(), [], CWC_THEME_VER);
    wp_enqueue_style('cwc-clovis-theme', get_template_directory_uri() . '/assets/css/theme.css', [], CWC_THEME_VER);
    wp_enqueue_script('cwc-clovis-theme', get_template_directory_uri() . '/assets/js/theme.js', [], CWC_THEME_VER, true);
    wp_localize_script('cwc-clovis-theme', 'cwcTheme', [
        'menuLabel' => __('Menu', 'cwc-clovis')
    ]);
});

function cwc_get_option($key, $default = '') {
    $options = get_option('cwc_settings', []);
    return isset($options[$key]) ? $options[$key] : $default;
}

function cwc_primary_menu() {
    wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'nav-menu',
        'fallback_cb'    => false,
    ]);
}

add_filter('body_class', function ($classes) {
    if (is_front_page()) {
        $classes[] = 'cwc-front-page';
    }
    return $classes;
});