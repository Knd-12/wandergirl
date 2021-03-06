<?php /* Template Name: Contact Me Template */ 

get_header();

?>


<h4 class="text-center mt-4 mb-4"><?php the_title() ?></h4>
<p class="text-center mt-4 mb-4">Taking pictures has been my life's work. Send me a message today if you want to be part of my travelling team. If you are interested in purchasing my pictures, let me know!</p>
<hr>
<?php the_content(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <img class="img-fluid" src="\wp-content\uploads\2021\06\wilderbeast.JPG" alt="">
      <p class="p-2">3 wilderbeasts sperated from the herd during an early morning Safari tour in Nairobi, Kenya. </p>
    </div>
    
   
    <div class="col-sm-8 p-5">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">          
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Type message here"></textarea>
        </div>
        
        <button type="submit" class="cta-button">Submit</button>
      </form>    
    </div> 

    
     
  </div>

    

</div><!-- .container -->
<?php

get_footer();
