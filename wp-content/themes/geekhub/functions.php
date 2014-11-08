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

register_nav_menus( array(
    'header_menu' => 'Menu in header',
    'footer_menu' => 'Menu in footer'
) );

/**
 * Підтримка мініатюр
 **/

add_theme_support('post-thumbnails');

/**
 * Пост тайп "Викладачі"
 **/

function teachers() {
    register_post_type( 'teachers', array(
        'description' => 'Teachers GeekHub.',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-groups',
        'supports' => array( 'title', 'editor','thumbnail', 'custom-fields' ),
        'labels' => array(
            'name' => 'Teachers',
            'singular_name' => 'Teacher',
            'menu_name' => 'Teachers',
            'name_admin_bar' => 'Teacher',
            'add_new' => 'Add new',
            'add_new_item' => 'Add new teacher',
            'edit_item' => 'Edit teacher',
            'new_item' => 'New teacher',
            'all_items' => 'All teachers',
            'view_item' => 'Display teachers',
            'search_items' => 'Find teacher',
            'not_found' => 'Teachers were not found',
            'not_found_in_trash' => 'Teachers were not found in the Trash',
            'parent_item_colon' => '',
        )
    ));
}

add_action( 'init', 'teachers' );

/**
 * Пост тайп "Курси"
 **/

function courses() {
    register_post_type( 'courses', array(
        'description' => 'Courses of GeekHub.',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array( 'title', 'editor','thumbnail','excerpt' ,'custom-fields' ),
        'labels' => array(
            'name' => 'Courses',
            'singular_name' => 'Course',
            'menu_name' => 'Courses',
            'name_admin_bar' => 'Course',
            'add_new' => 'Add new',
            'add_new_item' => 'Add new course',
            'edit_item' => 'Edit course',
            'new_item' => 'New course',
            'all_items' => 'All courses',
            'view_item' => 'Display courses',
            'search_items' => 'Find course',
            'not_found' => 'Courses were not found',
            'not_found_in_trash' => 'Courses were not found in the Trash',
            'parent_item_colon' => '',
        )
    ));
}

add_action( 'init', 'courses' );

/**
 * Нова таксономія
 **/
function create_direction_taxonomies(){

    register_taxonomy( 'directions-of-study', array('courses', 'teachers'), array(
        'hierarchical' => false,
        'labels' => array(
            'name' => __( "Directions of study"),
            'singular_name' => __( 'Directions' ),
            'search_items' =>  __( 'Search Directions' ),
            'all_items' => __( 'All Directions'),
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' => __( 'Edit Direction' ),
            'update_item' => __( 'Update Direction'),
            'add_new_item' => __( 'Add New Direction' ),
            'new_item_name' => __( 'New Direction Name' ),
            'separate_items_with_commas' => __( 'Separate direction with commas' ),
            'add_or_remove_items' => __( 'Add or remove direction' ),
            'choose_from_most_used' => __( 'Choose from the most used directions' ),
            'menu_name' => __( 'Directions' ),
        ),
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'educational-direction' ),
    ));
}
add_action( 'init', 'create_direction_taxonomies', 0 );
