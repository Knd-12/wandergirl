<?php /* Template Name: Example Template */ ?>

get_header();

wp_enqueue_script('faqa', get_template_directory_uri().'/assets/libs/faqs/faqs.js', array('jquery'), '4.6.0', TRUE );
    wp_enqueue_script('faqa', get_template_directory_uri().'/assets/libs/faqs/faqs.cs', array('jquery'), '4.6.0', TRUE );

// Check if featured is set, if not don't try to show it.
if( !empty(get_the_post_thumbnail_url()) ){

    // Get the alt text for the image
    $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

    //Get custom fields
    $featured_image_position = get_field('featured_image_position');

?>

<div class="primary-carousel post-carousel carousel slide" data-ride="carousel">

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid <?=$featured_image_position?>" src="<?= get_the_post_thumbnail_url() ?>" alt="<?=$alt?>">
    </div>
  </div>

</div><!-- #home-carousel -->
<?php } ?>

<div class="container">

    <h1 class="text-center mt-4 mb-4"><?php the_title() ?></h1>
    <?php the_content(); ?>

</div><!-- .container -->
<?php

get_footer();
