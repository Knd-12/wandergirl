<footer id="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="posts">
                        <?php
                        if(is_active_sidebar('footer-widget-1')){
                            dynamic_sidebar('footer-widget-1');
                        }
                        ?>
                    </div>
                </div>
                <div class="search-container col-md-6">
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
                    <div class="sm-icons">
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-google-plus-square"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                    
                </div>

            </div><!-- .container -->
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
