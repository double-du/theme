<?php
// Funções do tema

function eduardo_theme_setup() {
    // Suporte para traduções
    load_theme_textdomain('eduardo-theme', get_template_directory() . '/languages');
    
    // Registrar menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'eduardo-theme'),
    ));
    
    // Adicionar suporte ao título
    add_theme_support('title-tag');
    
    // Registrar Custom Post Type para Portfólio
    register_portfolio_post_type();
}
add_action('after_setup_theme', 'eduardo_theme_setup');

// Registrar Custom Post Type para Portfólio
function register_portfolio_post_type() {
    $labels = array(
        'name' => __('Portfolio', 'eduardo-theme'),
        'singular_name' => __('Portfolio Item', 'eduardo-theme'),
        'menu_name' => __('Portfolio', 'eduardo-theme'),
        'add_new' => __('Add New', 'eduardo-theme'),
        'add_new_item' => __('Add New Portfolio Item', 'eduardo-theme'),
        'edit_item' => __('Edit Portfolio Item', 'eduardo-theme'),
        'new_item' => __('New Portfolio Item', 'eduardo-theme'),
        'view_item' => __('View Portfolio Item', 'eduardo-theme'),
        'search_items' => __('Search Portfolio', 'eduardo-theme'),
        'not_found' => __('No portfolio items found', 'eduardo-theme'),
        'not_found_in_trash' => __('No portfolio items found in Trash', 'eduardo-theme'),
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-portfolio',
    );
    
    register_post_type('portfolio', $args);
}

// Adicionar scripts e estilos
function eduardo_theme_scripts() {
    // Estilos
    wp_enqueue_style('eduardo-theme-style', get_stylesheet_uri());
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    
    // Scripts
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true);
    wp_enqueue_script('eduardo-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'eduardo_theme_scripts');