<?php

// Load style sheets
function load_css()
{
    wp_register_style(
        'bootstrap',
        get_template_directory_uri() . '/css/bootstrap.min.css',
        [],
        false,
        'all',
    );
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], false, 'all');
    wp_enqueue_style('main');
}

// tämä aktivoi tuon yllä olevan lataamisen
add_action('wp_enqueue_scripts', 'load_css');

//Load Java Script

function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script(
        'bootstrap',
        get_template_directory_uri() . '/js/bootstrap.min.js',
        'jquery',
        false,
        true,
    );
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme options
add_theme_support('menus'); // Tällä saadaan valikkoasetukset näkyviin
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus([
    'top-menu' => 'Top Menu Location', //ensin menun Id ja sitten menun visuaalinen nimi
    'mobile-menu' => 'Mobile Menu Location',
]);

//Custom Image Sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);

// Register Side Bars
function my_sidebars()
{
    register_sidebar([
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ]);

    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4 class ="widget-title">',
        'after_title' => '</h4>',
    ]);
}
add_action('widgets_init', 'my_sidebars');

function my_first_post_type()
{
    $args = [
        'labels' => [
            'name' => 'Cars',
            'singular_name' => 'Car',
        ], // jotta näkyy wp:n asetuspuolella
        'hierarchical' => true, // jos true, sivutyyppi on kuin normaali sivu, jos taas false, enemmän post
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-car',
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail'],

        // 'rewrite' => array ('slug' => 'my-cars'), jos haluttaisiin muuttaa url polkua muuksi kuin custom post typen nimi
    ];

    register_post_type('cars', $args);
}

add_action('init', 'my_first_post_type');

function my_first_taxonomy()
{
    $args = [
        'labels' => [
            'name' => 'Brands',
            'singular_name' => 'Brand',
        ],
        'public' => true,
        'hierarchical' => true, // jos true, taksonomia on kuin kategoria, jos taas false, enemmän tag
        'show_in_rest' => true,
    ];

    register_taxonomy('brands', ['cars'], $args);
}

add_action('init', 'my_first_taxonomy');

//php:n loppu

?>
