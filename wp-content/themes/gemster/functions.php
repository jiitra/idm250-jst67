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

add_action('init', 'register_theme_menus');

add_action('wp_enqueue_scripts' , 'theme_scripts_and_styles');

add_theme_support('post-thumbnails');
add_post_type_support('page', 'excerpt');


?>