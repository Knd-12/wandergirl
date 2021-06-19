<footer id="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="posts">
                        <?php
                        if(is_active_sidebar('footer-widget-1')){
                            dynamic_sidebar('footer-widget-1');
                        }
                        ?>
                    </div>
                </div>
                <div class="search-container col-md-3 float-right">
                    <?php
                    if(is_active_sidebar('footer-widget-2')){
                        dynamic_sidebar('footer-widget-2');
                    }
                    ?>
                </div>
               
                <div class="col-md-3 p-3">
                    <div>
                        <img src="\wp-content\uploads\2021\06\Group 2.png" alt="">
                    </div>
                    <div class="sm-icons text-center">
                        <a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://twitter.com/" target="blank"><i class="fab fa-twitter-square"></i></a>
                        <a href="https://www.instagram.com/" target="blank"><i class="fab fa-instagram"></i></a>
                        
                    </div>
                    
                </div>

            </div><!-- .container -->
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
