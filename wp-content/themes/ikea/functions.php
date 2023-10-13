<?php

add_action('after_setup_theme', 'ikea_setup');
add_action('wp_enqueue_scripts', 'ikea_scripts');
/*
add_action('widgets_init', 'ikea_register');
add_action('init', 'ikea_register_types');
*/



add_filter('show_admin_bar', '__return_false');
add_filter('manage_posts_columns', 'ikea_add_col_likes');
add_filter('ikea_widget_text', 'do_shortcode');


remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


function ikea_setup()
{
    register_nav_menu('menu-header', 'Меню в шапке');
    register_nav_menu('menu-footer', 'Меню в подвале');

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('si_pic', 600, 240, true);
    //add_theme_support( 'menus' );
}

function ikea_scripts()
{
    wp_enqueue_script(
        'jquery',
        _ikea_assets_path('https://code.jquery.com/jquery-3.7.1.min.js'),
        [],
        '3.7.1',
        true
    );
    wp_enqueue_script(
        'js',
        _ikea_assets_path('js/js.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_style(
        'si-style',
        _ikea_assets_path('css/styles.css'),
        [],
        '1.0',
        'all'
    );
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('bodhi-svgs-attachment');
    wp_dequeue_style('wp-embed');
    wp_deregister_script('wp-embed');
}
/*
function ikea_register()
{
}

function ikea_register_types()
{
}
*/

function _ikea_assets_path($path)
{
    return get_template_directory_uri() . '/assets/' . $path;
}
