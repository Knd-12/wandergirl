
<?php

get_header();

?>

<div id="subheader-title-wrapper" class="pt-3 pb-3 mb-5">
    <div class="container">

        <h1>Searching: <?=htmlspecialchars($_GET['s'], ENT_QUOTES)?></h1>

    </div><!-- .container -->
</div>

<div class="container">

    <div class="row">
        <div class="col-lg-8">
        <?php

        if(have_posts()): while(have_posts()): the_post();

            if( !empty(get_the_post_thumbnail_url()) ){

                // Get the alt text for the image
                $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        ?>

                    <div class="blogroll-post-image-wrapper">
                        <a href="<?php the_permalink() ?>">
                            <img class="blogroll-post-image img-fluid" src="<?=get_the_post_thumbnail_url()?>" alt="<?=$alt?>">
                        </a>
                    </div>
            <?php } ?>

                <h3 class="mt-4 mb-4"><?php the_title() ?></h3>
                <?php the_excerpt(); ?>
                <a class="btn btn-primary mb-5" href="<?php the_permalink() ?>">Read More</a>
            <?php
            endwhile;
        else:
            echo '<p>Sorry,your search retured 0 results...Try again...<br>
            try running a search?
            </p>';
        endif;
        ?>
        </div><!-- .col-lg-8 -->
        <div class="col-lg-4">
            <?php
            if(is_active_sidebar('main-sidebar')){
                dynamic_sidebar('main-sidebar');
            }
            ?>
        </div><!-- .col-lg-4 -->

    </div><!-- .row -->

    <div class="nav-previous alignleft"><?php previous_posts_link( 'Newer posts >>' ); ?></div>
    <div class="nav-next alignright"><?php next_posts_link( '<< Older posts' ); ?></div>

</div><!-- .container -->
<?php

get_footer();
