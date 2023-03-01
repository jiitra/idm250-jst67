<?php

function theme_scripts_and_styles(){

wp_enqueue_style('gemster-styles', get_template_directory_uri() . '/dist/styles/main.css', [],
 filemtime(get_template_directory() . '/dist/styles/main.css'), 'all' );

 wp_enqueue_script(
    'gemster-scripts', // name of the script
    get_template_directory_uri() . '/dist/scripts/main.js', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/scripts/main.js
    [], // dependencies
    filemtime(get_template_directory() . '/dist/scripts/main.js'), // version number
    true // load in footer
);

}

function register_theme_menus(){
    register_nav_menus(
        [
            'primary-menu' => 'Primary Menu',
            'footer-menu' => 'Footer Menu'
        ]
    );
}

function register_custom_post_types()
{
    // Register gems post type
    register_post_type(
        'gems',
        [
            'labels' => [
                'name' => __('gems'),
                'singular_name' => __('gem')
            ],
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'gems'],
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
            'show_in_rest' => true,
        ]
    );
}

/**
 * Get menu items as a flat array to use for custom markup
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 * @param string $menu_name - Name of the registered menu id
 * @return array $menu_items - Array of WP_Post objects.
 */
function get_theme_menu($menu_name)
{
    // Get menu items as a flat array
    $locations = get_nav_menu_locations();
    // If menu doesn't exist, let's just return an empty array
    if (!isset($locations[$menu_name])) {
        return [];
    }
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
    return $menu_items;
}

add_action('init', 'register_custom_post_types');

add_action('init', 'register_theme_menus');

add_action('wp_enqueue_scripts' , 'theme_scripts_and_styles');

add_theme_support('post-thumbnails');
add_post_type_support('page', 'excerpt');


?>