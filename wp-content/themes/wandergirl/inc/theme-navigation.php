<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'primary-nav' => __( 'Primary Nav' ),

    )
  );
}
add_action( 'init', 'register_my_menus' );

// Register Custom Bootstrap 4 Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
