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

add_action('wp_enqueue_scripts' , 'theme_scripts_and_styles');


?>