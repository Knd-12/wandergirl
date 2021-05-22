<?php

// Load js and css
function load_my_styles_scripts(){

    // Enqueue CSS Assets
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/libs/bootstrap/bootstrap.min.css', array(), '4.6.0' );

    // Enqueue JS Assets
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/libs/bootstrap/bootstrap.bundle.min.js', array('jquery'), '4.6.0', TRUE );

}

add_action('wp_enqueue_scripts', 'load_my_styles_scripts');
require_once get_template_directory().'/inc/theme-navigation.php';