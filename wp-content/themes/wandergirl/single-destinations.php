<?php

get_header();

wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array(), '3.5.7' );

wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array('jquery'), '3.5.7', TRUE );




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
    <?php 
    
    the_content(); 
    
    ?>

</div><!-- .container -->


<div class="container p-4">
    <h3 class="text-center"> If you would like to purchase my photography, just send me a message with the name of the picture!</h3>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 m-auto text-center p-2">
            <a class="my-cta-button" href="\contact-me\">Send me a message</a>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<?php

get_footer();
