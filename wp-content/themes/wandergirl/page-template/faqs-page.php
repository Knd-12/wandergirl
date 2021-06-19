<?php /* Template Name: Example Template */ 

get_header();

wp_enqueue_script('faqa', get_template_directory_uri().'/assets/libs/faqs/faqs.js', array('jquery'), '4.6.0', TRUE );
    wp_enqueue_script('faqa', get_template_directory_uri().'/assets/libs/faqs/faqs.cs', array('jquery'), '4.6.0', TRUE );

// Check if featured is set, if not don't try to show it.
 ?>

<div class="container">

    <h4 class="text-center mt-4 mb-4 p-2"><?php the_title() ?></h4>
    <?php the_content(); ?>

  

</div><!-- .container -->



<div class="container">
  <div class="row">
    <div class="col-sm-6">
    <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        What sizes are avaiable for print?
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      - 16.5 x 23.4 in (A2 size). I plan on expanding the print size range as soon as those requests start rolling in. 
            I promise more sizes to come soon!
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        How will it be delievered?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      - I use the trusted courier service FedEx for all my shipments, which take 2-3 business days unless an error occurs on the service side. All items are carefully packaged and sealed tight to avoid any misfortunes.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Are the pictures really yours?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      Yes. My pictures are my insights to my travels. I like sharing my experience with the world. Show people that our home can be a beautiful place, if you just stop and look even just for a second.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        How much do your pictuers sell for?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      Currently I am selling my photography at a high rate to generate some income, which will help me fund my future trips and expand my team. Every purchase made goes back into investment for better equipments.
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
    <img class="rounded mx-auto d-block img-fluid" src="\wp-content\uploads\2021\06\singapore.JPG" alt="" width="100%">
    </div>
  </div>
</div>



  



<?php




get_footer();
