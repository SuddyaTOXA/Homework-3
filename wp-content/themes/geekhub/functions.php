<?php
/**
 * загрузка стилей и сриптов
 **/
function load_style_script(){
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_script('flipclock.min', get_template_directory_uri() . '/js/flipclock.min.js' );
    wp_enqueue_script('jquery.filter_input', get_template_directory_uri() . '/js/jquery.filter_input.js' );
    wp_enqueue_script('jquery-1.6.4.min', get_template_directory_uri() . '/js/jquery-1.6.4.min.js' );
    wp_enqueue_script('openapie369', get_template_directory_uri() . '/js/openapie369.js' );
    wp_enqueue_script('prefixfree.min', get_template_directory_uri() . '/js/prefixfree.min.js' );
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js' );


}

add_action('wp_enqueue_scripts', 'load_style_script');

/**
 * Меню
 **/

register_nav_menu('nav', 'Меню');

/**
 * Підтримка мініатюр
 **/

add_theme_support('post-thumbnails');



