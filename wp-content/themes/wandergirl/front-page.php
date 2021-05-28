<?php get_header(); ?>


<?php
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

//Get custom fields
$featured_image_position = get_field('featured_image_position');
$featured_image_height = get_field('featured_image_height');

?>

<div class="primary-carousel carousel slide" data-ride="carousel">

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item ht-<?=$featured_image_height?> active">
      <img class="img-fluid <?=$featured_image_position?>" src="<?= get_the_post_thumbnail_url() ?>" alt="<?=$alt?>">
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


<section id="home-featured-works-section" class="section">

      <h2 class="text-center my-5">Featured Works</h2>

      <div class="row no-marg">

          <?php

          $args = array(
              'post_type' => 'works',
              'posts_per_page'=> 8,
          );

          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post();

              $thumbnail_id = get_post_thumbnail_id( $post->ID );
              $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

              $client_website_link = get_field( "client_website_link" );
              ?>

          <div class="col-lg-3 col-sm-6 feature-work-image-wrapper no-pad">

              <div class="featured-works-meta">
                  <h3 class="fwm-title pt-4"><?php the_title() ?></h3>
                  <a class="fwm-readmore btn btn-ghost" href="<?php the_permalink() ?>">Read More</a>
                  <a class="fwm-offsite-link" href="<?=$client_website_link?>" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                  <a href="<?php the_permalink() ?>" class="fwm-overall-link"></a>
              </div><!-- .featured-works-meta -->

              <img src="<?php the_post_thumbnail_url() ?>" alt="<?=$alt?>">

          </div><!-- .col-lg-3 col-sm-6 -->

          <?php
              endwhile;

              wp_reset_postdata();

          else :
          ?>

              <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

          <?php
          endif;
          ?>

      </div><!-- .row -->



      <div class="text-center"><a class="btn btn-danger mt-5 " href="/works/">View More Works</a></div>

</section><!-- #home-featured-works-section -->


<section id="home-our-services-section">


    <h2 class="text-center my-5">OUR SERVICES</h2>

    <div class="row no-marg text-center">

        <div class="col-lg-4 no-pad">
            <a id="marketing-block" class="ourservices-block" href="#">
                <h3>Online Marketing</h3>
            </a><!-- .ourservices-block -->
        </div><!-- .col-sm-3 -->

        <div class="col-lg-4 no-pad">
            <a id="design-block" class="ourservices-block" href="#">
                <h3>Web Design</h3>
            </a><!-- .ourservices-block -->
        </div><!-- .col-sm-3 -->

        <div class="col-lg-4 no-pad">
            <a id="development-block" class="ourservices-block" href="#">
                <h3>Web Development</h3>
            </a><!-- .ourservices-block -->
        </div><!-- .col-sm-3 -->

    </div><!-- .row -->

</section><!-- #home-our-services-section -->


<section class="section">

    <h2 class="text-center my-5">Recent Posts</h2>

    <div class="container">

        <div class="row">

            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page'=> 3,
            );

            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>

                <div class="col-lg-4">
                    <a class="img-col-fill mb-3" href="<?php the_permalink() ?>">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="">
                    </a>
                    <h3><?php the_title() ?></h3>
                    <p class="h6"><?php the_time('M j,Y') ?></p>

                    <p><?php the_excerpt() ?></p>
                    <a class="btn btn-primary mb-5" href="<?php the_permalink() ?>">Read More</a>

                </div><!-- .col-md-4 -->

            <?php
                endwhile;

                wp_reset_postdata();

            else :
            ?>

                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

            <?php
            endif;
            ?>

        </div><!-- .row -->

        <div class="text-center"><a class="btn btn-danger mt-5" href="/category/news/">View More Posts</a></div>

    </div><!-- .container -->

</section><!-- #home-recent-posts-section -->

<?php

get_template_part('template-parts/content', 'cta');

get_footer();