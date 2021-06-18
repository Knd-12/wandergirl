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

<body>
<div class="container header-img">
    <div class="row p-4">
        
        <div class="col-sm-6">      
           
            <img class="img-fluid purple-girl <?=$featured_image_position?>" src="<?= get_the_post_thumbnail_url() ?>" alt="<?=$alt?>">            
            
        </div> 

        
        
        
        <div class="col-sm-6 p-5 text-center shape">
            
            <h4>Hi, I'm Kim</h4>
            <p class="caption">Travel blogging and documenting my trips with family and friends to some of the most exotic places on earth. If you like scenic pictures, contact me and I would be happy to make my art a part of your home!</p>
            <br>
            <a class="my-cta-button" href="\contact-me\">Send me a message</a>
            
        </div>
      
    </div>
</div>

<br>
<br>

<section id="info">
    <div class="container">
        <div class="row text-center p-2">
            <div class="col-sm-4">
                <img class="m-auto p-2 icon" src="\wp-content\uploads\2021\06\plane.png" alt="">
                <p class="m-auto"><strong>9</strong></p>
                <p>Countries visited</p>
                
            </div>
            <div class="col-sm-4">
                <img class="m-auto p-2 icon" src="\wp-content\uploads\2021\06\location.png" alt="">
                <p><strong>15000</strong></p>
                <p>Total travel miles</p>
                
            </div>
            <div class="col-sm-4">
                <img class="m-auto p-2 icon" src="\wp-content\uploads\2021\06\dollar.png" alt="">
                <p><strong>Unknown</strong></p>
                <p>Money spent</p>
                
            </div>
        
        </div>
    </div>
</section>

<br>


<div class="container">
    <?php the_content(); ?>
</div>


<section id="home-featured-works-section" class="section">
  
    <div class="container p-5">

        <div class="row fluid-img">
            <div class="col-sm-1"></div>

            <div class="col-sm-4">  
                <img class="rounded mx-auto d-block" src="\wp-content\uploads\2021\06\Icon open-globe.png" alt="" width="30">      
                <h4 class="text-center mt-3 text-light">My Destinations</h4>
                
            </div>
            <div class="col-sm-2"></div>

            <div class="col-sm-5"></div>

            <div class="row p-1">

                <div class="col-sm-1"></div>

                <div class="col-sm-4 m-auto">
                   
                    <p class="text-center text-light">MALDIVES | SINGAPORE | RUSSIA | INDIA |
                        U.A.E. | U.K. | AFRICA | CANADA
                    </p>
                </div>
                <div class="col-sm-1"></div>

                <div class="col-sm-6">
                    <p class="text-center text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo commodi aliquam itaque repellendus rerum adipisci. Quis nobis, eos ipsam ipsa laboriosam culpa adipisci nesciunt praesentium voluptatem, qui aspernatur dicta molestiae.
                    </p>

                </div>
                    
                    

            </div>
            
           
        </div>
    </div>

    <div class="container">
        

     

        <div class="row p-4">

            
            <?php

            $args = array(
                'post_type' => 'destinations',
                'posts_per_page'=> 3,
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
                    <h3 class="fwm-title pt-3"><?php the_title() ?></h3>
                    <a class="fwm-readmore btn btn-ghost" href="<?php the_permalink() ?>">View More</a>
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
            <br>
            <br>

           
        </div><!-- .row -->
        
        <div class="row">
        <div class="m-auto"><a class="my-cta-button" href="/destinations/">View More Destinations</a>
        <br><br>

        </div>
        
        
    </div>
        
    </div>


</section><!-- #home-featured-works-section -->





<section class="section">

    <h4 class="text-center my-5">Recent Blog Posts</h4>

    <div class="container m-auto">

        <div class="row text-center">
             

            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page'=> 1,
            );

            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-lg-3"></div>
                
                <div class="col-lg-6">
                    <a class="img-col-fill mb-3" href="<?php the_permalink() ?>">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="">
                    </a>
                    <h3><?php the_title() ?></h3>
                    <p class="h6"><?php the_time('M j,Y') ?></p>

                    <p><?php the_excerpt() ?></p>
                    <a class="cta-button  mb-5" href="<?php the_permalink() ?>">Read More</a>

                </div><!-- .col-md-4 -->
                <div class="col-lg-3"></div>

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

        <div class="text-center"><a class="my-cta-button" href="/category/news/">View More Posts</a></div>

    </div><!-- .container -->

</section><!-- #home-recent-posts-section -->


</body>

<?php

get_template_part('template-parts/content', 'cta');

get_footer();