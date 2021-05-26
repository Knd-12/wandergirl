<footer id="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    if(is_active_sidebar('footer-widget-1')){
                        dynamic_sidebar('footer-widget-1');
                    }
                    ?>
                </div>
                <div class="col-md-3">
                    <?php
                    if(is_active_sidebar('footer-widget-2')){
                        dynamic_sidebar('footer-widget-2');
                    }
                    ?>
                </div>
                <div class="col-md-3">
                    <?php
                    if(is_active_sidebar('footer-widget-3')){
                        dynamic_sidebar('footer-widget-3');
                    }
                    ?>
                </div>
                <div class="col-md-3">
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
