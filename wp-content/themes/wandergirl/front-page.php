<?php get_header(); 



$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);


 //Get custom fields
 $featured_image_position = get_field('$featured_image_position');
 $featured_image_height = get_field('$featured_image_height');
?>

<div class="primary-carousel carousel slide" data-ride="carousel">

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="<?= get_the_post_thumbnail_url() ?>" alt="<?=$alt?>">
      <div class="carousel-caption">
        <h1>Taking The Web to New Heights</h1>
        <p>Marketing // Design // Development</p>
        <a class="btn btn-primary" href="/contact/">Get in Touch</a>
      </div>
    </div>
  </div>

</div><!-- #home-carousel -->

<div class="container">
  <?php the_content(); ?>

</div>



<?php get_footer(); 


