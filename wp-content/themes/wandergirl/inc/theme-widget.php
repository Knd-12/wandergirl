<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function aera_widgets_init() {
    // Footer Widgets
    register_sidebar( array(
        'name' => 'Footer Widget 1',
        'id' => 'footer-widget-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Widget 2',
        'id' => 'footer-widget-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-widget-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Main Sidebar
    register_sidebar( array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'before_widget' => '<div id="main-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',

    ) );

}
add_action( 'widgets_init', 'aera_widgets_init' );
