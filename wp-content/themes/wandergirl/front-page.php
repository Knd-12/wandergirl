<?php get_header(); ?>


<?php
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

//Get custom fields
$featured_image_position = get_field('featured_image_position');
$featured_image_height = get_field('featured_image_height');

?>

<br>
<br>
<br>
<div class="container header-img">
    <div class="row">
        <div class="col-sm-6 p-5 ">
            

           
                
            <img class="img-fluid purple-girl <?=$featured_image_position?>" src="<?= get_the_post_thumbnail_url() ?>" alt="<?=$alt?>">
            
            
        </div> 

        <div class="col-sm-2"></div>
            
        

        <div class="col-sm-4 p-5 text-center shape">
           
            <h1>HI, I'M KIM</h1>
            <p class="caption">Travel blogging and documenting my trips with family and friends to some of the most exotic places on earth. You like the pictures you see? Contact me, and I would be happy to make my art a part of your home!</p>
            <br>
            <a class="btn btn-danger" href="/contact/">Send me a message</a>
            
        </div>
    </div>
</div>

<br>
<br>
<br>


<div class="container">
    <?php the_content(); ?>
</div>


<section id="home-featured-works-section" class="section">
    <div class="container">
        <div class="col-md-12">
            <img class="float-center p-5" src="\wp-content\uploads\2021\06\Icon open-globe.png" alt="">
            <h2 class="text-center m-auto p-5">My Destinations</h2>
            <p class="text-center p-1 text-light">MALDIVES | SINGAPORE | RUSSIA | INDIA |
                U.A.E. | U.K. | AFRICA | CANADA</p>
                <p class="text-center text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo commodi aliquam itaque repellendus rerum adipisci. Quis nobis, eos ipsam ipsa laboriosam culpa adipisci nesciunt praesentium voluptatem, qui aspernatur dicta molestiae.</p>
        </div>

        

     

      <div class="row p-5">

          <?php

          $args = array(
              'post_type' => 'works',
              'posts_per_page'=> 4,
          );

          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post();

              $thumbnail_id = get_post_thumbnail_id( $post->ID );
              $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

              $client_website_link = get_field( "client_website_link" );
              ?>

          <div class="col-lg-3 col-sm-6 feature-work-image-wrapper m-auto">

              <div class="featured-works-meta p-4">
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



      <div class="text-center"><a class="btn btn-danger mt-5 " href="/works/">View More Destinations</a></div>
    </div>

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