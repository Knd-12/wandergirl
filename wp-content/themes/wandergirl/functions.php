<?php

define('AERA_ASSET_VERSION', '1.0.0');

// Load js and css
function load_my_styles_scripts(){

    // Enqueue CSS Assets
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/libs/bootstrap/bootstrap.min.css', array(), '5.7.0' );
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/libs/fontawesome/all.min.css', array(), '5.7.0' );

    wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), AERA_ASSET_VERSION );


    // Enqueue JS Assets
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/libs/bootstrap/bootstrap.bundle.min.js', array('jquery'), '4.6.0', TRUE );

   

}

add_action('wp_enqueue_scripts', 'load_my_styles_scripts');
require_once get_template_directory().'/inc/theme-navigation.php';
require_once get_template_directory().'/inc/theme-support.php';
require_once get_template_directory().'/inc/theme-widget.php';