<?php

get_header();

// Check if featured is set, if not don't try to show it.
if( !empty(get_the_post_thumbnail_url()) ){

    // Get the alt text for the image
    $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

    //Get custom fields
    $featured_image_position = get_field('featured_image_position');

?>


<?php } ?>

<div class="container">

    <h4 class="text-center mt-4 mb-4"><?php the_title() ?></h4>
    <?php the_content(); ?>

</div><!-- .container -->
<?php

get_footer();
