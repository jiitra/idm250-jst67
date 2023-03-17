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

add_filter( 'excerpt_length', function($length) {
    return 20;
}, PHP_INT_MAX );

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

/**
 * Register custom sidebars
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 * @return void
 */
function register_theme_sidebars()
{
    register_sidebar([
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
    ]);
}
add_action('widgets_init', 'register_theme_sidebars');

function remove_archive_title_prefix($title)
{
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
}
add_filter('get_the_archive_title', 'remove_archive_title_prefix');

function my_acf_json_save_point($path)
{
    // update path
    $path = get_stylesheet_directory() . '/acf';
    // return
    return $path;
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_load_point($paths)
{
    // remove original path (optional)
    unset($paths[0]);

    // append path
    $paths[] = get_stylesheet_directory() . '/acf';

    // return
    return $paths;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function add_acf_options_page()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => 'Theme General Settings',
            'menu_title' => 'Theme Settings',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false,
        ]);
    }
}
add_action('init', 'add_acf_options_page');



add_action('init', 'register_custom_post_types');

add_action('init', 'register_theme_menus');

add_action('wp_enqueue_scripts' , 'theme_scripts_and_styles');

add_theme_support('post-thumbnails');
add_post_type_support('page', 'excerpt');


?>